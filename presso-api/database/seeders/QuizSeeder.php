<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;
use App\Models\AnswerCapsule;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            ['id' => 1, 'question' => 'What’s your go-to drink to start your day?'],
            ['id' => 2, 'question' => 'What’s the most important in a coffee to you?'],
            ['id' => 3, 'question' => 'Do you prefer a specific cup size?'],
            ['id' => 4, 'question' => 'Where do you usually enjoy your coffee?'],
            ['id' => 5, 'question' => 'Do you add milk or sugar to your coffee?'],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }

        $answers = [
            ['id' => 1, 'questionId' => 1, 'answer' => 'Strong and bold'],
            ['id' => 2, 'questionId' => 1, 'answer' => 'Smooth and comforting'],
            ['id' => 3, 'questionId' => 1, 'answer' => 'A sweet treat with a touch of coffee'],
            ['id' => 4, 'questionId' => 1, 'answer' => 'I am open to exploring'],

            ['id' => 5, 'questionId' => 2, 'answer' => 'The flavor profile'],
            ['id' => 6, 'questionId' => 2, 'answer' => 'The strength or intensity' ],
            ['id' => 7, 'questionId' => 2, 'answer' => 'The aroma--it sets the mood'],
            ['id' => 8, 'questionId' => 2, 'answer' => 'Sustainability'],

            ['id' => 9, 'questionId' => 3, 'answer' => 'Small'],
            ['id' => 10, 'questionId' => 3, 'answer' => 'Medium, perfect'],
            ['id' => 11, 'questionId' => 3, 'answer' => 'Large and filling'],

            ['id' => 12, 'questionId' => 4, 'answer' => 'At home, cozy space'],
            ['id' => 13, 'questionId' => 4, 'answer' => 'On the go, while commuting'],
            ['id' => 14, 'questionId' => 4, 'answer' => 'At work, during a quick break'],
            ['id' => 15, 'questionId' => 4, 'answer' => 'In a café, as part of my relaxation'],
        
            ['id' => 16, 'questionId' => 5, 'answer' => 'Always, it is all about cream'],
            ['id' => 17, 'questionId' => 5, 'answer' => 'Sometimes, depending on my mood'],
            ['id' => 18, 'questionId' => 5, 'answer' => 'Never, I enjoy my coffee black'],
        ];

        foreach ($answers as $answer) {
            Answer::create($answer);
        }

        $answerCapsules = [
            ['answerId' => 1, 'capsuleId' => 1],
            ['answerId' => 2, 'capsuleId' => 2],
            ['answerId' => 3, 'capsuleId' => 3],
            ['answerId' => 4, 'capsuleId' => 4],
            ['answerId' => 1, 'capsuleId' => 5],
            ['answerId' => 2, 'capsuleId' => 6],
            ['answerId' => 3, 'capsuleId' => 7],
            ['answerId' => 4, 'capsuleId' => 8],
            ['answerId' => 1, 'capsuleId' => 9],
            ['answerId' => 2, 'capsuleId' => 10],
            ['answerId' => 3, 'capsuleId' => 11],
            ['answerId' => 4, 'capsuleId' => 12],

            ['answerId' => 5, 'capsuleId' => 1],
            ['answerId' => 6, 'capsuleId' => 5],
            ['answerId' => 7, 'capsuleId' => 9],
            ['answerId' => 8, 'capsuleId' => 2],
            ['answerId' => 5, 'capsuleId' => 6],
            ['answerId' => 6, 'capsuleId' => 10],
            ['answerId' => 7, 'capsuleId' => 3],
            ['answerId' => 8, 'capsuleId' => 7],
            ['answerId' => 5, 'capsuleId' => 11],
            ['answerId' => 6, 'capsuleId' => 4],
            ['answerId' => 7, 'capsuleId' => 8],
            ['answerId' => 8, 'capsuleId' => 12],

            ['answerId' => 9, 'capsuleId' => 1],
            ['answerId' => 10, 'capsuleId' => 2],
            ['answerId' => 11, 'capsuleId' => 3],
            ['answerId' => 9, 'capsuleId' => 4],
            ['answerId' => 10, 'capsuleId' => 5],
            ['answerId' => 11, 'capsuleId' => 6],
            ['answerId' => 9, 'capsuleId' => 7],
            ['answerId' => 10, 'capsuleId' => 8],
            ['answerId' => 11, 'capsuleId' => 9],
            ['answerId' => 9, 'capsuleId' => 10],
            ['answerId' => 10, 'capsuleId' => 11],
            ['answerId' => 11, 'capsuleId' => 12],

            ['answerId' => 12, 'capsuleId' => 1],
            ['answerId' => 13, 'capsuleId' => 3],
            ['answerId' => 14, 'capsuleId' => 5],
            ['answerId' => 15, 'capsuleId' => 7],
            ['answerId' => 12, 'capsuleId' => 9],
            ['answerId' => 13, 'capsuleId' => 11],
            ['answerId' => 14, 'capsuleId' => 2],
            ['answerId' => 15, 'capsuleId' => 4],
            ['answerId' => 12, 'capsuleId' => 6],
            ['answerId' => 13, 'capsuleId' => 8],
            ['answerId' => 14, 'capsuleId' => 10],
            ['answerId' => 15, 'capsuleId' => 12],
        
            ['answerId' => 16, 'capsuleId' => 1],
            ['answerId' => 17, 'capsuleId' => 4],
            ['answerId' => 18, 'capsuleId' => 7],
            ['answerId' => 16, 'capsuleId' => 2],
            ['answerId' => 17, 'capsuleId' => 5],
            ['answerId' => 18, 'capsuleId' => 8],
            ['answerId' => 16, 'capsuleId' => 3],
            ['answerId' => 17, 'capsuleId' => 6],
            ['answerId' => 18, 'capsuleId' => 9],
            ['answerId' => 16, 'capsuleId' => 10],
            ['answerId' => 17, 'capsuleId' => 11],
            ['answerId' => 18, 'capsuleId' => 12],
        ];

        foreach ($answerCapsules as $answerCapsule) {
            AnswerCapsule::create($answerCapsule);
        }
    }
}
