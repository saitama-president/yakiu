<?php

require_once(__DIR__."/../vendor/autoload.php");

use PHPUnit\Framework\TestCase;
use yakiu\Yakiu;

class AXTest extends TestCase{

    public function SetUp(){
        parent::SetUp();
    }

    public function testAx(){
        $y=new Yakiu();
        echo $y->T();
        Assert($y->T()=="T");
        Assert(!empty($y));
        Assert(true);
        return true;
    }
}
