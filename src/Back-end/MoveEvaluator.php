<?php


class MoveEvaluator
{

    public $playerList;

    public function __construct($playerList)
    {
        $this->playerList = $playerList;
    }

    function evaluate($playerList)
    {
        foreach($playerList as $player)
        {
            foreach($playerList as $comparedPlayer)
            {
                if($player != $comparedPlayer)
                {

                }
            }
        }
    }

    //1 = rock, 2 = paper, 3 = scissors, 4 = lizard, 5 = spock
    public function matrix($move1, $move2)
    {
        if($move1 == 1)
        {
        
        }
    }

}

?>