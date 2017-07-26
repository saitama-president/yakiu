<?php

namespace yakiu\Event;


use yakiu\Event\Events\EventGameStart;


class Reporter implements EventHandler{
    
    public $name="a";
    
    public function __construct($name="？？？") {
        $this->name=$name;
    }

    public function event(Event $e) {
        
        switch (get_class($e))
        {
            case EventGameStart::class :
                $this->Speak("試合が始まりました");
                break;
            case Event::class : 
                $this->Speak("汎用イベント");                
                break;
            default : 
                $this->Speak("よくわからん…");
                echo "DEF";
        }
    }
    
    public function Speak($message){
        
        echo "{$this->name}「 $message 」";
    }

}