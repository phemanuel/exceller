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
                ->where('course_id', $course->id)
                ->where('is_completed', 1)
                ->count();

            $percent = $materials > 0 ? round(($completed / $materials) * 100) : 0;

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

        return view('studentLms.index', compact(
            'courseStats',
            'overallProgress',
            'lastActivity',
            'inactiveDays',
            'streak',
            'alerts',
            'student'
        ));
    }
}
