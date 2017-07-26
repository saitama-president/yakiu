<?php

namespace yakiu\Event;


use yakiu\Event\Events\EventGameStart;


class Reporter extends EventHandler{
    
    public $name="a";
    
    public function __construct($name="？？？") {
        $this->name=$name;
    }


    
    public function Speak($message){
        
        echo "{$this->name}「 $message 」";
    }

}