<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Repository\CommentRepository;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    //

    public function about(){
        return view('/pages/others/about');
    }
    public function review(){
        return view('/pages/others/review');
    }
    public function terms(){
        return view('/pages/others/tac');
    }
    public function reviews_us(StoreCommentRequest $request,CommentRepository $commentRepository){
        $commentRepository->review($request);
        return redirect()->back()->with('message', 'Thanks for Rating us !');
    }

}
