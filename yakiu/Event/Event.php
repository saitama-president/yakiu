<?php

namespace yakiu\Event;

class Event{
    public $from;
    public $args;
    
    public function __construct($from,$args=null) {
        $this->from=$from;
        $this->args=$args;
    }
}