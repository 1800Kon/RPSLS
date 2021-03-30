<?php
include_once 'ComputerPlayer.php';
include_once 'HumanPlayer.php';

class MoveEvaluator
{

    public array $playerList;

    public function __construct($playerList)
    {
        $this->playerList = $playerList;
    }

    function evaluate()
    {
        foreach($this->playerList as $player)
        {
            foreach($this->playerList as $comparedPlayer)
            {
                if($player != $comparedPlayer)
                {
                    switch ($this->matrix($player->getMove(), $comparedPlayer->getMove()))
                    {
                        case true:
                            $player->setRoundWins($player->getRoundWins()+1);
                            break;
                        case false:
                            $player->setRoundLosses($player->getRoundLosses()+1);
                            break;
                        default:
                            $player->setRoundTies($player->getRoundTies()+1);
                    }
                }
            }
        }
    }

    //1 = rock, 2 = paper, 3 = scissors, 4 = lizard, 5 = spock
    public function matrix($move1, $move2): ?bool
    {
        //Handling the moves if move1 beats move2
        if ($move1 == 1 && $move2 == 3)
        {
            return true;
        }
        elseif($move1 == 1 && $move2 == 4)
        {
             return true;
        }
        elseif ($move1 == 2 && $move2 == 1)
        {
            return true;
        }
        elseif($move1 == 2 && $move2 == 5)
        {
            return true;
        }
        elseif($move1 == 3 && $move2 == 2)
        {
            return true;
        }
        elseif($move1 == 3 && $move2 == 4)
        {
            return true;
        }
        elseif($move1 == 4 && $move2 == 2)
        {
            return true;
        }
        elseif($move1 == 4 && $move2 == 5)
        {
            return true;
        }
        elseif($move1 == 5 && $move2 == 1)
        {
            return true;
        }
        elseif($move1 == 5 && $move2 == 3)
        {
            return true;
        }
        //Handling the moves if move1 loses against move2
        elseif ($move1 == 1 && $move2 == 2)
        {
            return false;
        }
        elseif($move1 == 1 && $move2 == 5)
        {
            return false;
        }
        elseif ($move1 == 2 && $move2 == 3)
        {
            return false;
        }
        elseif($move1 == 2 && $move2 == 4)
        {
            return false;
        }
        elseif($move1 == 3 && $move2 == 1)
        {
            return false;
        }
        elseif($move1 == 3 && $move2 == 5)
        {
            return false;
        }
        elseif($move1 == 4 && $move2 == 1)
        {
            return false;
        }
        elseif($move1 == 4 && $move2 == 3)
        {
            return false;
        }
        elseif($move1 == 5 && $move2 == 2)
        {
            return false;
        }
        elseif($move1 == 5 && $move2 == 4)
        {
            return false;
        }
        else
        {
            return null;
        }
    }

}

?>