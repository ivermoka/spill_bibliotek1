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



if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
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
    <title>PS Games</title>
  </head>
  <body>
    <div class="absolute inset-x-0 top-0">
      <main>
        <nav
          class="bg-slate-500 w-screen h-20 px-12 flex justify-between items-center z-20"
        >
          <div class="gap-6 h-2/3 text-center lg:flex md:flex sm:hidden hidden">
            <div class="height-full">
              <a href="main.php">
                <img
                src="imgelias/logo.png"
                alt="logo"
                class="h-full w-full hover:animate-spin cursor-pointer"
                />
              </a>
              
            </div>
            <div
              class="text-white text-xl flex justify-between items-center w-80 h-full"
            >
              <a href="ps.html"
                ><span class="cursor-pointer hover:underline underline-offset-8"
                  >PlayStation</span
                ></a
              >
              <a href="xbox.html"
                ><span class="cursor-pointer hover:underline underline-offset-8"
                  >Xbox</span
                ></a
              >
              <a href="nintendo.html"
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
              <span class="cursor-pointer hover:underline underline-offset-8 my-10"
              ><a href="ps.html">PlayStation</a></span
              >
              <span class="cursor-pointer hover:underline underline-offset-8 my-10"
                ><a href="xbox.html">Xbox</a></span
              >
              <span class="cursor-pointer hover:underline underline-offset-8 my-10"
                ><a href="nintendo.html">Nintendo</a></span
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
          <div class="grid w-screen h-96 gap-48 grid-flow-col grid-col-2 justify-center">
            <div class="bg-white w-full border-4 h-full rounded-2xl">
              <div class="w-96 h-2/3  overflow-hidden items-center justify-center flex">
                <img class="max-w-xs h-60" src="imgelias/gow1.png" alt="">
              </div>
              <div class="w-full h-1/3 border-t-2 border-t-black grid grid-flow-col items-center justify-around">
                <div>PLACEHOLDER</div>
                <div>
                <a href="rent_screen.html"><button class="bg-cyan-300 py-3 px-10 rounded-xl font-bold text-xl">Rent</button></a>
                </div>
              </div>
            </div>

            <div class="bg-white w-full border-4 h-full rounded-2xl">
              <div class="w-96 h-2/3  overflow-hidden items-center justify-center flex">
                <img class="object-contain h-60" src="imgelias/tlou2.jpeg" alt="">
              </div>
              <div class="w-full h-1/3 border-t-2 border-t-black grid grid-flow-col items-center justify-around">
                <div></div>
                <div>
                  <a href="rent_screen.html"><button class="bg-cyan-300 py-3 px-10 rounded-xl font-bold text-xl">Rent</button></a>
                </div>
              </div>
            </div>
          </div>
            
  
        </section>
        <section class="h-screen mt-20 ">
          <div class="grid w-screen h-96 gap-48 grid-flow-col grid-col-2 justify-center">
            <div class="bg-white w-full border-4 h-full rounded-2xl">
              <div class="w-96 h-2/3  overflow-hidden items-center justify-center flex">
                <img class="max-w-xs h-60" src="imgelias/rdr2.jpeg" alt="">
              </div>
              <div class="w-full h-1/3 border-t-2 border-t-black grid grid-flow-col items-center justify-around">
                <div>PLACEHOLDER</div>
                <div>
                  <a href="rent_screen.html"><button class="bg-cyan-300 py-3 px-10 rounded-xl font-bold text-xl">Rent</button></a>
                </div>
              </div>
            </div>

            <div class="bg-white w-full border-4 h-full rounded-2xl">
              <div class="w-96 h-2/3  overflow-hidden items-center justify-center flex">
                <img class="object-contain h-60" src="imgelias/gtaV.jpeg" alt="">
              </div>
              <div class="w-full h-1/3 border-t-2 border-t-black grid grid-flow-col items-center justify-around">
                <div><?php 
                $result = mysqli_query($mysqli, "SELECT Title, Utvikler FROM Spill WHERE SpillID = '1'");
                  if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "Title: " . $row['Title'] . ", Utvikler: " . $row['Utvikler'] . "<br>";
                      };?>           
                       </div>
                <div>
                  <button class="bg-cyan-300 py-3 px-10 rounded-xl font-bold text-xl">Rent</button>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="ps4" class="min-h-96">
          <div class="p-0 lg:p-16 md:p-16 sm:p-0">
            <h1
              class="text-white  text-5xl italic sm:justify-center lg:block md:block sm:flex flex justify-center"
            >
              PS3
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
          <div class="grid w-screen h-96 gap-48 grid-flow-col grid-col-2 justify-center">
            <div class="bg-white w-full border-4 h-full rounded-2xl">
              <div class="w-96 h-2/3  overflow-hidden items-center justify-center flex">
                <img class="max-w-xs h-60" src="imgelias/gow1.png" alt="">
              </div>
              <div class="w-full h-1/3 border-t-2 border-t-black grid grid-flow-col items-center justify-around">
                <div>PLACEHOLDER</div>
                <div>
                  <button class="bg-cyan-300 py-3 px-10 rounded-xl font-bold text-xl">Rent</button>
                </div>
              </div>
            </div>

            <div class="bg-white w-full border-4 h-full rounded-2xl">
              <div class="w-96 h-2/3  overflow-hidden items-center justify-center flex">
                <img class="object-contain h-60" src="imgelias/tlou2.jpeg" alt="">
              </div>
              <div class="w-full h-1/3 border-t-2 border-t-black grid grid-flow-col items-center justify-around">
                <div>PLACEHOLDER</div>
                <div>
                  <button class="bg-cyan-300 py-3 px-10 rounded-xl font-bold text-xl">Rent</button>
                </div>
              </div>
            </div>
          </div>
            
  
        </section>
        <section class="h-screen mt-20 ">
          <div class="grid w-screen h-96 gap-48 grid-flow-col grid-col-2 justify-center">
            <div class="bg-white w-full border-4 h-full rounded-2xl">
              <div class="w-96 h-2/3  overflow-hidden items-center justify-center flex">
                <img class="max-w-xs h-60" src="imgelias/rdr2.jpeg" alt="">
              </div>
              <div class="w-full h-1/3 border-t-2 border-t-black grid grid-flow-col items-center justify-around">
                <div>PLACEHOLDER</div>
                <div>
                  <button class="bg-cyan-300 py-3 px-10 rounded-xl font-bold text-xl">Rent</button>
                </div>
              </div>
            </div>

            <div class="bg-white w-full border-4 h-full rounded-2xl">
              <div class="w-96 h-2/3  overflow-hidden items-center justify-center flex">
                <img class="object-contain h-60" src="imgelias/gtaV.jpeg" alt="">
              </div>
              <div class="w-full h-1/3 border-t-2 border-t-black grid grid-flow-col items-center justify-around">
                <div>PLACEHOLDER</div>
                <div>
                  <button class="bg-cyan-300 py-3 px-10 rounded-xl font-bold text-xl">Rent</button>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="ps4" class="min-h-96">
          <div class="p-0 lg:p-16 md:p-16 sm:p-0">
            <h1
              class="text-white text-5xl italic sm:justify-center lg:block md:block sm:flex flex justify-center"
            >
              PS Vita 
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
          <div class="grid w-screen h-96 gap-48 grid-flow-col grid-col-2 justify-center">
            <div class="bg-white w-full border-4 h-full rounded-2xl">
              <div class="w-96 h-2/3  overflow-hidden items-center justify-center flex">
                <img class="max-w-xs h-60" src="imgelias/gow1.png" alt="">
              </div>
              <div class="w-full h-1/3 border-t-2 border-t-black grid grid-flow-col items-center justify-around">
                <div>PLACEHOLDER</div>
                <div>
                  <button class="bg-cyan-300 py-3 px-10 rounded-xl font-bold text-xl">Rent</button>
                </div>
              </div>
            </div>

            <div class="bg-white w-full border-4 h-full rounded-2xl">
              <div class="w-96 h-2/3  overflow-hidden items-center justify-center flex">
                <img class="object-contain h-60" src="imgelias/tlou2.jpeg" alt="">
              </div>
              <div class="w-full h-1/3 border-t-2 border-t-black grid grid-flow-col items-center justify-around">
                <div>PLACEHOLDER</div>
                <div>
                  <button class="bg-cyan-300 py-3 px-10 rounded-xl font-bold text-xl">Rent</button>
                </div>
              </div>
            </div>
          </div>
            
  
        </section>
        <section class="h-screen mt-20 ">
          <div class="grid w-screen h-96 gap-48 grid-flow-col grid-col-2 justify-center">
            <div class="bg-white w-full border-4 h-full rounded-2xl">
              <div class="w-96 h-2/3  overflow-hidden items-center justify-center flex">
                <img class="max-w-xs h-60" src="imgelias/rdr2.jpeg" alt="">
              </div>
              <div class="w-full h-1/3 border-t-2 border-t-black grid grid-flow-col items-center justify-around">
                <div>PLACEHOLDER</div>
                <div>
                  <button class="bg-cyan-300 py-3 px-10 rounded-xl font-bold text-xl">Rent</button>
                </div>
              </div>
            </div>

            <div class="bg-white w-full border-4 h-full rounded-2xl">
              <div class="w-96 h-2/3  overflow-hidden items-center justify-center flex">
                <img class="object-contain h-60" src="imgelias/gtaV.jpeg" alt="">
              </div>
              <div class="w-full h-1/3 border-t-2 border-t-black grid grid-flow-col items-center justify-around">
                <div>PLACEHOLDER</div>
                <div>
                  <button class="bg-cyan-300 py-3 px-10 rounded-xl font-bold text-xl">Rent</button>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </body>
</html>

