<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseModule;
use App\Models\CourseMaterial;

class AdminDashboardController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard', [
            'totalCourses' => Course::count(),
            'totalModules' => CourseModule::count(),
            'totalMaterials' => CourseMaterial::count(),
            'totalStudents' => 0, // future module
        ]);
    }
}
