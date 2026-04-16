<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'module_number',
        'title',
        'position'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function materials()
    {
        return $this->hasMany(CourseMaterial::class)
                    ->orderBy('position');
    }

    public function getDisplayTitleAttribute()
    {
        return "Week {$this->module_number}: {$this->title}";
    }
}