<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseStudyAll;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of courses
     */
    public function index()
    {
        $courses = Course::withCount('modules')
            ->latest()
            ->get();

        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        $programmes = CourseStudyAll::all();

        $levels = [
            '100',
            '200',
            '300',
            'NDI',
            'NDII',
            'HNDI',
            'HNDII',
        ];

        return view('admin.courses.create', compact('programmes', 'levels'));
    }

    /**
     * Store a newly created course
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'programme' => 'nullable|string|max:255',
            'level' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        Course::create($request->all());

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course created successfully');
    }

    /**
     * Display single course (with modules + materials)
     */
    public function show(Course $course)
    {
        $course->load('modules.materials');

        return view('admin.courses.show', compact('course'));
    }

    /**
     * Show edit form
     */
    public function edit(Course $course)
    {
       $programmes = CourseStudyAll::all();

        $levels = [
            '100',
            '200',
            '300',
            'NDI',
            'NDII',
            'HNDI',
            'HNDII',
        ];

        return view('admin.courses.edit', compact('course', 'programmes', 'levels'));
    }

    /**
     * Update course
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'programme' => 'nullable|string|max:255',
            'level' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $course->update($request->all());

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course updated successfully');
    }

    /**
     * Delete course
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course deleted successfully');
    }
}