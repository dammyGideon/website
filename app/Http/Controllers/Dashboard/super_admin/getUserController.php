<?php

namespace App\Http\Controllers\Dashboard\super_admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuperAdmin\StoreUsersRequest;
use App\Repository\SuperAdmin\RegisterRepository;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
class getUserController extends Controller
{
    //
    public function index(){
        $payload=RegisterRepository::AllUser();
         return view('dashboard.super_admin.user_list',["payload"=>$payload]);
    }
    public function show($user){
        $response=RegisterRepository::EditUser($user);
        return view('dashboard.super_admin.update_userList',['response'=>$response]);
    }
    public function send(StoreUsersRequest $request, RegisterRepository $registerRepository){
     return $registerRepository->RegisterUsers($request); 
    }
    public function user_update(Request $request,$id){
        $payload=RegisterRepository::UpdateUser($request,$id);
        $payload=RegisterRepository::AllUser();
         return view('dashboard.super_admin.user_list',["payload"=>$payload]);
    }

    public function delete_user($id){
        RegisterRepository::delete($id);
        return redirect()->back()->with('message','User was sucessful deleted');
    }
}
