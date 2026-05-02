<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAdmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'admission_no', 
        'first_name', 
        'surname', 
        'department', 
        'department1', 
        'other_name', 
        'phone_no', 
        'state', 
        'level', 
        'sex', 
        'phone_no1',
        'user_name', 
        'picture_name', 
        'session1', 
        'login_status',
        'email',
        'user_type', 
        'password',
        'login_attempts',
    ];

    public function getPhotoAttribute()
    {
        $default = asset('uploads/blank.jpg');

        if (!$this->picture_name) {
            return $default;
        }

        $path = 'uploads/' . $this->picture_name;

        if (!file_exists(public_path($path))) {
            return $default;
        }

        return asset($path);
    }

    public function examinerScores()
    {
        return $this->hasMany(ExaminerScore::class);
    }

    public function results()
    {
        return $this->hasMany(StationResult::class);
    }
    public function activities()
    {
        return $this->hasMany(StudentActivities::class, 'student_id');
    }
}
