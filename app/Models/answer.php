<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function getUser(){
        return $this->belongsTo(question::class);
    }
}
