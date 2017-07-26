<?php

namespace yakiu\Data;

class GameResult{
    public $teamA;
    public $teamB;
    
    public $scoreA;
    public $scoreB;
    
    //成績
    
    public function ScoreA(){
    }
    
    public function ScoreB(){
    }
    
    
    public function Result(){        
        return "引き分け";
    }
    
    public function WinTeam(){
    }
    
    public function LoseTeam(){
    }
    
}