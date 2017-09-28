<?php

namespace yakiu\Watcher;

class PersonWatcher extends Watcher{
    
    public $name="";
    
    public function __construct($name="ひろし") {
        $this->name=$name;
    }


    public function doWatched($obj) {        
        return $this->messageFilter("すっごーい");
    }
    
    public function messageFilter($message){
        return "{$this->name}「{$message}」";
    }

}
