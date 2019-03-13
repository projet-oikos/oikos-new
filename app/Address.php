<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'address';

    protected $fillable = ['number', 'address', 'complement', 'nap', 'city', 'country', 'customer_id'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
