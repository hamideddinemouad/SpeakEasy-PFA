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

    public function getPrevData(){

    }
    public function start(QuizRequest $request){
        $this->language = $request->language;
        $this->level = $request->level;
        $this->loadQuestions();
        $this->index = 0;
    }
    public function saveProgress(){
        session([
            'questions' => $questions, 
            'indexSoFar' => $indexSoFar, 
            'decreaseLevel' => false, 
            'increaseLevel' => false, 
            'score' => 0]);
    }
    public function loadQuestions(){
        // dd($this);
        $this->questions = Question::where('Level', $this->level)->where('language', ($this->language))->with('answers')->take('20')->get();
    }
    public function continueQuizz(){
        //bring questions and index so far
    }
    public function generateQuestion(){
        return $questions[$this->index]
    }
}
