<?php
include '../Back-end/GameScript.php';
session_start();
?>
    <html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Settings</title>
        <link href="../../tailwind.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css"/>
    </head>

    <body>
    <section class="text-gray-700 body-font mx-auto">
        <div class="container px-8 pt-48 pb-24 mx-auto lg:px-4">
            <div class="text-center">
                <p
                        class="mb-5 text-2xl font-bold tracking-tighter text-center text-black md:text-5xl lg:text-center lg:text-5xl title-font"
                >
                    Game Over
                </p>
                <p class="mt-4 text-xl text-gray-500 lg:mx-auto">
                    <?php
                    if (isset($_SESSION['winner'])) {
                        $winners = $_SESSION['winner'];

                        if (count($winners) > 1) {
                            echo "And the winners are ";
                        } else {
                            echo "And the winner is ";
                        }
                        foreach ($winners as $winner) {
                            echo $winner->getName() . " ";
                        }

                    }
                    ?>
                </p>
            </div>
            <div class="overflow-x-auto">
                <div class="min-w-300 min-h-300 flex items-center justify-center font-sans overflow-hidden">
                </div>
            </div>
            <br>
            <form action="" method="POST">
                <div class="w-80 mx-auto">
                    <button type="submit" name="mainMenu"
                            class="mx-auto flex items-center px-24 py-2 font-semibold text-white bg-black rounded-lg hover:bg-gray-800 hover:to-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                        Main Menu
                    </button>
                </div>
            </form>
    </section>
    </body>
    </html>
<?php
if (isset($_POST['mainMenu'])) {
    session_unset();
    session_destroy();
    echo " <script> location.replace('index.html') </script>";
}
?>