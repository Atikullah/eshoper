<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
    protected $primaryKey = 'categori_id';

    protected $fillable = [
        'name', 'description', 'publication_status'
    ];

}
