<?php

namespace yakiu\Event\Events;

use yakiu\Event\Event;

class GameEvents{
    
    public static function GameStart($from){
        return new EventGameStart($from,"AAA");
    }
    public static function GameEnd($from){
        return new EventGameEnd($from,"AAA");
    }
    
}

class EventGameStart extends Event{
    
}