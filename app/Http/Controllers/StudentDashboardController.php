<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\StudentAdmission;
use App\Models\Course;
use App\Models\CourseModule;
use App\Models\CourseMaterial;
use App\Models\StudentProgress;

class StudentDashboardController extends Controller
{
    public function index($id)
    {
        $studentId = $id; 
        $student = StudentAdmission::where('id', $id)->first();


        // 🎓 Courses by programme
        $courses = Course::where('programme', $student->department)->get();

        $courseStats = [];
        $totalProgress = 0;

        foreach ($courses as $course) {

            $materials = CourseMaterial::whereHas('module', function ($q) use ($course) {
                $q->where('course_id', $course->id);
            })->count();

            $completed = StudentProgress::where('student_id', $student->id)
            ->where('is_completed', 1)
            ->whereIn('material_id', function ($q) use ($course) {
                $q->select('id')
                ->from('course_materials')
                ->whereIn('course_module_id', function ($q2) use ($course) {
                    $q2->select('id')
                        ->from('course_modules')
                        ->where('course_id', $course->id);
                });
            })
            ->distinct('material_id')
            ->count('material_id');

            $percent = $materials > 0
                ? round(($completed / $materials) * 100)
                : 0;

            $totalProgress += $percent;

            $courseStats[] = [
                'course' => $course,
                'progress' => $percent
            ];
        }

        $overallProgress = count($courses) > 0 ? round($totalProgress / count($courses)) : 0;

        // ⏱️ Last Activity
        $lastActivity = StudentProgress::where('student_id', $student->id)
            ->latest('updated_at')
            ->first();

        // ⚠️ Inactivity
        $inactiveDays = $lastActivity
            ? now()->diffInDays($lastActivity->updated_at)
            : null;

        // 🔥 Simple streak logic
        $streak = StudentProgress::where('student_id', $student->id)
            ->whereDate('updated_at', '>=', now()->subDays(7))
            ->distinct('updated_at')
            ->count();

        // ⚠️ Alerts
        $alerts = [];

        if ($inactiveDays && $inactiveDays > setting('student.inactivity_threshold', 7)) {
            $alerts[] = "You have been inactive for {$inactiveDays} days";
        }

        if ($overallProgress < 30) {
            $alerts[] = "Your progress is below average";
        }        

        $totalCourses = $courses->count();

        $totalModules = \App\Models\CourseModule::whereIn('course_id', $courses->pluck('id'))->count();

        $totalMaterials = \App\Models\CourseMaterial::whereIn('course_module_id',
            \App\Models\CourseModule::whereIn('course_id', $courses->pluck('id'))->pluck('id')
        )->count();

        $studentInfo = [
            'name' => $student->surname . ' ' . $student->first_name . ' ' . $student->other_name,
            'programme' => $student->department?? 'N/A',
            'picture' => $student->picture_name
                ? asset('uploads/students/' . $student->picture_name . ".jpg")
                : asset('uploads/blank.jpg'),

            'total_courses' => $totalCourses,
            'total_modules' => $totalModules,
            'total_materials' => $totalMaterials,
        ];

        return view('studentLms.index', compact(
            'courseStats',
            'overallProgress',
            'lastActivity',
            'inactiveDays',
            'streak',
            'alerts',
            'student',
            'studentInfo'
        ));
    }
}
