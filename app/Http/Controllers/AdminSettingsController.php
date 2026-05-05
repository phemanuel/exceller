<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminSettings;
use App\Models\CourseStudyAll;
use DateTimeZone;
use Illuminate\Support\Facades\Auth;

class AdminSettingsController extends Controller
{
    //
    public function index()
    {
        $settings = AdminSettings::pluck('value', 'key');
        $timezones = DateTimeZone::listIdentifiers();
        $programmes = CourseStudyAll::latest()->get();

        return view('admin.settings.index', compact('settings','timezones','programmes'));
    }

    public function update(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {

            AdminSettings::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        return back()->with('success', 'Settings updated successfully');
    }

    public function liveUpdate(Request $request)
    {
        $request->validate([
            'key' => 'required|string',
            'value' => 'nullable'
        ]);

        AdminSettings::updateOrCreate(
            ['key' => $request->key],
            ['value' => $request->value]
        );

        return response()->json([
            'status' => 'success',
            'message' => 'Updated successfully'
        ]);
    }

    public function programmes()
    {
        $programmes = CourseStudyAll::latest()->get();

        return view('admin.settings.programmes', compact('programmes'));
    }

    /* CREATE */
    public function storeProgramme(Request $request)
    {
        $request->validate([
            'department' => 'required',
            'programme' => 'required',
            'start_level' => 'required',
            'duration' => 'required'
        ]);

        CourseStudyAll::create($request->all());

        return back()->with('success', 'Programme created successfully');
    }

    /* UPDATE */
    public function updateProgramme(Request $request, $id)
    {
        $programme = CourseStudyAll::findOrFail($id);

        $programme->update($request->all());

        return back()->with('success', 'Programme updated successfully');
    }

    /* DELETE */
    public function deleteProgramme($id)
    {
        CourseStudyAll::findOrFail($id)->delete();

        return back()->with('success', 'Programme deleted successfully');
    }

}
