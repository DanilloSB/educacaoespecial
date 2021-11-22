<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
class User extends Model
{
    use HasFactory;

    protected $fillable = [
         
        'email', 
        'senha'
    ];
}
