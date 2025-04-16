<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\QuestionController;
use app\Http\Controllers\AnswerController;
use App\Http\Requests\QuestionAnswer;
use App\Http\Requests\QuizRequest;
use App\Models\Question;

class QuizController extends Controller
{
    //
    public $level;
    public $language;
    public $questions;
    public $indexSoFar = 0;
    public $decreaseLevel = false;
    public $increaseLevel = false;
    public $score = 0;
    public $errorsSoFar = 0;
    public $questionCount = 0;


    public function continue(QuestionAnswer $answer){
        // dd($answer->answer);
        //correct
        if($answer->answer === "1"){
            $this->loadPrevious();
            $this->indexSoFar++;
            $this->score++;
            $this->questionCount++;
            $this->saveProgress();
            return view('quizpage')
            ->with('question', $this->questions[$this->indexSoFar])
            ->with('score', $this->score)
            ->with('errorsSofar', $this->errorsSoFar)
            ->with('questionCount', $this->questionCount)
            ->with('level', $this->level);
        }
        //incorrect
        $this->loadPrevious();
        $this->indexSoFar++;
        $this->questionCount++;
        $this->errorsSoFar++;
        $this->handleLevel();
        $this->saveProgress();
        return view('quizpage')
        ->with('question', $this->questions[$this->indexSoFar])
        ->with('score', $this->score)
        ->with('errorsSofar', $this->errorsSoFar)
        ->with('questionCount', $this->questionCount)
        ->with('level', $this->level)
        ->with('prev', 'previous question incorrect');
        // $this->questions = $this->loadQuestions();
        // $question = $this->generateQuestion();
        // return view('quizpage')->with('question', $question);
    }
    public function handleLevel(){
        if ($this->errorsSoFar >= 6){
            $this->decreaseLevel = true;
            $this->errorsSoFar = 0;
        }
    }
    public function start(QuizRequest $request){
        // dd('start func');
        $this->language = $request->language;
        $this->level = $request->level;
        $this->loadQuestions();
        $this->saveProgress();
        // $this->indexSoFar = 0;
        // $this->errorsSoFar = 0;
            // dd('session is null');
        return view('quizpage')
            ->with('question', $this->questions[$this->indexSoFar])
            ->with('score', $this->score)
            ->with('errorsSofar', $this->errorsSoFar)
            ->with('questionCount', $this->questionCount)
            ->with('level', $this->level);
            // dd($question);
  
        // $this->loadPrevious();
        // $this->questions = $this->loadQuestions();
        // $question = $this->generateQuestion();
        // return view('quizpage')->with('question', $question);
    }

    public function loadPrevious(){
        $this->language = session('language');
        $this->level = session('level');
        $this->questions = session('questions');
        $this->indexSoFar = session('indexSoFar');
        $this->increaseLevel = session('increaseLevel');
        $this->decreaseLevel = session('increaseLevel');
        $this->errorsSoFar = session('errorsSoFar');
        $this->score = session('score');
        $this->questionCount = session('questionCount');
    }

    public function saveProgress(){
        session([
            'questions' => $this->questions, 
            'indexSoFar' => $this->indexSoFar, 
            'decreaseLevel' => $this->decreaseLevel, 
            'increaseLevel' => $this->increaseLevel, 
            'score' => $this->score,
            'errorsSoFar' => $this->errorsSoFar,
            'level' => $this->level,
            'language' => $this->language,
            'questionCount' => $this->questionCount]);
    }
    public function loadQuestions(){
        // dd($this);
        // dd(Question::where('Level', $this->level)->where('language', ($this->language))->with('answers')->take('20')->get());
        $this->questions = Question::where('Level', $this->level)->where('language', ($this->language))->with('answers')->take('20')->get();
        // dd($this->questions);
    }
    
    public function continueQuizz(){
        // dd(session()->all());
        //bring questions and index so far
    }
    // public function generateNextQuestion(){
    //     // dd($this->questions);
    //     return view('quizpage')->with('question', $this->questions[$this->indexSoFar]);
    // }
}
