<?php

namespace App\Http\Controllers\Dashboard\super_admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuperAdmin\CurrentProjectRequest;
use App\Repository\SuperAdmin\Current_Project;
use Illuminate\Http\Request;

class CurrentProjectsController extends Controller
{
    //

    public function index(){
        return view('dashboard.super_admin.current_project');
    }
    public function list_of_project(){
        return view('dashboard.super_admin.list_project');
    }
    public function store(Request $request,Current_Project $current_Project){
        $current_Project->upload($request);
        return redirect()->back()->with('success','current project uploaded');
    }


    public function update_project(){

    }
    public function delete_project(){

    }


}
