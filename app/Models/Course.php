<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // relationship with hardskill many 2 many relationship
    public function hardskill()
    {
        return $this->belongsToMany(Hardskill::class);
    }

    // relationship with softskill many 2 many relationship
    public function softskill()
    {
        return $this->belongsToMany(Softskill::class);
    }

    // relationship with student one 2 one relationship
    public function student()
    {
        return $this->hasOne(Student::class);
    }
}
