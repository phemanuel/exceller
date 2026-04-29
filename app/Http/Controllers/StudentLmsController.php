<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentAdmission;
use App\Models\CourseStudyAll;

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

        if ($request->search) {
            $query->where('admission_no', 'like', "%{$request->search}%")
                  ->orWhere('first_name', 'like', "%{$request->search}%")
                  ->orWhere('surname', 'like', "%{$request->search}%");
        }

        $students = $query->latest()->paginate(20);
        $programmes = CourseStudyAll::All();

        return view('admin.students.index', compact('students','programmes'));
    }

    /*
    |---------------------------------------------------
    | STORE STUDENT
    |---------------------------------------------------
    */
    public function store(Request $request)
    {
        $request->validate([
            'admission_no' => 'required|unique:students',
            'phone_no' => 'required',
        ]);

        // 📸 HANDLE IMAGE
        $pictureName = 'blank.png';

        if ($request->hasFile('picture')) {

            $file = $request->file('picture');

            $pictureName = $request->admission_no . '_' . time() . '.' . $file->getClientOriginalExtension();

            $file->storeAs('students', $pictureName, 'public');
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

        return back()->with('success', 'Student created successfully');
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
