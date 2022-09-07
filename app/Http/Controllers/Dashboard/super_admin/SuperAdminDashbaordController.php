<?php

namespace App\Http\Controllers\Dashboard\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\SuperAdmin\DashboardRepository;
class SuperAdminDashbaordController extends Controller
{
    //
    public function index(){
        $admin=DashboardRepository::dashboard_admin_Details();
        $users=DashboardRepository::dashboard_users_Details();
        $project=DashboardRepository::project_count();
        $task=DashboardRepository::task_counts();
        return view('dashboard.super_admin.dashboard',[
            'admin'=>$admin,
            'users'=>$users,
            'project'=>$project,
            'task'=>$task
        ]);
    }

   
}
