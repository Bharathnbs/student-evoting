<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Candidate extends Model
{
    protected $guarded = [];
    use softDeletes;
    use HasFactory;
  
    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function voting()
    {
        return $this->hasMany(Voting::class, 'candidate_id');
    }
}
