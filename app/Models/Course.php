<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hardskill;
use App\Models\Softskill;

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
        
}
