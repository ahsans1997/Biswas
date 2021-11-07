<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.question.index',[
            'questions' => Question::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required',
            'question_answer' => 'required',
        ]);

        Question::insert([
            'question' => $request->question,
            'question_answer' => $request->question_answer,
            'action' => 1,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('question_add', $request->question.' '.'added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('admin.question.edit',[
            'single_question' => Question::findOrFail($question->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $validated = $request->validate([
            'question' => 'required',
            'question_answer' => 'required',
        ]);

        Question::findOrFail($question->id)->update([
            'question' => $request->question,
            'question_answer' => $request->question_answer,
        ]);
        return back()->with('question_edit', $request->question.' '.'Edit successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }

    public function delete($id)
    {
        Question::findOrFail($id)->delete();
        return back()->with('delete', 'Question Deleted Successfully.');
    }

    public function action($id)
    {
        if (Question::findOrFail($id)->action == 1) {
            Question::findOrFail($id)->update([
                'action' => 2,
            ]);
        } else {
            Question::findOrFail($id)->update([
                'action' => 1,
            ]);
        }
        return back()->with('action', 'Action Toggle Successfully.');
    }
}
