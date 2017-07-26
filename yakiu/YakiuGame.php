<?php

namespace yakiu;
use yakiu\Event\Event;
use yakiu\Event\EventThrower;
use yakiu\Event\Events\GameEvents;
use yakiu\Data\Team;

class YakiuGame extends EventThrower{
    
    public $game_start_time;
    public $team_A;
    public $team_B;



    public function __construct(
        \DateTime $game_start_time,
        Team $teamA,
        Team $teamB
        ) {
        
        
    }


    public function save(){
    }

    public function load(){
    }
    
    public function isGameEnd(){
        
        
    }
    
    
    public function Start(){
        
        //開始イベント
        $this->event(GameEvents::GameStart($this));
        
        while(!$this->isGameEnd()){
        }
        
        $this->event(new Event($this,"ぬるぽ"));
        
        
    }
}
