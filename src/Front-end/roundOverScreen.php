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
            Game over
          </h2>
          <p
            class="mb-5 text-2xl font-bold tracking-tighter text-center text-black md:text-5xl lg:text-center lg:text-5xl title-font"
          >
            Overview
          </p>
          <p class="mt-4 text-xl text-gray-500 lg:mx-auto">
            Look at the results
          </p>
        </div>
        <div class="overflow-x-auto">
            <div class="min-w-300 min-h-300 flex items-center justify-center font-sans overflow-hidden">
                <div class="w-full lg:w-5/6">
                    <div class="bg-white shadow-md rounded my-6">
                        <table class="min-w-max w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">Name</th>
                                    <th class="py-3 px-6 text-left">Points</th>
                                    <th class="py-3 px-6 text-center">+/-</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="font-medium">Konstantin</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            <span>-</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <span>-</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            <span class="font-medium">Tom</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            <span>-</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <span>-</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            <span class="font-medium">Costa</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            <span>-</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <span>-</span>
                                        </div>
                                    </td>                                   
                                </tr>
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            <span class="font-medium">Joel</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            <span>-</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <span>-</span>
                                        </div>
                                    </td>                                   
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      <div class="w-80 mx-auto">
        <a href="humanSetup.php">
            <button
            class="mx-auto flex items-center px-24 py-2 font-semibold text-white bg-black rounded-lg hover:bg-gray-800 hover:to-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Play Again</button>
          </button>
        </a>
      </div>
      <br>
      <div class="w-80 mx-auto">
        <a href="index.html">
          <button
            class="mx-auto flex items-center px-24 py-2 font-semibold text-white bg-black rounded-lg hover:bg-gray-800 hover:to-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2"
          >
            Main Menu
          </button>
        </a>
      </div>
    </section>
  </body>
</html>
