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
        foreach ($this->playerList as $player) {
            foreach ($this->playerList as $comparedPlayer) {
                if ($player != $comparedPlayer && !$player->isMoveCompared()) {
                    switch ($this->matrix($player->getMove(), $comparedPlayer->getMove())) {
                        case "win":
                            $player->setRoundWins($player->getRoundWins() + 1);
                            break;
                        case "loss":
                            $player->setRoundLosses($player->getRoundLosses() + 1);
                            break;
                        case "tie":
                            $player->setRoundTies($player->getRoundTies() + 1);
                    }
                }
            }
            $player->setMoveCompared(true);
        }
    }

    //1 = rock, 2 = paper, 3 = scissors, 4 = lizard, 5 = spock
    public function matrix($move1, $move2): string
    {
        //Handling the moves if move1 beats move2
        if ($move1 == 1 && $move2 == 3) {
            return "win";
        } elseif ($move1 == 1 && $move2 == 4) {
            return "win";
        } elseif ($move1 == 2 && $move2 == 1) {
            return "win";
        } elseif ($move1 == 2 && $move2 == 5) {
            return "win";
        } elseif ($move1 == 3 && $move2 == 2) {
            return "win";
        } elseif ($move1 == 3 && $move2 == 4) {
            return "win";
        } elseif ($move1 == 4 && $move2 == 2) {
            return "win";
        } elseif ($move1 == 4 && $move2 == 5) {
            return "win";
        } elseif ($move1 == 5 && $move2 == 1) {
            return "win";
        } elseif ($move1 == 5 && $move2 == 3) {
            return "win";
        } //Handling the moves if move1 loses against move2
        elseif ($move1 == 1 && $move2 == 2) {
            return "loss";
        } elseif ($move1 == 1 && $move2 == 5) {
            return "loss";
        } elseif ($move1 == 2 && $move2 == 3) {
            return "loss";
        } elseif ($move1 == 2 && $move2 == 4) {
            return "loss";
        } elseif ($move1 == 3 && $move2 == 1) {
            return "loss";
        } elseif ($move1 == 3 && $move2 == 5) {
            return "loss";
        } elseif ($move1 == 4 && $move2 == 1) {
            return "loss";
        } elseif ($move1 == 4 && $move2 == 3) {
            return "loss";
        } elseif ($move1 == 5 && $move2 == 2) {
            return "loss";
        } elseif ($move1 == 5 && $move2 == 4) {
            return "loss";
        } elseif ($move1 == $move2) {
            return "tie";
        } elseif ($move1 == "null" || $move2 == "null") {
            return "gg";
        }
    }

}

?>