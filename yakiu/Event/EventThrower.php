<?php

namespace yakiu\Event;

abstract class EventThrower{
    
    private $listeners=[];
    public function event(Event $e){
        
        foreach($this->listeners as $listener){
            $listener->event($e);            
        }
    }
    
    public function AddHandler(EventHandler $e){
        $this->listeners[]=$e;
    }
}