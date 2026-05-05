<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseModule;
use App\Models\CourseMaterial;
use App\Models\StudentProgress;
use App\Models\StudentAdmission;

class StudentCourseController extends Controller
{
    //
     public function index($id)
    {
        $student = StudentAdmission::where('id', $id)->first();

        $courses = Course::where('programme', $student->department)->get();

        $courseStats = [];

        foreach ($courses as $course) {

            $totalMaterials = CourseMaterial::whereHas('module', function ($q) use ($course) {
                $q->where('course_id', $course->id);
            })->count();

            $completed = StudentProgress::where('student_id', $student->id)
                ->where('course_id', $course->id)
                ->where('is_completed', 1)
                ->count();

            $progress = $totalMaterials > 0
                ? round(($completed / $totalMaterials) * 100)
                : 0;

            $courseStats[] = [
                'course' => $course,
                'progress' => $progress
            ];
        }

        return view('studentlms.courses.index', compact('courseStats','student'));
    }

    public function show($id, $course_id)
    {
        $student = StudentAdmission::where('id', $id)->first();

        // 🎓 Course
        $course = Course::findOrFail($course_id);

        // 📚 Modules
        $modules = CourseModule::where('course_id', $course->id)
            ->orderBy('position')
            ->get();

        $moduleData = [];

        foreach ($modules as $module) {

            // 📄 Materials
            $materials = CourseMaterial::where('course_module_id', $module->id)
                ->orderBy('position')
                ->get();

            // 🔥 completion check
            $total = $materials->count();

            $completed = StudentProgress::where('student_id', $student->id)
                ->where('module_id', $module->id)
                ->where('is_completed', 1)
                ->distinct('material_id')
                ->count('material_id');

            $progress = $total ? intval(($completed / $total) * 100) : 0;

            // 🔒 MODULE LOCK LOGIC
            $previousModule = CourseModule::where('course_id', $course->id)
                ->where('position', '<', $module->position)
                ->get();

            $isUnlocked = true;

            foreach ($previousModule as $prev) {

                $prevTotal = CourseMaterial::where('course_module_id', $prev->id)->count();

                $prevCompleted = StudentProgress::where('student_id', $student->id)
                    ->where('module_id', $prev->id)
                    ->where('is_completed', 1)
                    ->count();

                if ($prevTotal == 0 || $prevCompleted < $prevTotal) {
                    $isUnlocked = false;
                    break;
                }
            }

            $moduleData[] = [
                'module' => $module,
                'materials' => $materials,
                'week' => $module->module_number,
                'progress' => $progress,
                'unlocked' => $isUnlocked
            ];
        }

        return view('studentlms.courses.course_view', compact('course', 'moduleData','student'));
    }


}
