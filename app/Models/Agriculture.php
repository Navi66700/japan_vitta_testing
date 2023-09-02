<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agriculture extends Model
{
    use HasFactory;
    protected $table = 'agriculture';
    protected $fillable = [
        'agriculture_title',
        'pdf_file',
        'agri_image',
    ];
}
