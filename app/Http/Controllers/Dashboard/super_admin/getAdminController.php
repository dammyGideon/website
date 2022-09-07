<?php

namespace App\Http\Controllers\Dashboard\super_admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuperAdmin\StoreUsersRequest;
use App\Repository\SuperAdmin\AdminRepository;
use Illuminate\Http\Request;

class getAdminController extends Controller
{
    //
    public function index(){
        $payload=AdminRepository::AllAdmin();
        return view('dashboard.super_admin.admin_list',["payload"=>$payload]);
    }


    public function show($id){
        $response=AdminRepository::EditUser($id);
        return view('dashboard.super_admin.update_adminList',['response'=>$response]);
    }
    public function add_admin(StoreUsersRequest $request, AdminRepository $adminRepository){
        $adminRepository->CreateAdmin($request);
        return redirect()->back()->with('message','Admin Successfully created');
    }


    public function update_admin(){

    }

    public function delete_admin($id){
        AdminRepository::delete($id);
        return redirect()->back()->with('message','User was sucessful deleted');
    }


}
