<?php
include '../Back-end/GameScript.php';
session_start();
?>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../tailwind.css" rel="stylesheet">
        <title>Player names</title>
    </head>
    <body>
    <section class="text-gray-700 body-font">
        <div class="container px-8 pt-48 pb-24 mx-auto lg:px-4">
            <h1
                    class="mb-10 text-2xl font-bold tracking-tighter text-center text-black lg:text-center lg:text-5xl title-font"
            >
                Player names
            </h1>
            <div class="flex flex-col w-full p-8 mx-auto mt-10 border rounded-lg lg:w-2/6 md:w-1/2 md:ml-auto md:mt-0">
                <form action="" method="POST">

                    <?php

                    if (isset($_SESSION['playerCount'])) {
                        $playerCount = $_SESSION['playerCount'];
                    } else {
                        $playerCount = null;
                    }
                    if ($playerCount == 0 && $playerCount != null) {
                        header('Location: computerSetup.php');
                    } else {
                        for ($i = 0; $i < $playerCount; $i++) {
                            echo "<div>
                                <input name='player" . ($i + 1) . "' placeholder='Player  " . ($i + 1) . "'s name'
                                class='w-full px-4 py-2 mb-4 text-black bg-gray-100 border-transparent rounded-lg mr-4 text-base'>
                                </div>";
                        }
                    }

                    if ($playerCount != null) {
                        echo "
                    <input
                        class='w-full px-4 py-2 mb-4 text-white bg-black border-transparent rounded-lg mr-4 text-base hover:bg-gray-800 hover:to-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2'
                        type='submit' name='submit' value='next'>
                    </div>
                        </form>";
                    } else {
                        echo "I will give u a tip go to the beninging before the age of players all the way back until you reach the instructions";
                    }
                    ?>
            </div>
    </section>

    </body>
    </html>

<?php
if (isset($_POST['submit'])) {
    $game = $_SESSION['game'];
    for ($i = 0; $i < $playerCount; $i++) {
        if (is_string($_POST['player' . ($i + 1)])) {
            $playerName = trim($_POST['player' . ($i + 1)]);
        } else {
            $playerName = "Haha u ain't getting in chad number " . ($i + 1);
        }

        if (!$game->addPlayer(new HumanPlayer($playerName))) {
            session_unset();
            session_destroy();
            header('Location: humanSetup.php');
        }
    }

    if (count($game->getPlayers()) < 4) {
        header('Location: computerSetup.php');
    } else {
        header('Location: game.php');
    }
}
?>