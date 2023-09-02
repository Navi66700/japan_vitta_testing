<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pastPaper extends Model
{
    use HasFactory;
    protected $table = 'past_paper';
    protected $fillable = [
        'paper_title',
        'level',
        'pdf_file',
        'youtube_link'
    ];
}
