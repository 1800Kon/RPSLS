<?php
include_once 'Player.php';

class ComputerPlayer extends Player
{

    public function __construct($name)
    {
        $this->name = $name;
        $this->move = "null";
        $this->points = 0;
        $this->bet = 0;
        $this->roundWins = 0;
        $this->roundLosses = 0;
        $this->roundTies = 0;
        $this->moveCompared = false;
    }

    public function setBet($bet)
    {
        $this->bet = $bet;
    }

    public function getBet()
    {
        return $this->bet;
    }

    public function setName($name)
    {
        $this->$name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPoints($points)
    {
        $this->points = $points;
    }

    public function getPoints()
    {
        return $this->points;
    }

    public function setMove($move)
    {
        $this->move = $move;
    }

    public function getMove()
    {
        return $this->move;
    }

    public function setRoundWins($roundWins)
    {
        $this->roundWins = $roundWins;
    }

    public function getRoundWins()
    {
        return $this->roundWins;
    }

    public function setRoundLosses($roundLosses)
    {
        $this->roundLosses = $roundLosses;
    }

    public function getRoundLosses()
    {
        return $this->roundLosses;
    }

    public function setRoundTies($roundTies)
    {
        $this->roundTies = $roundTies;
    }

    public function getRoundTies()
    {
        return $this->roundTies;
    }

    public function generateMove()
    {
        $this->move = rand(1, 5);
    }

    function setMoveCompared($moveCompared)
    {
        $this->moveCompared = $moveCompared;
    }

    function isMoveCompared(): bool
    {
        return $this->moveCompared;
    }
}

?>