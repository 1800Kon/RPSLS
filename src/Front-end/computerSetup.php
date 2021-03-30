<?php
include '../Back-end/GameScript.php';
session_start();
?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings</title>
    <link href="../../tailwind.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
  </head>

  <body>
    <section class="text-gray-700 body-font mx-auto">
      <div class="container px-8 pt-48 pb-24 mx-auto lg:px-4">
        <div class="text-center">
          <h2 class="text-base text-red-600 font-semibold uppercase">
            The fun part
          </h2>
          <p
            class="mb-5 text-2xl font-bold tracking-tighter text-center text-black md:text-5xl lg:text-center lg:text-5xl title-font"
          >
            Settings
          </p>
          <p class="mt-4 text-xl text-gray-500 lg:mx-auto">
            Choose how many robot
          </p>
        </div>
        <div class="mt-8 md:ml-auto md:mr-auto lg:ml-72 lg:mr-72">
          <div class="ml-30 mr-30 w-auto text-center">
            <div class="px-5 py-6">
              <div
                class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mb-3 text-blue-800 bg-gray-200 rounded-full bg-gray-200 text-white"
              >
                <i class="material-icons" style="font-size: 36px">android</i>
              </div>
              <p class="mb-3 text-lg font-medium text-gray-700 title-font">
                Robots
              </p>
              <div class="relative inline-flex">
                <svg
                  class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 412 232"
                >
                  <path
                    d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                    fill="#648299"
                    fill-rule="nonzero"
                  />
                </svg>
                <form action="" method="POST">
                    <select name="numCpuPlayers" class="border border-gray-300 rounded-md text-gray-600 h-10 pl-5 pr-10 bg-white md:pr-7 hover:border-gray-400 focus:outline-none appearance-none">
                      <option>Choose a number</option>
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                    <div class="w-80 mx-auto">
                        <input type="submit" name="submit" value ='Continue' class="animate-pulse flex items-center px-24 py-2 mx-auto font-semibold text-white bg-black rounded-lg">
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

<?php
if (isset($_POST['submit']))
{
    if (isset($_SESSION['game']))
    {
        $game = $_SESSION['game'];
        $numberOfPlayers = count($game->getPlayers()) + $_POST['numCpuPlayers'];
        if($numberOfPlayers <= 4 && $numberOfPlayers >= 2)
        {
            for($i = 0; $i < ($_POST['numCpuPlayers']); $i++)
            {
                $game->addPlayer(new ComputerPlayer("computer" . ($i + 1)));
            }
            header('Location: game.php');
        }
        else 
        {
            session_unset();
            session_destroy();
            header('Location: humanSetup.php');
        }

    }
    else
    {
        session_unset();
        session_destroy();
        header('Location:index.html');
    }
}
?>