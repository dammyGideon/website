<?php

namespace App\Http\Controllers\Conversation;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Data_CollectionRequest;
use App\Repository\User\DataCollectionRepository;

class chatController extends Controller
{
    
    public function index(){
        return view('conversation.chat');
    }
}

