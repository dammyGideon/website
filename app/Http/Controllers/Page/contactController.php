<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\contactRequest;
use Illuminate\Http\Request;
use App\Repository\ContactRepository;

class contactController extends Controller
{
    //

    public function contact(){
        return view('/pages/others/contact');
    }

    public function contact_message(contactRequest $request ,ContactRepository $contactRepository){
        $contactRepository->Contact($request);
        return redirect()->back()->with('message', 'Message sent!');
    }

    public function library(){
        return view('/pages/others/library');
    }
}
