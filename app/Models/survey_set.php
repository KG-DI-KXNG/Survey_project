<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class survey_set extends Model
{
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'start_date',
        'end_date',
    ];

    protected $table = "survey_set";
    public $timestamps = false;
    use HasFactory;

    public function getUser(){
        return $this->belongsTo(User::class);
    }
    public function getquestion(){
        return $this->hasMany(question::class);
    }
}
