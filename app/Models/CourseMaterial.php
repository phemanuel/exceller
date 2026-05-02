<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_module_id',
        'title',
        'type',
        'file_path',
        'video_url',
        'description',
        'position'
    ];

    public function courseModule()
    {
        return $this->belongsTo(CourseModule::class, 'course_module_id');
    }
    public function module()
    {
        return $this->belongsTo(CourseModule::class, 'course_module_id');
    }
}