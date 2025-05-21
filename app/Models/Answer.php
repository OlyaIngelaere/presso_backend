<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $table = 'answers';

    protected $fillable = [
        'questionId',
        'answer',
    ];

    public function question() {
        return $this->belongsTo(Question::class, 'questionId');
    }

    public function answerCapsules() {
        return $this->hasMany(AnswerCapsule::class, "answerId");
    }
}
