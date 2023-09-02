<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caregiver extends Model
{
    use HasFactory;
    protected $table = 'caregiver';
    protected $fillable = [
        'caregiver_title',
        'pdf_file',
        'care_image',
    ];
}
