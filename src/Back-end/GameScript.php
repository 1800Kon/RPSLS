<?php
include_once 'HumanPlayer.php';
include_once 'ComputerPlayer.php';
include_once 'MoveEvaluator.php';


class GameScript
{
    public array $players;
    public int $roundCounter;
    public int $moveCount;
    public bool $currentRoundComplete;
    public bool $pointsDistributed;

    public function __construct()
    {
        $this->players = [];
        $this->roundCounter = 0;
        $this->moveCount = 0;
        $this->pointsDistributed = false;
    }

    public function getPlayers(): array
    {
        return $this->players;
    }

    public function addPlayer($player): bool
    {
        if (!$this->isMaxPlayersReached()) {
            array_push($this->players, $player);
            return true;
        } else {
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
        if (count($this->players) > 4) {
            return true;
        } else {
            return false;
        }
    }

    public function calculatePoints()
    {
        $moveEvaluator = new MoveEvaluator($this->players);
        $moveEvaluator->evaluate();
        $this->pointsDistributed = false;
        foreach ($this->players as $player) {
            $points = 0;

            if ($player->getBet() == 0) {
                $points += ($player->getRoundWins() * 10);
                $points += ($player->getRoundLosses() * -10);
                $this->pointsDistributed = true;
            } else {
                $points += ($player->getRoundWins() * (10 * $player->getBet()));
                $points += ($player->getRoundLosses() * (-10 * $player->getBet()));
                $this->pointsDistributed = true;
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
        foreach ($this->players as $player) {
            $player->setRoundTies(0);
            $player->setRoundLosses(0);
            $player->setRoundWins(0);
            $player->setBet(0);
            $player->setMove("null");
            $player->setMoveCompared(false);
            $this->setMoveCount(0);
            $this->setCurrentRoundComplete(false);
            $this->setPointsDistributed(false);
            $this->incrementRound();
        }
    }

    public function getMoveCount(): int
    {
        return $this->moveCount;
    }

    public function setMoveCount(int $moveCount): void
    {
        $this->moveCount = $moveCount;
    }

    public function isCurrentRoundComplete(): bool
    {
        return $this->currentRoundComplete;
    }

    public function setCurrentRoundComplete(bool $currentRoundComplete): void
    {
        $this->currentRoundComplete = $currentRoundComplete;
    }

    public function setPointsDistributed(bool $pointsDistributed): void
    {
        $this->pointsDistributed = $pointsDistributed;
    }

    public function isPointsDistributed(): bool
    {
        return $this->pointsDistributed;
    }

    public function findPlayer($points): array
    {
        $array = array();
        foreach ($this->players as $player) {
            if ($player->getPoints() == $points) {
                if (!in_array($player, $array)) {
                    array_push($array, $player);
                }
            }
        }
        return $array;
    }


}

?>