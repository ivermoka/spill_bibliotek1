<?php?>

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
    <title>Console Connection</title>
    
  </head>
  <nav
  id="navbar" class="bg-slate-500 w-screen h-20 px-12 flex justify-between items-center fixed duration-75 top-0 z-30"
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
      <line class="hamburger-line" x1="3" y1="12" x2="21" y2="12"></line>
      <line class="hamburger-line" x1="3" y1="6" x2="21" y2="6"></line>
      <line class="hamburger-line" x1="3" y1="18" x2="21" y2="18"></line>
    </svg>
    <div
      id="dropdown"
      class="bg-slate-500 text-white text-xl min-h-1/2 px-5 absolute left-0 hidden flex-col items-center rounded-b-lg z-10"
    >
      <span class="cursor-pointer hover:underline underline-offset-8 my-10"
        ><a>PlayStation</a></span
      >
      <span class="cursor-pointer hover:underline underline-offset-8 my-10"
        ><a>Xbox</a></span
      >
      <span class="cursor-pointer hover:underline underline-offset-8 my-10"
        ><a>Nintendo</a></span
      >
      <span class="cursor-pointer hover:underline underline-offset-8 my-10"
        ><a>Log In</a></span
      >
      <span class="cursor-pointer hover:underline underline-offset-8 my-10"
        ><a href="signup.html">Sign Up</a></span
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
      <a href="signup.html"><span class="cursor-pointer hover:underline">Sign Up</span></a>
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
  <body class="h-screen">
    <div class="w-full h-3/4 overflow-hidden flex flex-col place-content-center justify-center mt-20  ">
        <img class="place-self-center z-1 -mt-20 w-3/7 h-1/3 absolute" src="imgelias/oblivionname.png" alt="">
        <button class="absolute bg-slate-400 text-xl w-32 h-10 place-self-center mt-80 -ml-8 rounded-md active:scale-105 cursor-pointer z-10">Lei spill</button>
        <video class="h-50 w-screen pointer-events-none" loop autoplay>
            <source class="h-full w-full" loop autoplay src="The Elder Scrolls IV Oblivion Trailer [TubeRipper.com].mp4" type="video/mp4">
        </video>
    </div>
    <div class="h-1/2 w-screen flex flex-col">
        <div class="h-96 w-full flex flex-row justify-evenly items-center">
            <button class="w-36 h-14 bg-slate-400 rounded-xl" id="playstation">
                <p class="">PlayStation</p>
                <div id="dropdownPlaystation" class="bg-slate-500 text-white text-xl min-h-1/2 px-5 mt-4 left-0 hidden flex-col items-center rounded-b-lg">
                    <span class="cursor-pointer hover:underline underline-offset-8 my-10"><a>Ps4</a></span>
                    <span class="cursor-pointer hover:underline underline-offset-8 my-10"><a>Ps3</a></span>
                    <span class="cursor-pointer hover:underline underline-offset-8 my-10"><a>Ps Vita</a></span>
                </div>
            </button>
            <button class="w-36 h-14 bg-slate-400 rounded-xl " id="xbox">Xbox
                <div id="dropdownXbox" class="bg-slate-500 text-white text-xl min-h-1/2 px-5 mt-4 left-0 hidden flex-col items-center rounded-b-lg">
                    <span class="cursor-pointer hover:underline underline-offset-8 my-10"><a>xbox series S</a></span>
                    <span class="cursor-pointer hover:underline underline-offset-8 my-10"><a>xbox series X</a></span>
                    <span class="cursor-pointer hover:underline underline-offset-8 my-10"><a>xbox one</a></span>
                </div>
            </button>
            <button class="w-36 h-14 bg-slate-400 rounded-xl " id="nintendo">Nintendo
                <div id="dropdownNin" class="bg-slate-500 text-white text-xl min-h-1/2 px-5 mt-4 left-0 hidden flex-col items-center rounded-b-lg">
                    <span class="cursor-pointer hover:underline underline-offset-8 my-10"><a>switch</a></span>
                    <span class="cursor-pointer hover:underline underline-offset-8 my-10"><a>wii</a></span>
                    <span class="cursor-pointer hover:underline underline-offset-8 my-10"><a>DS</a></span>
                </div>
            </button>
        </div>
        <div>

        </div>
    </div>
    <div class="w-screen h-screen flex flex-row justify-center items-center">
      
      <!-- <button class="bg-white " id="left-arrow">Left</button>
      <div class="carousel-item w-full h-full float-left transform scale-75 flex flex-row">
        <div class="w-1/2 h-1/2 bg-white">1</div>
        <div class="w-1/2 h-1/2 bg-white">2</div>
        <div class="w-1/2 h-1/2 bg-white">3</div>
     </div> 
     <button class="bg-white" id="right-arrow">Right</button> -->
    </div>
  </body>
</html>

</body>
</html>