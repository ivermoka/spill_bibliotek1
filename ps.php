<?php include('spill.php')?>
<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'Spillbibliotek1';
$db_port = 8888;
$mysqli = new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db
);
$Select_Spill = "SELECT * FROM Spill";
$result = mysqli_query($mysqli, $Select_Spill);
while( $row = $result->fetch_array()){
  print_r($row);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="app.js" rel="stylesheet"></script>
    <title>nav demoo</title>
  </head>
  <body>
    <div class="absolute inset-x-0 top-0">
      <main>
        <nav
          class="bg-slate-500 w-screen h-20 px-12 flex justify-between items-center z-20"
        >
          <div class="gap-6 h-2/3 text-center lg:flex md:flex sm:hidden hidden">
            <div class="height-full">
              <img
                src="imgelias/logo.png"
                alt="logo"
                class="h-full w-full hover:animate-spin cursor-pointer"
              />
            </div>
            <div
              class="text-white text-xl flex justify-between items-center w-80 h-full"
            >
              <a
                ><span class="cursor-pointer hover:underline underline-offset-8"
                  >PlayStation</span
                ></a
              >
              <a
                ><span class="cursor-pointer hover:underline underline-offset-8"
                  >Xbox</span
                ></a
              >
              <a
                ><span class="cursor-pointer hover:underline underline-offset-8"
                  >Nintendo</span
                ></a
              >
            </div>
          </div>
          <div class="lg:hidden md:hidden sm:block block">
            <svg
              class="cursor-pointer"
              id="hamburger"
              viewBox="0 0 24 24"
              width="34"
              height="50"
              fill="none"
              stroke="white"
              stroke-width="1.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <line
                class="hamburger-line"
                x1="3"
                y1="12"
                x2="21"
                y2="12"
              ></line>
              <line class="hamburger-line" x1="3" y1="6" x2="21" y2="6"></line>
              <line
                class="hamburger-line"
                x1="3"
                y1="18"
                x2="21"
                y2="18"
              ></line>
            </svg>
            <div
              id="dropdown"
              class="bg-slate-500 text-white text-xl min-h-1/2 px-5 absolute left-0 hidden flex-col items-center rounded-b-lg z-10"
            >
              <span
                class="cursor-pointer hover:underline underline-offset-8 my-10"
                ><a>PlayStation</a></span
              >
              <span
                class="cursor-pointer hover:underline underline-offset-8 my-10"
                ><a>Xbox</a></span
              >
              <span
                class="cursor-pointer hover:underline underline-offset-8 my-10"
                ><a>Nintendo</a></span
              >
              <span
                class="cursor-pointer hover:underline underline-offset-8 my-10"
                ><a>Log In</a></span
              >
              <span
                class="cursor-pointer hover:underline underline-offset-8 my-10"
                ><a>Sign Up</a></span
              >
            </div>
          </div>
          <div class="h-2/3">
            <img
              src="imgelias/logo.png"
              alt="logo"
              class="h-full w-full hover:animate-spin lg:hidden md:hidden sm:block block cursor-pointer"
            />
          </div>
          <div class="flex gap-10 items-center">
            <div
              class="flex-col text-white text-sm hidden sm:hidden md:flex lg:flex"
            >
              <span class="cursor-pointer hover:underline">Log In</span>
              <span class="cursor-pointer hover:underline">Sign Up</span>
            </div>
            <div class="cursor-pointer">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="40.909"
                height="51.956"
                viewBox="0 0 54.909 51.956"
              >
                <g
                  id="Icon_feather-search"
                  data-name="Icon feather-search"
                  transform="translate(-3 -3)"
                >
                  <path
                    id="Path_3"
                    data-name="Path 3"
                    d="M50.72,26.133c0,11.948-10.347,21.633-23.11,21.633S4.5,38.081,4.5,26.133,14.847,4.5,27.61,4.5s23.11,9.686,23.11,21.633Z"
                    transform="translate(0 0)"
                    fill="none"
                    stroke="#fff"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="3"
                  />
                  <path
                    id="Path_4"
                    data-name="Path 4"
                    d="M36,36,24.975,24.975"
                    transform="translate(19.79 16.837)"
                    fill="none"
                    stroke="#fff"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="3"
                  />
                </g>
              </svg>
            </div>
          </div>
        </nav>
        <header
          class="bg-zinc-900 h-56 w-screen text-white text-6xl flex items-center px-12 italic lg:justify-start md:justify-start sm:justify-center justify-center"
        >
          PlayStation
        </header>
        <section id="ps4" class="bg-red-400 min-h-screen">
          <div class="p-0 lg:p-16 md:p-16 sm:p-0">
            <h1
              class="text-white text-5xl italic sm:justify-center lg:block md:block sm:flex flex justify-center"
            >
              PS4
            </h1>
            <svg height="2" width="500">
              <line
                x1="0"
                y1="0"
                x2="500"
                y2="0"
                style="stroke: black; stroke-width: 2"
              />
            </svg>
          </div>
          <div class=" grid w-4/5 ml-40 h-screen grid-rows-2 grid-flow-col min-h-full">
            <div class="bg-white border-4 h-full mr-32 rounded-2xl">
              <div class="w-full h-2/3  overflow-hidden">
                <img class="w-1/2 -mt-40 h-fit" src="imgelias/gow.jpeg" alt="">
              </div>
              <div class="w-full h-1/3 border-t-2 border-t-black"></div>
            </div>
            <div class="bg-white border-4 h-full mr-32 mt-10 rounded-2xl">
              
            </div>
            <div class="bg-white border-4 h-full ml-32 rounded-2xl">

            </div>
            <div class="bg-white border-4 h-full ml-32 mt-10 rounded-2xl">

            </div>
          </div>
        </section>
      </main>
    </div>
  </body>
</html>