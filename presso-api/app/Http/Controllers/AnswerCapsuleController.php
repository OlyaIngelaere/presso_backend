<?php

namespace App\Http\Controllers;

use App\Models\AnswerCapsule;
use App\Models\Answer;
use App\Models\Capsule;
use App\Models\SessionAnswer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\AnswerCapsuleStoreRequest;
use App\Http\Requests\AnswerCapsuleUpdateRequest;

class AnswerCapsuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $answerCapsules = AnswerCapsule::with(['answer', 'answer.question', 'capsule'])->orderBy('id')->latest()->paginate(5);

        return view('answerCapsules.index', compact('answerCapsules'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $answers = Answer::with('question')->orderBy('id')->get();
        $capsules = Capsule::orderBy('id')->get();
        return view('answerCapsules.create', compact('answers', 'capsules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnswerCapsuleStoreRequest $request)
    {     
        AnswerCapsule::create($request->validated());

        return redirect()->route('answerCapsules.index')
                         ->with('success', 'Answer - Capsule created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AnswerCapsule $answerCapsule)
    {
        return view('answerCapsules.show',compact('answerCapsule'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnswerCapsule $answerCapsule)
    {
        $answers = Answer::with('question')->orderBy('id')->get();
        $capsules = Capsule::orderBy('id')->get();
        return view('answerCapsules.edit',compact('answerCapsule', 'answers', 'capsules'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnswerCapsuleUpdateRequest $request, AnswerCapsule $answerCapsule)
    {
        $answerCapsule->update($request->validated());

        return redirect()->route('answerCapsules.index')
                        ->with('success','Answer - Capsule updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnswerCapsule $answerCapsule)
    {
        $answerCapsule->delete();

        return redirect()->route('answerCapsules.index')
                        ->with('success','Answer - Capsule deleted successfully');
    }

    // Get reccomended capsules
    function getRecommendedCapsules($sessionId){
        $sessionAnswers = SessionAnswer::where("sessionId", $sessionId)->with('answer.answerCapsules.capsule')->get();

        $recommendations = array();
        foreach($sessionAnswers as $sessionAnswer){
            foreach($sessionAnswer->answer->answerCapsules as $answerCapsule){
                if(isset($recommendations[$answerCapsule->capsule->id])){
                    $recommendations[$answerCapsule->capsule->id] += 1;
                }
                else{
                    $recommendations[$answerCapsule->capsule->id] = 1;
                }
            }
        }
        
        arsort($recommendations);
        $recommendations = array_slice(array_keys($recommendations), 0, 3);
        $capsules = Capsule::whereIn('id', $recommendations)->get();

        return response()->json($capsules);
    }
}
