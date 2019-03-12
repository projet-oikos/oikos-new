<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';
    protected $fillable = [
        'review',
        'note',
        'date',
        'produc_id',
        'customer_id'
    ];
//    public $timestamps = true;
    public function viewReview()
    {
        return $this->belongsTo('App\Product');
    }
}
