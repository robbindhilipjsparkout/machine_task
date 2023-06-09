<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CorrectAnswer;
use App\Models\Questions;
use App\Models\Options;
use App\Models\HasApiTokens;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestScoreEmail;
use DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('machine_task.create_questions');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('machine_task.create_questions');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


public function store(Request $request){

    $questions = $request->input('test');

    foreach($questions as $questionData) {

        //dd($questions);

        $question = Questions::create([
            'questions' => $questionData['question'],
        ]);

         Options::create([
                'option1' => $questionData['option1'],
                'option2' => $questionData['option2'],
                'question_id' => $question->id,
            ]);

            // dd($question->id);

        CorrectAnswer::create([

                'questions_id' => $question->id,
                'correctanswer'=>$questionData['correctAnswer'],

            ]);

        }
    
    
// Redirect or perform any other actions after storing the data

return redirect()->route('questionscreate')->with('success', 'Questions stored successfully.');
}



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CorrectAnswer  $correctAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(CorrectAnswer $correctAnswer)
    {
     
        $questions=Questions::with('QuestionToOption')->get();
        
        
        //$correctanswer=CorrectAnswer::get();

        return view('machine_task.attend_test',  compact('questions'));


    }


  
public function score(Request $request)
{
    $answers = $request->input('answers');

    // Retrieve the correct answers from the database
    $questions = Questions::with('QuestionToCorrectAnswer')->get();
    //$correctAnswers = CorrectAnswer::pluck('correctanswer', 'questions_id');

    // Calculate the score
    $correctAnswers = 0;

    if (!empty($answers)) {
    
        foreach ($questions as $question) {
            // Check if the selected answer is correct
            $correctAnswer = $question->QuestionToCorrectAnswer->first();  // Retrieve the correct answer instance

           // Check if the question ID exists as an index in the $answers array
           if (isset($correctAnswer) && isset($answers[$question->id]))    {
            if ($answers[$question->id] === $correctAnswer->correctanswer) {
                $correctAnswers++;
            }
            }    
    
        $totalQuestions = count($questions);
        $score = ($correctAnswers / $totalQuestions) * 100;
}


} 

// Display the score
    return view('machine_task.score', compact('score', 'answers', 'questions'));
}

}



