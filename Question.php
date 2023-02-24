<?php

class Question {
    private $name;
    private $option1;
    private $option2;
    private $option3;
    private $option4;
    private $answer;

    public function __construct($question) {
        $this->name = $question.questionName;
        $this->option1 = $question.option1;
        $this->option2 = $question.option2;
        $this->option3 = $question.option3;
        $this->option4 = $question.option4;
        $this->answer = $question.answer;
    }
    public function getQuestionName() {
        return $this->name;
    }
    private function setQuestionName($newName) {
        $this->name = $newName;
    }
    public function getQuestionOptions() {
        return [$this->option1, $this->option2, $this->option3, $this->option4];
    }
    private function setQuestionOption($num, $newOption) {
        $this->$num = $newOption;
    }
}
