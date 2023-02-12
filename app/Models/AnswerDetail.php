<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }

    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
