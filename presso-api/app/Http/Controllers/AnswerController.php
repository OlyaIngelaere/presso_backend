<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\AnswerStoreRequest;
use App\Http\Requests\AnswerUpdateRequest;

class AnswerController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $answers = Answer::with('question')->orderBy('id')->latest()->paginate(5);

        return view('answers.index', compact('answers'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $questions = Question::orderBy('id')->get();
        return view('answers.create', compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnswerStoreRequest $request): RedirectResponse
    {
        Answer::create($request->validated());

        return redirect()->route('answers.index')
                         ->with('success', 'Answer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Answer $answer): View
    {
        return view('answers.show',compact('answer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Answer $answer): View
    {
        $questions = Question::orderBy('id')->get();
        return view('answers.edit',compact('answer', 'questions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnswerUpdateRequest $request, Answer $answer): RedirectResponse
    {
        $answer->update($request->validated());

        return redirect()->route('answers.index')
                        ->with('success','Answer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Answer $answer): RedirectResponse
    {
        $answer->delete();

        return redirect()->route('answers.index')
                        ->with('success','Answer deleted successfully');
    }
}
