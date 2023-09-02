<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodVideo extends Model
{
    use HasFactory;
    protected $table = 'food_video';
    protected $fillable = [
        'food_video',
        'food_video_name',
    ];
}
