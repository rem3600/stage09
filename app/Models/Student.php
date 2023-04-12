<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // mass assignable fields all
    protected $guarded = [];

    // relationshop with course many 2 many relationship
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // relationship with user one 2 one relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
