<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin_login extends Model
{
    protected $table="admin_logins";

    protected $fillable = [
        'name', 'email', 'number','password'
    ];
}
