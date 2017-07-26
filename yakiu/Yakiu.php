<?php

namespace Yakiu;

use yakiu\Data\Team;

use yakiu\Event\Reporter;

class Yakiu{
    
    public static function CreateGame(
        \DateTime $game_start_date =null,
        Team $team_A = null,
        Team $team_B =null               
        ){
        
        return new \yakiu\YakiuGame(
            new \DateTime(),
            null,
            null
            );
        
    }
    

    public static function CreateReporter(
            $name="たかし"
        ){
        
        return new Reporter($name);
    }

    public static function CreateTeam(
        
        
        ){
        
        }
    

}
