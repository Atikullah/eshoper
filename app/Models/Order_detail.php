<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $primaryKey = 'order_detail_id';

    protected $fillable =[
        'order_id','product_id','product_name','price','sell_qty','stock_qty'
    ];
}
