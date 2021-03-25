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
        $moveEvaluator = new MoveEvaluator($this->players);
        $moveEvaluator->evaluate();
        foreach($this->players as $player)
        {
            $points = 0;

            if ($player->getBet() == 0)
            {
                $points += ($player->getRoundWins() * 10);
                $points += ($player->getRoundLosses() * -10);
            }
            else
            {
                $points += ($player->getRoundWins() * (10 * $player->getBet()));
                $points += ($player->getRoundWins() * (-10 * $player->getBet()));
            }

            $player->setPoints($player->getPoints() + $points);
        }
    }

    public function endGame()
    {
        return $this->players();
        $this->players
    }

    public function playAgain()
    {
        foreach($this->players as $player)
        {
            $player->setRoundTies(0);
            $player->setRoundLosses(0);
            $player->setRoundWins(0);
            $player->setBet(0);
            $player->setMove(null);
            incrementRound();
        }
    }



}

?>