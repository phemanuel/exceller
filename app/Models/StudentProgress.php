<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProgress extends Model
{
    protected $fillable = [
        'student_id',
        'course_id',
        'module_id',
        'material_id',
        'is_completed',
        'completed_at'
    ];

    public function student()
    {
        return $this->belongsTo(StudentAdmission::class, 'student_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
