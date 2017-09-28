<?php



use PHPUnit\Framework\TestCase;
use yakiu\Yakiu;
use yakiu\Watcher;
use yakiu\Scene;

class SceneTest extends TestCase{

    public function SetUp(){
        require_once(__DIR__."/../vendor/autoload.php");
        
        
        
        parent::SetUp();
    }
 
    public function testG(){
        //stream_filter_append(STDOUT, 'convert.iconv.utf-8/utf-8', STREAM_FILTER_WRITE);
        
        
        $scene= new \yakiu\Scene\NBall();
        
        $scene->AddWatcher(new Watcher\RawWatcher());
        $scene->AddWatcher(new Watcher\PersonWatcher());
        $scene->Start();
        
        
        Assert(true);
    }
    
    
}
