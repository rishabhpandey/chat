<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Chats;
use App\ChatMessage;

class SaveChatController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function index(User $users)
    {
        $id = $users::where('id',2)->first();
        return view('welcome',['user' =>$id]);
    }

    public function store(Request $request)
    {
        $data = ['user_id'=>$request->get('user'),'user_chat'=>$request->get('chatMsg')];
        ChatMessage::create($data);
    }

    public function getMessages(ChatMessage $all)
    {
        return ChatMessage::join('users_all','users_all.id','=','chats_message.user_id')->get();
    }
	
    public function getUsers()
    {
        return User::all();
    }
    
}
