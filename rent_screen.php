<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent screen</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-row justify-between w-full h-full">
    <div class="flex flex-row pt-5 justify-between bg-teal-900 w-full h-100 rounded-3xl m-12 sm:w-full lg:w-2/3 md:w-2/3">
        <div class="p-10 flex flex-col w-1/3 h-full justify-between text-white">
            <h1 class="text-4xl">Rent game</h1>
            <div>
                <div>
                    <span class="text-3xl">Name of renter:</span>
                    <br>
                    <input class="w-64 h-8" type="text" placeholder="Username">
                </div>
                <div>
                    <span class="text-3xl">Rental date:</span>
                    <br>
                    <input class="w-64 h-8" type="text" placeholder="(xx/xx/xx)">
                </div>
                <div>
                    <span class="text-3xl">Rental until date:</span>
                    <br>
                    <input class="w-64 h-8" type="text" placeholder="(xx/xx/xx)">
                </div>
            </div>
            <div>
                <button type="button" class="w-40 lg:w-80 h-12 bg-white text-black rounded-3xl md:w-40 sm:w-40">Rent</button>
            </div>

        </div>
        <div class="w-1/2 h-full flex pr-1 flex-col lg:p-10 md:pr-5 sm:p-1 justify-evenly lg:invisible sm:invisible md:visible invisible">
            <img class="w-full h-1/3 lg:h-full md:h-1/2 sm:h-1/3" src="/imgelias/xdd.png" alt="placeholder">
            <div>
                <span>fortnite er et spill</span>
            </div>
        </div>
    </div>

    <div class="flex flex-col bg-teal-900 lg:w-1/4 w-0 h-100 rounded-l-3xl sm:invisible sm:w-0 md:invisible md:w-0 lg:visible invisible">
        <div class="w-100 h-14 justify-between flex p-3">
            <span class="w-2/3 text-white text-lg lg:text-3xl md:text-xl sm:text-lg">Rental summary</span>
            <svg class="w-1/12 svg-icon" viewBox="0 0 20 20">
                <path fill="fill" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
            </svg>
        </div>
        <div class="w-100 h-1/2">
            <img class="object-fill h-full w-96 p-2" src="/imgelias/xdd.png" alt="placeholder">
        </div>
        <div class="flex flex-col justify-evenly h-1/3 pl-10 text-xs lg:text-lg md:text-sm sm:text-xs">
            <div>
                fortnite is not in the game
            </div>
            <div>
                Fortnite er et spill hvor man løper rundt og hopper. 
            </div>
        </div>
    </div>
</body>
</html>