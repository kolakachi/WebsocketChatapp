<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = ['from_user_id', 'to_user_id', 'chat_message', 'message_status'];
}
