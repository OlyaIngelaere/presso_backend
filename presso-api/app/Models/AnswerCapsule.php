<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerCapsule extends Model
{
    use HasFactory;

    protected $table = 'answerCapsules';

    protected $fillable = [
        'answerId',
        'capsuleId'
    ];

    public function answer() {
        return $this->belongsTo(Answer::class, 'answerId');
    }

    public function capsule() {
        return $this->belongsTo(Capsule::class, 'capsuleId');
    }
}
