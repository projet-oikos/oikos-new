<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = ['orderDate', 'billDate', 'customer_id'];

    public $timestamps = true;


}
