<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    use HasFactory;
    protected $table = 'lesson';
    protected $fillable = [
        'lesson_title',
        'level',
        'description',
        'pdf_file',
        'lesson_image',
        'youtube_video_link'
    ];
}
