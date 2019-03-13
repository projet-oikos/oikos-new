<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customer';

    protected $fillable = ['lastname', 'name', 'telephone', 'delivery_address_id', 'billing_address_id', 'user_id'];

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

}
