<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentAdmission;
use App\Models\CourseStudyAll;
use Illuminate\Support\Facades\Hash;


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

        if ($request->filled('search')) {

            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('admission_no', 'like', "%{$search}%")
                ->orWhereRaw("CONCAT(first_name, ' ', surname) LIKE ?", ["%{$search}%"])
                ->orWhere('phone_no', 'like', "%{$search}%");
            });
        }

        $students = $query->latest()->paginate(20)->withQueryString();

        $programmes = CourseStudyAll::all();

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

            $pictureName = $request->admission_no . '_' . time() . '.' . $file->getClientOriginalExtension();

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
    public function update(Request $request, Student $student)
    {
        $data = $request->all();

        if ($request->hasFile('picture')) {

            $file = $request->file('picture');

            $pictureName = $student->admission_no . '_' . time() . '.' . $file->getClientOriginalExtension();

            $file->storeAs('students', $pictureName, 'public');

            $data['picture_name'] = $pictureName;
        }

        $student->update($data);

        return back()->with('success', 'Student updated');
    }
    /*
    |---------------------------------------------------
    | DELETE STUDENT
    |---------------------------------------------------
    */
    public function destroy(Student $student)
    {
        $student->delete();

        return back()->with('success', 'Student deleted successfully');
    }

    public function downloadSample()
    {
        $filePath = public_path('samples/student_sample.xlsx');

        return response()->download($filePath);
    }

    
}
