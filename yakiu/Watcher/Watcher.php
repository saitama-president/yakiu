<?php

namespace yakiu\Watcher;

abstract class Watcher {
    
    public $enable=true;
    

    
    public abstract function doWatched($obj);


    public function see($obj){
        return $this->doWatched($obj);        
    }    
    
}
