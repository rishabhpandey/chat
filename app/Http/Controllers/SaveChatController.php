<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Chats;
use App\ChatMessage;

class SaveChatController extends Controller
{
    public function login(User $users)
    {
        return view('login');
    }

    public function chat(Request $request)
    {
        $user  = $request->all();
        return view('welcome');
    }

    public function index(Request $request, User $users)
    {
        $name = $request->get('username');
        $pass = $request->get('password');
        $userdata =  $users::where('user_name',$name)->where('password',$pass)->first();
        if($userdata)
        {
            $userInfo = $users::where('id',$userdata->id)->first();
            return $userInfo;
        }else{
           return['msg' =>'Ye chat system aapke aukaat k bahar hai , use slack.'];
        }

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
