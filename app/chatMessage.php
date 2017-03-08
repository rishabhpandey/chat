<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ChatMessage extends Authenticatable
{
    protected $table = "chats_message";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'user_chat'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

      public $timestamps = false;

}
