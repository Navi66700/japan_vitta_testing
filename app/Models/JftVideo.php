<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JftVideo extends Model
{
    use HasFactory;
    protected $table = 'jft_video';
    protected $fillable = [
        'jft_video_link',
        'jft_video_name',
    ];
}
