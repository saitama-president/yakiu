<?php
namespace yakiu\Watcher;

class RawWatcher extends Watcher{
    
    public $log="./log.txt";


    public function doWatched($obj) {
        $line= date("Y-m-d H:i:s").var_export($obj, true)."\n";
        
        file_put_contents($this->log,$line,FILE_APPEND);
        return $line;
    }

}
