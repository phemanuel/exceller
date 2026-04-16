<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'programme',
        'level',
        'semester',
        'title',
        'type',
        'content',
        'content_url',
        'content_data',
        'file_duration',
        'file_size',
        'acad_session',
    ];
}
