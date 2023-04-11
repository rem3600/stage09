<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Softskill extends Model
{
    use HasFactory;

    // mass assignable fields all
    protected $guarded = [];

    // relationship with course
    public function course()
    {
        return $this->belongsToMany(Course::class);
    }
}


