<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';

    protected $fillable =[
        'customer_id','shipping_id','payment_id','total_order','order_status'
    ];
}
