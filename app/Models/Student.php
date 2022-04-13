<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birthdate',
        'father_name',
        'mother_name',
        'level',
        'section',
        'registered_at',
    ];

    public function scopeLevel($query, $level)
    {
        if ($level) {
            return $query->where('level', $level);
        }
    }
}
