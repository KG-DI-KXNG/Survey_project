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
    use HasFactory;

    public function getUser(){
        return $this->belongsTo(User::class);
    }
}
