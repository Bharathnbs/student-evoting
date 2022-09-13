<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function voting()
    {
        return $this->hasMany(Voting::class);
    }
}
