<?php


class HumanPlayer extends Player
{

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
}

?>