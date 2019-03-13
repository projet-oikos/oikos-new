<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribingnewsletter extends Model
{
    protected $table = 'subnewsletter';

    protected $fillable = ['email'];
}
