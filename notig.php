<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./public/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Amazon || HomePage</title>
</head>

<body>
    <div id="alert-container" class="fixed z-[100] top-4 right-4 max-w-md w-full sm:w-auto m-4">
        <div class="bg-${alertType}-50 border border-${alertType}-400 rounded-xl text-${alertType}-800 text-sm p-6 relative">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-4">
                    <div class="flex items-center justify-center h-8 w-8 bg-${alertType}-500 rounded-full p-2">
                        <i class="fa-solid fa-${icon} text-white"></i>
                    </div>
                    <p class="text-xl">
                        <span class="font-bold">${alertText}:</span> Product ${status} ${productName}!
                    </p>
                </div>
                <button onclick="closeNotif(this)">
                    <i class="fa-solid fa-xmark text-2xl cursor-pointer"></i>
                </button>
            </div>
            <div class="absolute bottom-0 left-0 w-full h-2 bg-${alertType}-300 rounded-b-xl overflow-hidden">
                <div class="h-full bg-${alertType}-500 progress-bar"></div>
            </div>
        </div>
    </div>

</body>

</html>