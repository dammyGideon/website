<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\review;
class TestimonialController extends Controller
{
    //

    public function testimonial(){
        $review= review::all();
        return view('pages.others.testimonial',['review'=>$review]);
    }
}
