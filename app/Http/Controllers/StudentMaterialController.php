<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseModule;
use App\Models\CourseMaterial;
use App\Models\StudentProgress;
use App\Models\StudentAdmission;

class StudentMaterialController extends Controller
{
    //
    
    public function view($id, $material_id)
    {
        $student = StudentAdmission::findOrFail($id);

        $material = CourseMaterial::with('module.course')
            ->findOrFail($material_id);

        $moduleMaterials = CourseMaterial::where('course_module_id', $material->course_module_id)
            ->orderBy('position')
            ->get();

        $completedMaterials = StudentProgress::where('student_id', $student->id)
            ->where('module_id', $material->course_module_id)
            ->where('is_completed', 1)
            ->pluck('material_id')
            ->toArray();

        // ✅ only update last viewed
        StudentProgress::updateOrCreate(
            [
                'student_id' => $student->id,
                'material_id' => $material->id,
            ],
            [
                'course_id' => $material->module->course_id,
                'module_id' => $material->course_module_id,
                'last_viewed_at' => now()
            ]
        );

        return view('studentlms.material.index', compact(
            'student',
            'material',
            'moduleMaterials',
            'completedMaterials'
        ));
    }

    public function ajaxView($id, $material_id)
    {
        $student = StudentAdmission::findOrFail($id);

        $material = CourseMaterial::with('module')
            ->findOrFail($material_id);

        $isCompleted = StudentProgress::where('student_id', $student->id)
        ->where('material_id', $material->id)
        ->where('is_completed', 1)
        ->exists();

        StudentProgress::updateOrCreate(
            [
                'student_id' => $student->id,
                'material_id' => $material->id,
            ],
            [
                'course_id' => $material->module->course_id,
                'module_id' => $material->course_module_id,
                'last_viewed_at' => now()
            ]
        );

        return response()->json([
            'id' => $material->id,
            'title' => $material->title,
            'type' => $material->type,
            'video_url' => $material->video_url,
            'file_path' => $material->file_path,
            'week' => $material->module->module_number,
            'module_title' => $material->module->title,
            'is_completed' => $isCompleted
        ]);
    }

    public function complete($id, $material_id)
    {
        $student = StudentAdmission::findOrFail($id);

        $material = CourseMaterial::findOrFail($material_id);

        StudentProgress::updateOrCreate(
            [
                'student_id' => $student->id,
                'material_id' => $material->id,
            ],
            [
                'course_id' => $material->module->course_id,
                'module_id' => $material->course_module_id,
                'is_completed' => 1,
                'completed_at' => now()
            ]
        );

        // next material
        $nextMaterial = CourseMaterial::where('course_module_id', $material->course_module_id)
            ->where('position', '>', $material->position)
            ->orderBy('position')
            ->first();

        return response()->json([
            'status' => 'success',
            'next_material_id' => $nextMaterial?->id
        ]);
    }

    private function getNextMaterial($studentId, $materialId)
    {
        $current = \App\Models\CourseMaterial::find($materialId);

        if (!$current) {
            return null;
        }

        // Get next material in same module (by position)
        $next = \App\Models\CourseMaterial::where('course_module_id', $current->course_module_id)
            ->where('position', '>', $current->position)
            ->orderBy('position', 'asc')
            ->first();

        // If no next in module, move to next module
        if (!$next) {

            $nextModule = \App\Models\CourseModule::where('course_id', $current->courseModule->course_id)
                ->where('module_number', '>', $current->courseModule->module_number)
                ->orderBy('module_number', 'asc')
                ->first();

            if ($nextModule) {
                $next = \App\Models\CourseMaterial::where('course_module_id', $nextModule->id)
                    ->orderBy('position', 'asc')
                    ->first();
            }
        }

        return $next;
    }
}
