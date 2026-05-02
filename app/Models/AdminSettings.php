<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSettings extends Model
{
    use HasFactory;

    protected $table = 'settings'; // IMPORTANT

    protected $fillable = [
        'key',
        'value'
    ];

    public $timestamps = true;

    /**
     * Cast value intelligently if needed later
     */
    protected $casts = [
        'value' => 'string',
    ];
}