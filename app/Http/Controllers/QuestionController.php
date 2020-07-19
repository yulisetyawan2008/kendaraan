<?php

namespace App\Http\Controllers;
use \Carbon\Carbon;

use Illuminate\Http\Request;
use App\Question;
use App\Category;
use App\Tag;
use App\Answer;

class QuestionController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index']);
    }

    public function index(){
        $questions = Question::all();
        return view('question.index', compact('questions'));
    }

    public function create(){
        $categories = Category::all();
        return view('question.form', compact('categories'));
    }

    public function store(Request $request){
        // dd($request->all());
        $mytime = Carbon::now();
        $mytime->toDateTimeString();

        $new_question = new Question;

        $new_question->judul = $request->judul;
        $new_question->isi = $request->isi;
        $new_question->user_id = $request->user()->id;
        $new_question->created_at = $mytime;
        $new_question->updated_at = $mytime;
        $new_question->category_id = $request->category_id;

        $new_question->save();

        $tagArr = explode(',', $request->tags);

        $tagsMulti = [];
        foreach($tagArr as $strTag){
            $tagArrAssc["tag_name"] = $strTag;
            $tagsMulti[] = $tagArrAssc;
        }
        foreach($tagsMulti as $tagChek){
            $tag = Tag::firstOrCreate($tagChek);
            $new_question->tags()->attach($tag->id);
        }
        return redirect('/question')->with('create','pertanyaan telah di buat');
    }

    public function show($id){
        $question = Question::where('id', $id)->first();
        $answers = Answer::where('question_id', $id)->get();
        return view('question.show', compact('question', 'answers'));
    }

    public function edit($id){
        // dd('masuk');
        $question = Question::find($id);
        $categories = Category::all();
        return view('question.edit', compact('question', 'categories'));
    }

    public function update($id, Request $request){
        $mytime = Carbon::now();
        $mytime->toDateTimeString();

        $question = Question::find($id);
        $question->judul = $request->judul;
        $question->isi = $request->isi;
        $question->updated_at = $mytime;
        $question->created_at = $request->created_at;
        $question->category_id = $request->category_id;
        $question->save();
        return redirect('/question')->with('update',"pertanyaan telah di update");
    }
    
    public function destroy($id){
        // dd($id);
        $question = Question::find($id);
        $question->delete();
        return redirect('/question')->with('delete','pertanyaan telah di hapus');
    }
}
