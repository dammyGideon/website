<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
class teamController extends Controller
{
    //

    public function index(){
        $team=Team::all();
        return view('pages.others.team_page',['team'=>$team]);
    }
}
