<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgricultureVideo extends Model
{
    use HasFactory;
    protected $table = 'agriculture_video';
    protected $fillable = [
        'agri_video_link',
        'agri_video_name',
    ];
}
