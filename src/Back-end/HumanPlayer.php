<?php
include_once 'Player.php';

class HumanPlayer extends Player
{

    public function __construct($name)
    {
        $this->name = $name;
        $this->points = 0;
        $this->bet = 0;
        $this->move = "null";
        $this->roundLosses = 0;
        $this->roundWins = 0;
        $this->roundTies = 0;
    }

    public function setBet($bet)
    {
        $this->bet = $bet;
    }

    public function getBet(): int
    {
        return $this->bet;
    }

    public function setName($name)
    {
        $this->$name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setPoints($points)
    {
        $this->points = $points;
    }

    public function getPoints(): int
    {
        return $this->points;
    }

    public function setMove($move)
    {
        $this->move = $move;
    }

    public function getMove(): int
    {
        return $this->move;
    }

    public function setRoundWins($roundWins)
    {
        $this->roundWins = $roundWins;
    }
    
    public function getRoundWins(): int
    {
        return $this->roundWins;
    }

    public function setRoundLosses($roundLosses)
    {
        $this->roundLosses = $roundLosses;
    }
    
    public function getRoundLosses(): int
    {
        return $this->roundLosses;
    }

    public function setRoundTies($roundTies)
    {
        $this->roundTies = $roundTies;
    }
    
    public function getRoundTies(): int
    {
        return $this->roundTies;
    }
}

?>