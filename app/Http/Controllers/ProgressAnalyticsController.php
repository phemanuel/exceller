<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentAdmission;
use App\Models\StudentProgress;
use App\Models\CourseMaterial;
use App\Models\CourseModule;

class ProgressAnalyticsController extends Controller
{
    //
    public function index()
    {
        $totalStudents = StudentAdmission::count();

        $activeStudents = StudentAdmission::whereHas('activities', function ($q) {
            $q->where('created_at', '>=', now()->subDays(7));
        })->count();

        $totalMaterialsCompleted = StudentProgress::where('is_completed', 1)->count();

        $avgCompletion = $this->calculateAverageCompletion();

        return view('admin.analytics.index', compact(
            'totalStudents',
            'activeStudents',
            'totalMaterialsCompleted',
            'avgCompletion'
        ));
    }

    private function calculateAverageCompletion()
    {
        $students = StudentAdmission::all();

        if ($students->count() === 0) return 0;

        $total = 0;

        foreach ($students as $student) {

            $totalMaterials = CourseMaterial::count();

            $completed = StudentProgress::where('student_id', $student->id)
                ->where('is_completed', 1)
                ->count();

            $total += $totalMaterials > 0
                ? ($completed / $totalMaterials) * 100
                : 0;
        }

        return round($total / $students->count(), 2);
    }

    public function students()
    {
        $students = StudentAdmission::with(['activities'])->get();

        $data = $students->map(function ($student) {

            $totalMaterials = CourseMaterial::count();

            $completed = StudentProgress::where('student_id', $student->id)
                ->where('is_completed', 1)
                ->count();

            $completionRate = $totalMaterials > 0
                ? round(($completed / $totalMaterials) * 100, 2)
                : 0;

            $lastActivity = $student->activities()
                ->latest()
                ->first();

            return [
                'student' => $student,
                'completion_rate' => $completionRate,
                'last_activity' => $lastActivity?->created_at,
                'status' => $this->getEngagementStatus($completionRate, $lastActivity),
            ];
        });

        return view('admin.analytics.students', compact('data'));
    }

    private function getEngagementStatus($completionRate, $lastActivity)
    {
        $inactiveDays = $lastActivity
            ? now()->diffInDays($lastActivity)
            : 999;

        if ($inactiveDays > 10 && $completionRate < 30) {
            return 'high-risk';
        }

        if ($inactiveDays > 5) {
            return 'inactive';
        }

        if ($completionRate > 70) {
            return 'active';
        }

        return 'moderate';
    }

    public function risk()
    {
        $students = StudentAdmission::all();

        $risk = $students->map(function ($student) {

            $lastActivity = $student->activities()->latest()->first();

            $inactiveDays = $lastActivity
                ? now()->diffInDays($lastActivity->created_at)
                : 999;

            $completion = $this->studentCompletionRate($student->id);

            return [
                'student' => $student,
                'inactive_days' => $inactiveDays,
                'low_activity' => $inactiveDays > 7,
                'low_completion' => $completion < 40,
                'stagnant' => $inactiveDays > 14 && $completion < 20,
            ];
        });

        return view('admin.analytics.risk', compact('risk'));
    }

    private function studentCompletionRate($studentId)
    {
        $total = CourseMaterial::count();

        if ($total === 0) return 0;

        $completed = StudentProgress::where('student_id', $studentId)
            ->where('is_completed', 1)
            ->count();

        return round(($completed / $total) * 100, 2);
    }


}
