<?php

namespace App\Http\Controllers\Dashboard\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\SuperAdmin\TeamRepository;
class TeamController extends Controller
{
    //

    public function allTeam(){
        $response=TeamRepository::allTeam();
        dd($response);
    }

    public function createTeam(){

    }

    public function updateTeamMember(){

    }

    public function removeTeamMember($id){
        TeamRepository::removeMemeber($id);
        return redirect()->back();
    }
}
