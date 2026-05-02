<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminSettings;
use DateTimeZone;
use Illuminate\Support\Facades\Auth;

class AdminSettingsController extends Controller
{
    //
    public function index()
    {
        $settings = AdminSettings::pluck('value', 'key');
        $timezones = DateTimeZone::listIdentifiers();

        return view('admin.settings.index', compact('settings','timezones'));
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
}
