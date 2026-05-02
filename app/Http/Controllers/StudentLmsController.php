<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentAdmission;
use App\Models\CourseStudyAll;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentsImport;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\IOFactory;


class StudentLmsController extends Controller
{
    //
    /*
    |---------------------------------------------------
    | LIST STUDENTS
    |---------------------------------------------------
    */
    public function index(Request $request)
    {
        $query = StudentAdmission::query();

        /*
        |--------------------------------------------------------------------------
        | GLOBAL SEARCH (your existing logic improved)
        |--------------------------------------------------------------------------
        */
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('admission_no', 'like', "%{$search}%")
                ->orWhere('surname', 'like', "%{$search}%")
                ->orWhere('first_name', 'like', "%{$search}%")
                ->orWhere('other_name', 'like', "%{$search}%")
                ->orWhereRaw("CONCAT(first_name, ' ', surname) LIKE ?", ["%{$search}%"])
                ->orWhere('phone_no', 'like', "%{$search}%");
            });
        }

        /*
        |--------------------------------------------------------------------------
        | ADVANCED FILTERS (new UI)
        |--------------------------------------------------------------------------
        */

        if ($request->filled('admission_no')) {
            $query->where('admission_no', 'like', '%' . $request->admission_no . '%');
        }

        if ($request->filled('surname')) {
            $query->where('surname', 'like', '%' . $request->surname . '%');
        }

        if ($request->filled('first_name')) {
            $query->where('first_name', 'like', '%' . $request->first_name . '%');
        }

        if ($request->filled('other_name')) {
            $query->where('other_name', 'like', '%' . $request->other_name . '%');
        }

        if ($request->filled('programme')) {
           $query->where('department', 'like', '%' . $request->programme . '%');
        }

        if ($request->filled('level')) {
            $query->where('level', $request->level);
        }

        if ($request->filled('session1')) {
            $query->where('session1', $request->session1);
        }

        /*
        |--------------------------------------------------------------------------
        | FINAL DATA
        |--------------------------------------------------------------------------
        */
        $students = $query->latest()->paginate(10)->withQueryString();
        $programmes = CourseStudyAll::all();

        /*
        |--------------------------------------------------------------------------
        | AJAX SUPPORT (for live search)
        |--------------------------------------------------------------------------
        */
        if ($request->ajax()) {
            return view('admin.students.partials.student-table', compact('students'))->render();
        }

        return view('admin.students.index', compact('students', 'programmes'));
    }

    

    /*
    |---------------------------------------------------
    | STORE STUDENT
    |---------------------------------------------------
    */
    public function store(Request $request)
    {
        $request->validate([
            'admission_no' => 'required|string|max:50|unique:student_admissions,admission_no',

            'surname'      => 'required|string|max:100',
            'first_name'   => 'required|string|max:100',
            'other_name'   => 'nullable|string|max:100',
            'department'   => 'required|string|max:150',
            'phone_no'     => 'required|string|max:20',
            'state'        => 'nullable|string|max:100',
            'level'        => 'required|in:100,200,300,NDI,NDII,HNDI,HNDII',
            'sex'          => 'required|in:Male,Female',
            'session1'     => 'required|string|max:20',
            // OPTIONAL IMAGE
            'picture'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // 📸 HANDLE IMAGE
        $pictureName = 'blank';

        if ($request->hasFile('picture')) {

            $file = $request->file('picture');

            $pictureName = $request->admission_no . '_' . time();

            $destination = public_path('uploads/students');

            if (!file_exists($destination)) {
                mkdir($destination, 0777, true);
            }

            $file->move($destination, $pictureName);
        }

        StudentAdmission::create([
            'admission_no' => $request->admission_no,
            'first_name' => $request->first_name,
            'surname' => $request->surname,
            'other_name' => $request->other_name,
            'department' => $request->department,
            'phone_no' => $request->phone_no,
            'state' => $request->state,
            'level' => $request->level,
            'sex' => $request->sex,
            'session1' => $request->session1,

            'login_status' => 0,
            'login_attempts' => 0,
            'user_type' => 'STUDENT',

            'picture_name' => $pictureName,
            'username' => $request->phone_no,
            'password' => Hash::make($request->phone_no),
        ]);

        return redirect()->route('students.home')->with('success', 'Student created successfully');
    }

    /*
    |---------------------------------------------------
    | UPDATE STUDENT
    |---------------------------------------------------
    */
    public function update(Request $request, StudentAdmission $student)
    {
        // dd(request()->keys());
        $data = $request->validate([
            'admission_no' => 'required|unique:student_admissions,admission_no,' . $student->id,
            'first_name'   => 'required',
            'surname'      => 'required',
            'other_name'   => 'nullable',
            'department'   => 'required',
            'phone_no'     => 'required',
            'state'        => 'required',
            'level'        => 'required',
            'sex'          => 'required',
            'session1'     => 'required',
            'picture'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('picture')) {

            $file = $request->file('picture');

            $pictureName = $student->admission_no . '_' . time() ;
            // $pictureName = $student->admission_no . '_' . time() . '.' . $file->getClientOriginalExtension(); 

            $destination = public_path('uploads/students');

            if (!file_exists($destination)) {
                mkdir($destination, 0777, true);
            }

            $file->move($destination, $pictureName);

            $data['picture_name'] = $pictureName;
        }

        $student->update($data);

        return redirect()->route('students.home')->with('success', 'Student updated');
    }

    /*
    |---------------------------------------------------
    | DELETE STUDENT
    |---------------------------------------------------
    */
    public function delete(StudentAdmission $student)
    {
        // Define default image(s) that must NEVER be deleted
        $defaultImages = ['blank.jpg', ''];

        // Check if student has a real picture
        if (
            $student->picture_name &&
            !in_array($student->picture_name, $defaultImages)
        ) {
            $filePath = public_path('uploads/students' . $student->picture_name);

            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        // Delete student record
        $student->delete();

        return back()->with('success', 'Student deleted successfully');
    }

    public function downloadSample()
    {
        $filePath = public_path('sample/student.xlsx');

        return response()->download($filePath);
    }

    private function normalizeAdmissionNo(string $admissionNo): string
    {
        return strtoupper(
            preg_replace('/[^A-Z0-9]/i', '', trim($admissionNo))
        );
    }

    public function import(Request $request)
    {
        // 1️⃣ Validate request
        $request->validate([
            'file'     => 'required|file|mimes:csv,xlsx',
            'session1' => 'required|string',
        ]);

        $file     = $request->file('file');
        $session1 = $request->get('session1');
        $filePath = $file->getRealPath();

        $rows = [];

        // 2️⃣ Read Excel or CSV file
        try {
            $spreadsheet = IOFactory::load($filePath);
            $worksheet   = $spreadsheet->getActiveSheet();
            $rows        = $worksheet->toArray(null, true, true, true); // preserve columns
        } catch (\Throwable $e) {
            Log::error('File read failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Unable to read uploaded file.');
        }

        if (empty($rows)) {
            return redirect()->back()->with('error', 'The file is empty.');
        }

        // 3️⃣ Extract headers (first row)
        $headerRow = array_shift($rows);
        $headers = array_map(fn($h) => strtolower(trim($h)), array_values($headerRow));

        $expectedHeaders = [
            'admission_no',
            'surname',
            'first_name',
            'other_name',
            'department',
            'department1',
            'phone_no',
            'state',
            'level',
            'sex',
        ];

        // 4️⃣ Validate headers (order-independent)
        if (array_diff($expectedHeaders, $headers) || array_diff($headers, $expectedHeaders)) {
            return redirect()->back()->with(
                'error',
                'Invalid file headers. Expected exactly: ' . implode(', ', $expectedHeaders)
            );
        }

        DB::beginTransaction();

        try {
            foreach ($rows as $rowNumber => $row) {

                $values = array_values($row);

                if (count($values) !== count($headers)) {
                    Log::warning("Row " . ($rowNumber + 2) . " skipped: column count mismatch");
                    continue; // skip malformed row
                }

                $data = array_combine($headers, $values);

                if (empty($data['admission_no'])) {
                    continue; // skip empty admission_no
                }

                // 5️⃣ Normalize admission number (remove slashes)
                $normalizedAdmissionNo = $this->normalizeAdmissionNo($data['admission_no']);

                // 6️⃣ Prevent duplicate
                $exists = DB::table('student_admissions')
                    ->where('admission_no', $normalizedAdmissionNo)
                    ->where('department', trim($data['department']))
                    ->exists();

                if ($exists) {
                    continue; // skip duplicates
                }

                // 7️⃣ Insert student
                DB::table('student_admissions')->insert([
                    'admission_no'   => $normalizedAdmissionNo,
                    'surname'        => trim($data['surname']),
                    'first_name'     => trim($data['first_name']),
                    'other_name'     => trim($data['other_name']),
                    'department'     => trim($data['department']),
                    'department1'    => trim($data['department']),
                    'phone_no'       => trim($data['phone_no']),
                    'phone_no1'      => trim($data['phone_no']),
                    'state'          => trim($data['state']),
                    'level'          => trim($data['level']),
                    'sex'            => trim($data['sex']),
                    'picture_name'   => 'blank',
                    'user_name'      => trim($data['phone_no']),
                    'password'       => bcrypt(trim($data['phone_no'])),
                    'session1'       => $session1,
                    'user_type'      => 'student',
                    'login_status'   => 0,
                    'login_attempts' => 0,
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ]);
            }

            DB::commit();
            return redirect()->back()->with('success', 'Student list imported successfully.');

        } catch (\Throwable $e) {

            DB::rollBack();
            Log::error('Student import failed', ['error' => $e->getMessage()]);

            return redirect()->back()->with(
                'error',
                'Student list import failed. Please check your file.'
            );
        }
    }

    
}
