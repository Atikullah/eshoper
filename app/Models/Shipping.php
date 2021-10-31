<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $primaryKey = 'shipping_id';

    protected $fillable =[
        'company_name','shipping_name','shipping_address','address_optional','shipping_city','shipping_email','shipping_number'
    ];

}
