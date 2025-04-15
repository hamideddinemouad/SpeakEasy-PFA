<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\QuestionController;
use app\Http\Controllers\AnswerController;
use App\Http\Requests\QuizRequest;
use App\Models\Question;

class QuizController extends Controller
{
    //
    public $level;
    public $language;
    public $questions;
    public $indexSoFar;
    public $decreaseLevel = false;
    public $increaseLevel = false;
    public $score;
    public $errorsSoFar;
    public $questionNumber;


    public function getPrevData(){
    }
    public function continue(){
        dd('lol');
    }

    public function start(QuizRequest $request){

        if (!session('questions')){
            $this->language = $request->language;
            $this->level = $request->level;
            $this->loadQuestions();
            $this->indexSoFar = 0;
            $this->errorsSoFar = 0;
            // dd('session is null');
            $question = $this->generateQuestion();
            // dd($question);
            return view('quizpage')->with('question', $question);
        }
        // dd('session not null');
        $this->loadPrevious();
        $this->questions = $this->loadQuestions();
        $question = $this->generateQuestion();
        return view('quizpage');
    }

    public function loadPrevious(){
        $this->language = session('language');
        $this->level = session('level');
        $this->questions = session('questions');
        $this->indexSoFar = session('indexSoFar');
        $this->increaseLevel = session('increaseLevel');
        $this->decreaseLevel = session('increaseLevel');
        $this->errorsSoFar = session('ErrorsSoFar');
    }

    public function saveProgress(){
        session([
            'questions' => $this->questions, 
            'indexSoFar' => $this->indexSoFar, 
            'decreaseLevel' => $this->decreaseLevel, 
            'increaseLevel' => $this->increaseLevel, 
            'score' => $this->score,
            'errrsSoFar' => $this->errorsSoFar]);
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
    public function generateQuestion(){
        // dd($this->questions);
        return $this->questions[$this->indexSoFar];
    }
}
