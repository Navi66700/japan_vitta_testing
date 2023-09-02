<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaregiverVideo extends Model
{
    use HasFactory;
    protected $table = 'caregiver_video';
    protected $fillable = [
        'caregiver_video_link',
        'caregiver_video_name',
    ];
}
