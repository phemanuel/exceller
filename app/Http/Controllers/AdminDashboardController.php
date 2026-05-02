<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\CourseModule;
use App\Models\CourseMaterial;
use App\Models\StudentAdmission;

class AdminDashboardController extends Controller
{
    //
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC STATS
        |--------------------------------------------------------------------------
        */
        $totalCourses = Course::count();
        $totalModules = CourseModule::count();
        $totalMaterials = CourseMaterial::count();
        $totalStudents = StudentAdmission::count();
        $totalUsers = User::count();

        /*
        |--------------------------------------------------------------------------
        | ANALYTICS DATA (FOR CHARTS)
        |--------------------------------------------------------------------------
        */

        // Students by level
        $studentsByLevel = StudentAdmission::selectRaw('level, COUNT(*) as total')
            ->groupBy('level')
            ->pluck('total', 'level');

        // Students by programme (department)
        $studentsByProgramme = StudentAdmission::selectRaw('department, COUNT(*) as total')
            ->groupBy('department')
            ->pluck('total', 'department');

        // Monthly registrations (last 6 months)
        $monthlyStudents = StudentAdmission::selectRaw("DATE_FORMAT(created_at, '%b') as month, COUNT(*) as total")
            ->where('created_at', '>=', now()->subMonths(6))
            ->groupBy('month')
            ->pluck('total', 'month');

        /*
        |--------------------------------------------------------------------------
        | RECENT ACTIVITY
        |--------------------------------------------------------------------------
        */
        $recentStudents = StudentAdmission::latest()->take(5)->get();

        /*
        |--------------------------------------------------------------------------
        | RETURN VIEW
        |--------------------------------------------------------------------------
        */
        return view('admin.dashboard', compact(
            'totalCourses',
            'totalModules',
            'totalMaterials',
            'totalStudents',
            'studentsByLevel',
            'studentsByProgramme',
            'monthlyStudents',
            'recentStudents',
            'totalUsers'
        ));
    }

}
