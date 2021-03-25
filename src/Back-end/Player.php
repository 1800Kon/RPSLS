<?php

abstract class Player
{
    //properties
    protected $name;
    protected $move;
    protected $points;
    protected $bet;
    protected $roundWins;
    protected $roundLosses;
    protected $roundTies;
    
    
    //methods
    abstract public function setBet($bet);
    abstract public function getBet();
    abstract public function setName($name);
    abstract public function getName();
    abstract public function setPoints($points);
    abstract public function getPoints();
    abstract public function setMove($move);
    abstract public function getMove();
    abstract function setRoundWins($roundWins);
    abstract function getRoundWins();
    abstract function setRoundLosses($roundLosses);
    abstract function getRoundLosses();
    abstract function setRoundTies($roundTies);
    abstract function getRoundTies();
}

?>