<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    protected $primaryKey = 'manufactures_id';

    protected $fillable = [
        'manufactures_name', 'description', 'publication_status'
    ];


}
