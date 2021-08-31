<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    public function grade() { //topic belongs to some grade
        return $this->belongsTo(Grade::class);
    }
}
