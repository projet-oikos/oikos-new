<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientmessage extends Model
{
    protected $table = 'clientmessage';

    protected $fillable = ['name', 'email', 'subject', 'message'];
}
