<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseMaterialController extends Controller
{
    public function store(Request $request, CourseModule $module)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $module->materials()->create($request->all());

        return back()->with('success', 'Material added');
    }

    public function edit(CourseMaterial $material)
    {
        return view('tutor.materials.edit', compact('material'));
    }

    public function update(Request $request, CourseMaterial $material)
    {
        $material->update($request->all());

        return back()->with('success', 'Updated');
    }

    public function destroy(CourseMaterial $material)
    {
        $material->delete();

        return back()->with('success', 'Deleted');
    }
}
