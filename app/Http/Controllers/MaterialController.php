<?php

namespace App\Http\Controllers;
use App\Models\Material;

use Illuminate\Http\Request;

class MaterialController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user();

        if($user->user_type == 'superadmin'){
            $allMaterials = Material::paginate(10);
        }
        elseif($user->user_type == 'admin'){
            $allMaterials = Material::where('user_id',$user->id)->paginate(10);
        }

        return view('layouts.material-layout',$allMaterials);
    }
}
