<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Hardskill extends Model
{
    use HasFactory;

    // mass assignable fields all
    protected $guarded = [];

    // relationship with course many 2 many relationship
    public function course()
    {
        return $this->belongsToMany(Course::class);
    }
}
