<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function answer_details()
    {
        return $this->hasMany(AnswerDetail::class);
    }
}
