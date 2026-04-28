<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\CourseModule;
use App\Models\CourseMaterial;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CourseMaterialController extends Controller
{
    public function store(Request $request, CourseModule $module)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:pdf,video',
            'file_path' => 'nullable|file|mimes:pdf|max:10240',
            'video_url' => 'nullable|url',
            'video_file' => 'nullable|file|mimes:mp4,mov,avi|max:20480',
            'video_source' => 'nullable|in:url,file',
        ]);

        $filePath = null;
        $videoPath = null;

        // 📄 PDF UPLOAD (with custom naming)
        if ($request->type === 'pdf' && $request->hasFile('file_path')) {

            $file = $request->file('file_path');

            $cleanTitle = Str::slug($request->title);
            $date = Carbon::now()->format('Y-m-d');

            $filename = "{$cleanTitle}_{$date}." . $file->getClientOriginalExtension();

            $filePath = $file->storeAs('materials/pdf', $filename, 'public');
        }

        // 🎥 VIDEO HANDLING
        if ($request->type === 'video') {

            if ($request->video_source === 'url') {
                $videoPath = $request->video_url;
            }

            if ($request->video_source === 'file' && $request->hasFile('video_file')) {

                $file = $request->file('video_file');

                $cleanTitle = Str::slug($request->title);
                $date = Carbon::now()->format('Y-m-d');

                $filename = "{$cleanTitle}_{$date}." . $file->getClientOriginalExtension();

                $videoPath = $file->storeAs('materials/videos', $filename, 'public');
            }
        }

        // 💾 SAVE
        $module->materials()->create([
            'title' => $request->title,
            'type' => $request->type,
            'file_path' => $filePath,
            'video_url' => $videoPath,
        ]);

        return back()->with('success', 'Material uploaded successfully.');
    }
    

    public function update(Request $request, CourseMaterial $material)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:pdf,video',
            'file_path' => 'nullable|file|mimes:pdf|max:10240',
            'video_url' => 'nullable|url',
            'video_file' => 'nullable|file|mimes:mp4,mov,avi|max:20480',
        ]);

        $filePath = $material->file_path;
        $videoPath = $material->video_url;

        // 📄 PDF UPDATE
        if ($request->type === 'pdf' && $request->hasFile('file_path')) {

            if ($material->file_path && \Storage::disk('public')->exists($material->file_path)) {
                \Storage::disk('public')->delete($material->file_path);
            }

            $filePath = $request->file('file_path')
                ->store('materials/pdf', 'public');
        }

        // 🎥 VIDEO UPDATE
        if ($request->type === 'video') {

            if ($request->video_source === 'url') {
                $videoPath = $request->video_url;
            }

            if ($request->video_source === 'file' && $request->hasFile('video_file')) {

                if ($material->video_url && \Storage::disk('public')->exists($material->video_url)) {
                    \Storage::disk('public')->delete($material->video_url);
                }

                $videoPath = $request->file('video_file')
                    ->store('materials/videos', 'public');
            }
        }

        $material->update([
            'title' => $request->title,
            'type' => $request->type,
            'file_path' => $request->type === 'pdf' ? $filePath : null,
            'video_url' => $videoPath,
        ]);

        return back()->with('success', 'Material updated successfully.');
    }

    public function destroy(CourseMaterial $material)
    {
        // delete file if exists
        if ($material->type === 'pdf' && $material->file_path) {
            if (Storage::disk('public')->exists($material->file_path)) {
                Storage::disk('public')->delete($material->file_path);
            }
        }

        if ($material->type === 'video' && $material->video_url && !filter_var($material->video_url, FILTER_VALIDATE_URL)) {
            if (Storage::disk('public')->exists($material->video_url)) {
                Storage::disk('public')->delete($material->video_url);
            }
        }

        $material->delete();

        return back()->with('success', 'Material deleted successfully.');
    }

}
