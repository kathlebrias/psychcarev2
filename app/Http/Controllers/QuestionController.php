<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $question= DB:: select('select * from questions');
        return view('question.viewquestion', ['question'=> $question]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
             'category_type' => 'required',
             'question_type' => 'required',
             'question'      => 'required',
             'counselor_name'  => 'required'
           ]);
   
        //   //Creating Post
   
        //  // return $request->input();
   
            $questions = new Question;
            $questions->id = NULL;
            $questions->counselor_id= $request->input('counselor_name');
            $questions->category_id=$request->input('category_type');
            $questions->type=$request->input('question_type');
            $questions->question=$request->input('question');
            $questions->save();
   
           
           return redirect()->route('question.create')->with('success','Question Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
