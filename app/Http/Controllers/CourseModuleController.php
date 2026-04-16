<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseModule;
use Illuminate\Http\Request;

class CourseModuleController extends Controller
{
    /**
     * Store a newly created module
     */
    public function store(Request $request, Course $course)
    {
        $request->validate([
            'module_number' => 'required|integer|min:1',
            'title' => 'required|string|max:255',
        ]);

        // 🚨 Prevent duplicate module numbers in same course
        $exists = CourseModule::where('course_id', $course->id)
            ->where('module_number', $request->module_number)
            ->exists();

        if ($exists) {
            return back()->with('error', 'Module number already exists for this course.');
        }

        // Create module
        $course->modules()->create([
            'module_number' => $request->module_number,
            'title' => $request->title,
            'position' => $request->module_number,
        ]);

        return back()->with('success', 'Module created successfully.');
    }

    public function update(Request $request, CourseModule $module)
    {
        $request->validate([
            'module_number' => 'required|integer|min:1',
            'title' => 'required|string|max:255',
        ]);

        // Prevent duplicate module numbers in same course
        $exists = CourseModule::where('course_id', $module->course_id)
            ->where('module_number', $request->module_number)
            ->where('id', '!=', $module->id)
            ->exists();

        if ($exists) {
            return back()->with('error', 'Module number already exists.');
        }

        $module->update([
            'module_number' => $request->module_number,
            'title' => $request->title,
        ]);

        return back()->with('success', 'Module updated successfully.');
    }
    
}