<?php



use PHPUnit\Framework\TestCase;
use yakiu\Yakiu;

class AXTest extends TestCase{

    public function SetUp(){
        require_once(__DIR__."/../vendor/autoload.php");
        parent::SetUp();
    }

    public function testAx(){
        $y=new Yakiu();        
        Assert(!empty($y));
        Assert(true);

    }
    
    public function testGame(){
        
        $reporter= Yakiu::CreateReporter();
        $game=Yakiu::CreateGame();
        
        $game->AddHandler($reporter);
        
        Assert(true);
        
        $game->Start();
        
        Assert(true);
    }
    
    
}
