<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public function topics() { //a particular grade has many topics
        return $this->hasMany(Topic::class);
    }
}
