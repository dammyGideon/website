<?php

namespace App\Http\Controllers\Dashboard\super_admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuperAdmin\StoreTeamRequest;
use App\Repository\SuperAdmin\TeamRepository;
class AdminTeamController extends Controller
{
    //
    public function index(){
        $response=TeamRepository::allTeam();
        return view('dashboard.super_admin.team_reg',['response'=>$response]);
    }
    public function createTeam(StoreTeamRequest $request){
        TeamRepository::team_reg($request);
        return redirect()->back()->with('message','Team member Added');
    }

    public function updateTeamMember(){

    }

    public function destory($id){
        TeamRepository::removeMemeber($id);
        return redirect()->back();
    }
}
