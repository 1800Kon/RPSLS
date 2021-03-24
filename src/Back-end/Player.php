<?php

abstract class Player
{
    //properties
    protected $name;
    protected $move;
    protected $points;
    protected $bet;

    //methods
    abstract public function setBet($bet);
    abstract public function getBet();
    abstract public function setName($name);
    abstract public function getName();
    abstract public function setPoints($points);
    abstract public function getPoints();
    abstract public function setMove($move);
    abstract public function getMove();
    
}

?>