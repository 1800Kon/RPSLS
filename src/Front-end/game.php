<?php
include '../Back-end/GameScript.php';
session_start();
//session_destroy();
?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../tailwind.css" rel="stylesheet">
        <title>Game</title>
    </head>
    <body>
    <section class="text-gray-700 body-font self-center">
        <div class="flex h-screen w-screen">
            <div class="flex flex-row h-4/5 w-4/5 mx-auto my-auto self-center">
                <?php
                if (isset($_SESSION['game'])) {
                    $game = $_SESSION['game'];
                    $i = 1;
                    foreach ($game->getPlayers() as $player) {

                        if ($player instanceof ComputerPlayer) {
                            if ($player->getMove() == "null") {
                                $player->generateMove();
                                $game->setmoveCount($game->getMoveCount() + 1);
                                $_SESSION['player' . $i . 'Move'] = $player->getMove();
                            }
                        }
                        echo "<div class='px-8 py-6 mx-auto px-10 h-4/5 w-1/4 mt-20'>
                                <div class='bg-gray-100 rounded-3xl'>
                                    <div class='flex h-10 mb-2'>
                                        <h2 class='flex m-auto text-3xl font-medium tracking-widest text-black title-font'>
                                            " . $player->getName() . "
                                        </h2>
                                    </div>
                                </div>
            
                                <form action='#' method='POST' name='formPlayer" . $i . "'>
                                    <div class='h-4/5 w-full mx-auto bg-gray-100 rounded-3xl overflow-auto overflow-hidden'>
                                        <div class='flex h-2/6 w-3/6 mx-auto bg-gray-300 rounded-3xl mt-5'>
                                            <img src='../../images/business.png' class='h-5/6 w-5/6 rounded-3xl m-auto'>
                                        </div>
                                        <div class='flex bg-gray-300 mt-5 h-20 rounded-3xl'>
                                            <div class='flex h-5/6 w-1/5 my-auto mx-auto rounded-3xl'>
                                                <div class='m-auto h-5/6 w-5/6 rounded-3xl'>
                                                        <img src='../../images/dude.png' class='h-full w-full rounded-3xl m-auto'>
                                                    ";
                        if (!isset($_SESSION['player' . $i . 'Move'])) {
                            echo "<input type='radio' name='radio" . $i . "' value='1'>";
                        }
                        echo "
                                               </div>
                                            </div>
                                            <div class='flex h-5/6 w-1/5 my-auto mx-auto rounded-3xl'>
                                                <div class='m-auto h-5/6 w-5/6 rounded-3xl'>
                                                        <img src='../../images/dude.png' class='h-full w-full rounded-3xl m-auto'>
                                                    
                                                    ";
                        if (!isset($_SESSION['player' . $i . 'Move'])) {
                            echo "<input type='radio' name='radio" . $i . "' value='2'>";
                        }
                        echo "
                                                </div>
                                            </div>
                                            <div class='flex h-5/6 w-1/5 my-auto mx-auto rounded-3xl'>
                                                <div class='m-auto h-5/6 w-5/6 rounded-3xl'>
                                                        <img src='../../images/dude.png' class='h-full w-full rounded-3xl m-auto'>
                                                    ";
                        if (!isset($_SESSION['player' . $i . 'Move'])) {
                            echo "<input type='radio' name='radio" . $i . "' value='3'>";
                        }
                        echo "
                                                </div>
                                            </div>
                                            <div class='flex h-5/6 w-1/5 my-auto mx-auto rounded-3xl'>
                                                <div class='m-auto h-5/6 w-5/6 rounded-3xl'>
                                                    <img src='../../images/dude.png' class='h-full w-full rounded-3xl m-auto'>
                                                    ";
                        if (!isset($_SESSION['player' . $i . 'Move'])) {
                            echo "<input type='radio' name='radio" . $i . "' value='4'>";
                        }
                        echo "
                                                    </div>
                                            </div>
                                            <div class='flex h-5/6 w-1/5 my-auto mx-auto rounded-3xl'>
                                                <div class='m-auto h-5/6 w-5/6 rounded-3xl'>
                                                        <img src='../../images/dude.png' class='h-full w-full rounded-3xl m-auto'>
                                                    ";
                        if (!isset($_SESSION['player' . $i . 'Move'])) {
                            echo "<input type='radio' name='radio" . $i . "' value='5'>";
                        }
                        echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class='flex h-10 w-5/6 m-auto mt-5'>
                                                    ";
                        if (!isset($_SESSION['player' . $i . 'Move'])) {
                            echo "<input type='number' name='player" . $i . "Bet'>";
                            echo "<input type='submit' name='submit" . $i . "' value='Lock in selection' class='flex m-auto animate-pulse flex items-center px-6 py-2 mt-auto font-semibold text-white bg-black rounded-lg'>";
                        }
                        echo "
                                        </div>
                                    </div>
                                </form>
                            </div>";
                        $i++;
                    }
                }
                ?>
            </div>
        </div>
    </section>
    </body>
    </html>

<?php

if (isset($_SESSION['game'])) {
    $j = 1;
    $game = $_SESSION['game'];
    $isThereAComputerPlayer = false;
    foreach ($game->getPlayers() as $player) {

        if ($player instanceof ComputerPlayer) {
            $isThereAComputerPlayer = true;
        }

        if (isset($_POST['submit' . $j]) && isset($_POST['radio' . $j])) {
            $_SESSION['player' . $j . 'Move'] = $_POST['radio' . $j];

            $player->setMove($_POST['radio' . $j]);
            $game->setmoveCount($game->getMoveCount() + 1);


            if (isset($_POST['player' . $j . 'Bet'])) {
                $playerBet = (int)($_POST['player' . $j . 'Bet']);
                if (($player->getPoints() >= $playerBet && $playerBet >= 0) || ($player->getPoints() < 0 && $player->getPoints() < $playerBet)) {
                    $player->setBet($playerBet);
                } else {
                    echo "Funny Guy you ain't that rich";
                }
            }

            if ($player->getMove() != 'null') {
                echo " <script> location.replace('game.php') </script>";
            }
        }
        $j++;

        if (!$game->isPointsDistributed()) {
            if ($game->getMoveCount() == count($game->getPlayers())) {
                $game->setCurrentRoundComplete(true);

                if ($game->isCurrentRoundComplete()) {

                    $game->calculatePoints();
                }
            }
        } else {

            echo " <script> location.replace('roundOverScreen.php') </script>";
        }
    }
}

?>