<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body class="font-[Poppins]">

    <!-- nav bar  -->
    <nav class="flex justify-around gap-10 p-3 text-center shadow-lg shadow-gray-400/50">
        <!-- logo -->
        <div class="w-fit">
            <span class="text-2xl text-white bg-blue-600 p-1 rounded-sm font-semibold">Edu</span>
            <span class="text-2xl text-blue-600 bg-white p-1 rounded-sm font-semibold">Curricullum</span>
        </div>

        <div class="flex justify-between gap-8">
            <a href="#" class="relative text-xl text-gray-800 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-blue-500 after:transition-all after:duration-300 hover:after:w-full">About Us</a>
            <a href="#" class="relative text-xl text-gray-800 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-blue-500 after:transition-all after:duration-300 hover:after:w-full">Steps</a>
            <a href="#" class="relative text-xl text-gray-800 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-blue-500 after:transition-all after:duration-300 hover:after:w-full">Contact Us</a>
        </div>
        <div class="flex gap-2">
            <a href="#" class="border px-3 py-1 text-xl rounded-sm hover:text-gray-500">Login</a>
            <a href="#" class="bg-blue-500 px-3 py-1 text-xl rounded-sm text-white hover:bg-blue-600">Sign Up</a>
        </div>
    </nav>

    <!-- Hero section  -->
    <div class="flex w-fit mx-auto mt-10">
        <div class="flex flex-col justify-evenly gap-3 w-105">
            <p class="text-6xl font-bold">Welcome to <span class="text-blue-700">Curricullum Management Portal</span></p>
            <p class="font-semibold text-2xl text-gray-700">Your one stop for managing all curricullum from different AICTE universities</p>
        </div>
        <div class="w-200">
            <img src="/src/assets/undraw_educator_6dgp.png" alt="">
        </div>
    </div>

    <!-- Features section  -->

    <h1 class="text-5xl font-semibold text-center mt-5"><span class="text-blue-600">Features</span> of the Platform</h1>

    <!-- view curricullum  -->
    <div class=" flex justify-evenly mb-10 mt-10 w-[1220px] mx-auto">
        <div class="w-90 flex flex-col border p-4 gap-4 rounded-sm border-gray-500 shadow-lg shadow-gray-500/50">
            <i class="fa-solid fa-magnifying-glass"></i>
            <div class="d">
                <p class="font-bold text-gray-800">View Curricullum</p>
                <p class="text-gray-500">Students can view the curricullum from different universities</p>
            </div>
        </div>


        <!-- upload curricullum  -->
        <div class="w-90 flex flex-col border p-4 gap-4 rounded-sm border-gray-500 shadow-lg shadow-gray-500/50">
            <i class="fa-solid fa-upload"></i>
            <div class="d">
                <p class="font-bold text-gray-800">Upload Curricullum</p>
                <p class="text-gray-500">Teachers across different universities can upload their curricullums</p>
            </div>
        </div>

        <div class="w-90 flex flex-col border p-4 gap-4 rounded-sm border-gray-500 shadow-lg shadow-gray-500/50">
            <!-- upload curricullum  -->
            <i class="fa-solid fa-pencil"></i>
            <div class="d">
                <p class="font-bold text-gray-800">Provide Feedback</p>
                <p class="text-gray-500">Students can give their feedback on the existing curriculums</p>
            </div>
        </div>

    </div>
</body>

</html>
</body>

</html>