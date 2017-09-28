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
        
        $scene= new \yakiu\Scene\NBall();
        
        $watcher=new Watcher\RawWatcher();
        $scene->AddWatcher($watcher);
        $scene->Start();
        
        
        Assert(true);
    }
    
    
}
