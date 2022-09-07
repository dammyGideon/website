<?php

namespace App\Repository;

use App\Models\review;
use Illuminate\Database\Eloquent\Model;

class CommentRepository{

    public function model(){
        return review::class;
    }


    public function review($inputData){

        if($inputData->hasFile('image')){
            $files = $inputData->file('image');
            $filename = $inputData->image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $files->move($destinationPath, $filename);

            $imagePath=$filename;
            $review = new review();
            $review->upload=$imagePath;
            $review->name=$inputData->input('name');
            $review->email=$inputData->input('email');
            $review->linkedIn=$inputData->input('linkedIn');
            $review->rate=$inputData->input('rate');
            $review->message=$inputData->input('message');

            $review->save();
        }

    }
}
