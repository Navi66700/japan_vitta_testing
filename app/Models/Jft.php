<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jft extends Model
{
    use HasFactory;
    protected $table = 'jft_tb';
    protected $fillable = [
        'pdf_name',
        'pdf_file',
        'jft_lesson_image',
    ];
}
