<?php
namespace yakiu\Scene;

/**
 * Description of Scene
 *
 * @author s-yoshihara
 */
abstract class Scene {
    public $N=1;
    protected $watcher=[];
    
    protected abstract function doBegin();
    protected abstract function doAction($N);
    protected abstract function doEnd();
    
    public function AddWatcher($watcher){
        $this->watcher[]=$watcher;
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
        
        for($i=1;$i<=$this->N;$i++){
            $this->Action($n);
        }
        
        $this->End();
    }
    
    
    public function __toString() {
        return self::class;
    }
}
