<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonN3N2N1 extends Model
{
    use HasFactory;
    protected $table = 'lesson-n3-n2-n1';
    protected $fillable = [
        'lesson_title',
        'level',
        'pdf_file',
        'lesson_image'
    ];
}
