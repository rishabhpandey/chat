<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Chats extends Authenticatable
{
    protected $table = "chats";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_1_id', 'user_2_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
