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

    protected $fillable = ['number', 'address', 'complément', 'nap', 'city', 'country', 'idUtilisateur'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
