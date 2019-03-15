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

    protected $attributes = ['complement' => ' '];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function customers()
    {
        return $this->belongsTo('App\Customer');
    }
}
