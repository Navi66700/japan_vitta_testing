<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userLogin extends Model
{
    use HasFactory;
    protected $table = 'user_login';
    protected $fillable = [
        'email',
        'password',
        'user_type',
        'name'
    ];
}
