<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='product';
    protected $fillable = [
        'name',
        'price',
        'tva',
        'image1',
        'image2',
        'image3',
        'image4',
        'video',
        'description',
        'pdf',
        'stock',
        'weight',
        'delivery',
        'category',
        'idbrand',
        'idpromo' ,
        'created_at',
        'updated_at'
    ];


    /////////////////////////////////////////     Un produit ne peut avoir qu'une marque     /////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    public function reviews(){
        return $this->hasMany('App\Review');                                                                    // Methode qui affiche les reviews liee au product
    }
}
