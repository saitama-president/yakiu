<?php

namespace yakiu\Watcher;

abstract class Watcher {
    
    public $enable=true;
    
    public function __construct() {
        ;
    }
    
    public abstract function doWatched($obj);


    public function see($obj){
        $this->doWatched($obj);        
    }
    
}
