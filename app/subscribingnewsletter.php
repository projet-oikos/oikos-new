<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subscribingnewsletter extends Model
{
    protected $table = 'subnewsletter';

    protected $fillable = ['email'];
}
