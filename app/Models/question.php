<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function getSurvey(){
        return $this->belongsTo(survey_set::class);
    }
    public function getAnswer(){
        return $this->hasMany(answer::class);
    }
}
