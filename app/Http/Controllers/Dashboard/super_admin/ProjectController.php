<?php

namespace App\Http\Controllers\Dashboard\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function add_project(){
        return view('dashboard.super_admin.add_project');
    }
}
