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

    protected $fillable = ['lastname', 'name', 'email', 'telephone', 'delivery_address_id', 'billing_address_id'];
}
