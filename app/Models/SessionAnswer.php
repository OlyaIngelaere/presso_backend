<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionAnswer extends Model
{
    use HasFactory;

    protected $table = 'sessionAnswers';

    protected $fillable = [
        'questionId',
        'answerId',
        'sessionId'
    ];

    public function question() {
        return $this->belongsTo(Question::class, 'questionId');
    }

    public function answer() {
        return $this->belongsTo(Answer::class, 'answerId');
    }

    public function session() {
        return $this->belongsTo(Session::class, 'sessionId');
    }
}
