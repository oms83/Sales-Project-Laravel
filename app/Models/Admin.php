<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected  $table = "admins";
    protected $fillable = [
        'name', 
        'email',
        'password',
        'username',
        'created_at',
        'updated_at',
        'added_by',
        'updated_by',
        'com_code',
    ];
}
