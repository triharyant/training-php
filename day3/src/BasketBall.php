<?php

namespace App;

class BasketBall
{
    public $home; 
    public $away; 
    public $homeScore;
    public $awayScore;


    public function __construct($home,$away){
        $this->home=$home;
        $this->away=$away;
        $this->homeScore=0;
        $this->awayScore=0;
    }

    public function homeName(){
        return $this->home;
    }

    public function awayName(){
        return $this->away;
    }

    public function homeScore(){
        return $this->homeScore;
    }

    public function awayScore(){
        return $this->awayScore;
    }

    public function homeOnePoint(){
        $this->homeScore+=1;
    }

    public function awayOnePoint(){
        $this->awayScore+=1;
    }

    public function homeTwoPoints(){
        $this->homeScore+=2;
    }

    public function awayTwoPoints(){
        $this->awayScore+=2;
    }

    public function homeThreePoints(){
        $this->homeScore+=3;
    }

    public function awayThreePoints(){
        $this->awayScore+=3;
    }
}