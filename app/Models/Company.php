<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mentor;

class Company extends Model
{
    use HasFactory;

    // hasmany relation with mentor
    public function mentors()
    {
        return $this->hasMany(Mentor::class);
    }
}
