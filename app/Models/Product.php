<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name', 'categori_id', 'manufactures_id','short_description', 'long_description', 'price','product_image', 'product_size', 'product_color','publication_status'
    ];




//    public function category(){
//        return $this->belongsTo('App\Models\Categori', 'categori_id');
//    }
//    public function manufacture(){
//        return $this->belongsTo('App\Models\Manufacture', 'manufactures_id');
//    }




}
