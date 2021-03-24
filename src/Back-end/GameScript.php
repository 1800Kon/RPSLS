<?php


class GameScript
{
    public $players;
    public $roundCounter;

    public function __construct()
    {
        $this->players = array(4);
        $this->roundCounter = 0;
    }

    public function getPlayers()
    {
        return $this->players;
    }

    public function addPlayer($player)
    {
        if (!$this->isMaxPlayersReached())
        {
            array_push($this->players, $player);
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getRoundCounter()
    {
        return $this->roundCounter;
    }

    public function incrementRound()
    {
        $this->roundCounter += 1;
    }

    public function isMaxPlayersReached()
    {
        if(count($this->players) < 4)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function calculatePoints()
    {
    // TODO: POINT CALCULATION TAKE WINNERS AND LOSERS
        foreach($this->players as $player)
        {

        }
    }


}

?>