<?php
include_once 'HumanPlayer.php';
include_once 'ComputerPlayer.php';
include_once 'MoveEvaluator.php';


class GameScript
{
    public array $players;
    public int $roundCounter;

    public function __construct()
    {
        $this->players = [];
        $this->roundCounter = 0;
    }

    public function getPlayers(): array
    {
        return $this->players;
    }

    public function addPlayer($player): bool
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

    public function getRoundCounter(): int
    {
        return $this->roundCounter;
    }

    public function incrementRound()
    {
        $this->roundCounter += 1;
    }

    public function isMaxPlayersReached(): bool
    {
        if(count($this->players) > 4)
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