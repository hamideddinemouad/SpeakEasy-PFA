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
    public $passedLevels = [];

    public function start(QuizRequest $request){

        $this->language = $request->language;
        $this->level = $request->level;
        $this->loadQuestions();
        $this->saveProgress();

        return view('quizpage')
            ->with('question', $this->questions[$this->indexSoFar])
            ->with('score', $this->score)
            ->with('errorsSofar', $this->errorsSoFar)
            ->with('questionCount', $this->questionCount)
            ->with('level', $this->level);
       

    }

    public function continue(QuestionAnswer $answer){

        if($answer->answer === "1"){
            $this->loadPrevious();
            $this->indexSoFar++;
            $this->score++;
            $this->questionCount++;
            $this->saveProgress();
            $progress = $this->handleLevel();
            if ($progress !== "continue"){
                return $progress;
            }
            return view('quizpage')
            ->with('question', $this->questions[$this->indexSoFar])
            ->with('score', $this->score)
            ->with('errorsSofar', $this->errorsSoFar)
            ->with('questionCount', $this->questionCount)
            ->with('level', $this->level);
        }
   
        $this->loadPrevious();
        $this->indexSoFar++;
        $this->questionCount++;
        $this->errorsSoFar++;
        $progress = $this->handleLevel();

        $this->saveProgress();
        if ($progress != "continue"){

            return $progress;
          
        }
        return view('quizpage')
        ->with('question', $this->questions[$this->indexSoFar])
        ->with('score', $this->score)
        ->with('errorsSofar', $this->errorsSoFar)
        ->with('questionCount', $this->questionCount)
        ->with('level', $this->level)
        ->with('prev', 'previous question incorrect');

    }

    public function handleLevel(){

        if ($this->errorsSoFar >= 1){
            $this->errorsSoFar = 0;
          
            return view("failed")->with("level", $this->level);
            
        }
        if ($this->score === 2){
            $this->errorsSoFar = 0;

        
            return view("next")->with("level", $this->level)->with("endquiz", 0);
        }
        return "continue";
    }


    public function loadPrevious(){
        $this->language = session('language');
        $this->level = session('level');
        $this->questions = session('questions');
        $this->indexSoFar = session('indexSoFar');
        $this->increaseLevel = session('increaseLevel');
        $this->decreaseLevel = session('decreaseLevel');
        $this->errorsSoFar = session('errorsSoFar');
        $this->score = session('score');
        $this->questionCount = session('questionCount');
        $this->passedLevels = session('passedLevels');
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
            'questionCount' => $this->questionCount,
            'passedLevels' => $this->passedLevels]);
    }
    public function loadQuestions(){
        $this->questions = Question::where('Level', $this->level)->where('language', ($this->language))->with('answers')->take('20')->get();
    }



    public function continueNewLevel(){

        $this->indexSoFar++;
        $this->saveProgress();
    
        return view('quizpage')
            ->with('question', $this->questions[$this->indexSoFar])
            ->with('score', $this->score)
            ->with('errorsSofar', $this->errorsSoFar)
            ->with('questionCount', $this->questionCount)
            ->with('level', $this->level);
    }

    public function decreaseLevel(){

        $this->passedLevels = session("passedLevels");
        array_push($this->passedLevels, session("level"));
        $level = $this->descreaseQuizLevel();


        if($level === "Pre-A1" || array_search($level, $this->passedLevels, true) !== false ){

            return view("quizend")->with("level", $this->level)->with("endquiz", 1);
        }

        $this->language = session('language');
     
        $this->loadQuestions();
        $this->indexSoFar = 0;
        $this->increaseLevel = false;
        $this->decreaseLevel = false;
        $this->errorsSoFar = 0;
        $this->score = 0;
        $this->questionCount = 0;
        return $this->continueNewLevel();
    } 


    public function descreaseQuizLevel(){


        switch(session("level")){
            case "A1":
                return $this->level = "Pre-A1";
            case "A2":
               $this->level = "A1";
           
               return $this->level;
            case "B1":
               
                $this->level = "A2";
                return $this->level;
            case "B2":
                $this->level = "B1";
               
                return $this->level;
            case "C1":
                
                $this->level = "B2";
                return $this->level;
            case "C2":
                
                $this->level = "C1";
                return $this->level;
                break;
        }
    }
    
    public function increaseLevel(){
      
        $level = session("level");
        $this->passedLevels = session("passedLevels");

        switch(session("level")){
            case "C1":
               $this->level = "C2";
                break;
            case "B2":

                $this->level = "C1";
                break;
            case "B1":
                $this->level = "B2";
               
                break;
            case "A2":

                $this->level = "B1";
                break;
            case "A1":
              
                $this->level = "A2";
                break;
        }
        if(array_search($this->level, $this->passedLevels, true) !== false ){
           
            dump("triggered");
          
            return view("quizend")->with("level", $level)->with("endquiz", 1);
        }
        $this->language = session('language');
        $this->loadQuestions();
        $this->indexSoFar = 0;
        $this->increaseLevel = false;
        $this->decreaseLevel = false;
        $this->errorsSoFar = 0;
        $this->score = 0;
        $this->questionCount = 0;
        return $this->continueNewLevel();
    }

}
