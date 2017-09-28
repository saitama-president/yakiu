<?php
namespace yakiu\Scene;

/**
 * Description of Scene
 *
 * @author s-yoshihara
 */
abstract class Scene {
    public $N=1;
    protected $watchers=[];
    
    protected abstract function doBegin();
    protected abstract function doAction($N);
    protected abstract function doEnd();
    
    public function AddWatcher(\yakiu\Watcher\Watcher $watcher){
        $this->watchers[]=$watcher;
        return true;
    }

    public function __construct($n=1) {
        $this->N=$n;
    }
    
    
    public function Begin(){
        $this->doBegin();
        
    }
    public function End(){
        $this->doEnd();
    }
    
    public function Action($n){
        $this->doAction($n);
    }
    
    
    public function Start(){
        $this->Begin();
        $this->see_all("開始");
        
        for($i=1;$i<=$this->N;$i++){
            
            
            $this->Action($i);
        }
        
        $this->see_all("終了");
        $this->End();
    }
    
    private function see_all($obj){
        foreach ($this->watchers as $watch){
            $watch->see($obj);
        }
    }


    public function __toString() {
        return self::class;
    }
}
