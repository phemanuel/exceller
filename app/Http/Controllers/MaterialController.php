<?php

namespace App\Http\Controllers;
use App\Models\Material;
use App\Models\SoftwareVersion;
use App\Models\CollegeSetup;
use App\Models\AcademicSession;
use App\Models\Department;
use App\Models\CbtClass;
use getID3;
use Exception;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class MaterialController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user();
        $collegeSetup = CollegeSetup::first();
        $softwareVersion = SoftwareVersion::first();

        if($user->user_type == 'superadmin'){
            $allMaterials = Material::paginate(10);
        }
        elseif($user->user_type == 'admin'){
            $allMaterials = Material::where('user_id',$user->id)->paginate(10);
        }

        return view('layout.material-layout', compact('allMaterials','collegeSetup','softwareVersion'));
    }

    public function addMaterial ()
    {
        $user = auth()->user();
        $collegeSetup = CollegeSetup::first();
        $softwareVersion = SoftwareVersion::first();
        $acad_sessions = AcademicSession::all();
        $dept = Department::all();
        $level = CbtClass::all();

        return view('layout.material-add-layout', compact('softwareVersion','collegeSetup','dept','level',
    'acad_sessions'));
    }

    public function storeMaterial(Request $request)
    {
        try {
            $request->validate([
                'materialTitle' => 'required|string|max:255',
                'materialType' => 'required|string',
                'contentData' => 'nullable|string', // For text-based content
                'content' => 'nullable|file|mimes:mp4,avi,flv,mkv,mov,wmv,mpg,webm,ogv|max:51200', // 50MB max
                'programme' => 'nullable|string',
                'level' => 'nullable|string',
                'semester' => 'nullable|string',
            ]);
    
            $user = auth()->user();
            $material = new Material;
            $material->title = $request->materialTitle;
            $material->type = $request->materialType;
            $material->content_data = $request->contentData;
            $material->user_id = $user->id;
            $material->programme = $request->programme;
            $material->level = $request->level;
            $material->semester = $request->semester;
            $material->acad_session = $request->session1;
    
            // Handle file upload
            if ($request->hasFile('content')) {
                $file = $request->file('content');
                $extension = $file->getClientOriginalExtension();
    
                // Generate unique filename
                $contentName = uniqid() . '.' . $extension;
                $destinationPath = public_path('uploads/contents/');
    
                // Ensure the directory exists
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0775, true);
                }
    
                // Move the file
                $file->move($destinationPath, $contentName);
                $material->content = $contentName;
    
                // Analyze file using getID3
                $getID3 = new getID3;
                $fileInfo = $getID3->analyze($destinationPath . $contentName);
    
                $material->file_duration = $fileInfo['playtime_string'] ?? null;
                $material->file_size = isset($fileInfo['filesize']) ? round($fileInfo['filesize'] / 1024, 2) : null;
            }
    
            if ($material->save()) {
                // return response()->json([
                //     'success' => true,
                //     'message' => 'Material saved successfully.',
                //     'redirectUrl' => route('material'),
                // ]);
                return redirect()->route('material')->with('success', 'Material saved successfully.');
            }
    
            return response()->json(['error' => 'Failed to save material. Please try again.'], 500);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function editMaterial($id)
    {
        $material = Material::findOrFail($id);
        $user = auth()->user();
        $collegeSetup = CollegeSetup::first();
        $softwareVersion = SoftwareVersion::first();
        $acad_sessions = AcademicSession::all();
        $dept = Department::all();
        $level = CbtClass::all();

        return view('layout.material-edit', compact('material','collegeSetup','acad_sessions','level','dept'
    ,'softwareVersion'));
    }

    public function updateMaterial(Request $request, $id)
    {
        try {
            // Ensure valid ID
            if (!$id) {
                return redirect()->back()->with('error', 'Invalid Material ID.');
            }
        
            // Find the material or return error
            $material = Material::find($id);
        
            if (!$material) {
                return redirect()->back()->with('error', 'Material not found.');
            }
        
            // Update material
            $material->title = $request->materialTitle;
            $material->type = $request->materialType;
            $material->content_data = $request->contentData;
        
            // Handle file upload
            if ($request->hasFile('content')) {
                if ($material->content) {
                    $videoFilePath = public_path('uploads/contents/') . $material->content;
                    if (File::exists($videoFilePath)) {
                        File::delete($videoFilePath);
                    }
                }
        
                $file = $request->file('content');
                $extension = $file->extension();
                $allowedExtensions = ['mp4', 'avi', 'flv', 'mkv', 'mov', 'wmv', 'mpg', 'webm', 'ogv'];
        
                if (in_array($extension, $allowedExtensions)) {
                    $contentName = rand(111, 999) . time() . '.' . $extension;
                    $file->move(public_path('uploads/contents'), $contentName);
                    $material->content = $contentName;
                } else {
                    return redirect()->back()->with('error', 'Invalid file format.');
                }
            }
        
            // Save and redirect
            if ($material->save()) {
                return redirect()->route('material')->with('success', 'Material updated successfully.');
            } else {
                return redirect()->back()->with('error', 'Update failed.');
            }
        } catch (Exception $e) {
            Log::error('Error updating material: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    public function deleteMaterial($id)
    {
        $data = Material::findOrFail($id);

        // Check if the material type is 'video'
        if ($data->type === 'video') {
            // Retrieve the video filename or ID from the content
            $videoFilePath = public_path('uploads/contents/') . basename($data->content);

            // Check if the file exists and delete it
            if (File::exists($videoFilePath)) {
                File::delete($videoFilePath);
            }
        }

        // Delete the material record
        if ($data->delete()) {           
            return redirect()->route('material')->with('success', 'Material deleted successfully.');
        }

        // Optional: handle case where delete fails
        $this->notice::error('Data could not be deleted!');
        return redirect()->back();
    }
}
