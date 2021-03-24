<?php


class ComputerPlayer extends Player
{

    private $difficulty;

    public function __construct($difficulty)
    {
        $this->difficulty = $difficulty;
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
        $this->points += $points;
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

    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;
    }

    public function getDifficulty()
    {
        return $this->difficulty;
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
    
    public function generateMove($player)
    {
        switch ($this->getDifficulty())
        {
            case 1:
                $this->setMove(rand(1, 5));
                break;
            case 2:
                //TODO: add for medium difficulty
                break;

            case 3:
                //TODO: add for hard difficulty
                break;

        }
    }

}

?>