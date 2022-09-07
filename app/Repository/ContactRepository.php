<?php

namespace App\Repository;
use App\Models\message;

class ContactRepository{

    public function model(){
        return message::class;
    }


    public function Contact($data){
        $data_response=new message();
        $data_response->name=$data->input('name');
        $data_response->email=$data->input('email');
        $data_response->phone=$data->input('phone_number');
        $data_response->message=$data->input('comments');

        $data_response->save();
    }


}


