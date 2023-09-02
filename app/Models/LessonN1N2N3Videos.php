<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonN1N2N3Videos extends Model
{
    use HasFactory;
    protected $table = 'lesson_n1_n2_n3_videos';
    protected $fillable = [
        'video_title',
        'video_link',
    ];
}
