<?php

namespace yakiu\Event;

abstract class EventHandler {
    
    protected abstract function catchUnknownEvent(Event $e);

    public function event(Event $e) {
        //通常、何も処理しない
        
        
        $this->catchUnknownEvent($e);
    }

}
