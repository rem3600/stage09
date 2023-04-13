<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Mentor extends Model
{
    use HasFactory;

    // belongs to many relationship with company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
