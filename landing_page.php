<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>SyllabiSync</title>
</head>

<body class="font-[Poppins]">

    <!--NAVBAR -->
    <nav class="flex justify-around gap-10 p-5 text-center shadow-lg shadow-gray-400/50 fixed w-full top-0 bg-white">
        <!-- logo -->
        <div class="w-fit">
            <span class="text-2xl text-white bg-blue-600 p-1 rounded-sm font-semibold">Edu</span>
            <span class="text-2xl text-blue-600 bg-white p-1 rounded-sm font-semibold">Curricullum</span>
        </div>

        <!-- home contact about curriculum institution -->
        <div class="flex justify-between gap-8">
            <a href="#" class="relative text-xl text-gray-800 after:absolute after:left-0 after:bottom-0 after:h-[3px] after:w-0 after:bg-blue-500 after:transition-all after:duration-300 hover:after:w-full">Home</a>
            <a href="#" class="relative text-xl text-gray-800 after:absolute after:left-0 after:bottom-0 after:h-[3px] after:w-0 after:bg-blue-500 after:transition-all after:duration-300 hover:after:w-full">About</a>
            <a href="#" class="relative text-xl text-gray-800 after:absolute after:left-0 after:bottom-0 after:h-[3px] after:w-0 after:bg-blue-500 after:transition-all after:duration-300 hover:after:w-full">Curriculum</a>
            <a href="#" class="relative text-xl text-gray-800 after:absolute after:left-0 after:bottom-0 after:h-[3px] after:w-0 after:bg-blue-500 after:transition-all after:duration-300 hover:after:w-full">Institution</a>
            <a href="#" class="relative text-xl text-gray-800 after:absolute after:left-0 after:bottom-0 after:h-[3px] after:w-0 after:bg-blue-500 after:transition-all after:duration-300 hover:after:w-full">Contact</a>
        </div>
        <div class="flex gap-2">
            <a href="#" class="border px-3 py-1 text-xl rounded-sm hover:text-gray-500">Login</a>
            <a href="#" class="bg-blue-500 px-3 py-1 text-xl rounded-sm text-white hover:bg-blue-600">Sign Up</a>
        </div>
    </nav>

    <!-- Hero image -->
    <div class="flex w-fit mx-auto mt-10 gap-50 mb-10">
        <div class="flex flex-col justify-evenly gap-3 w-105">
            <p class="text-6xl font-bold">Welcome to <span class="text-blue-700">Curricullum Management Portal</span></p>
            <p class="font-semibold text-2xl text-gray-700">Your one stop for managing all curricullum from different AICTE universities</p>
        </div>
        <div class="w-180">
            <img class="h=[600px]" src="assets\image\hero1.png" alt="">
        </div>
    </div>


    <!-- FEATURES SECTION  -->
    <section class="py-10 bg-gray-100">
    <h1 class="text-5xl font-semibold text-center mt-5 py-10">Key <span class="text-blue-600">Features</span></h1>
        <div class="container mx-auto px-4">
        
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <img src="https://cdn-icons-png.flaticon.com/512/2436/2436873.png" alt="Standardization" class="h-16 w-16 mb-4 mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Standardized Curriculum</h3>
                    <p class="text-gray-600 text-center">Ensure consistency across all technical institutions</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <img src="https://cdn-icons-png.flaticon.com/512/2436/2436876.png" alt="Quality" class="h-16 w-16 mb-4 mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Quality Assurance</h3>
                    <p class="text-gray-600 text-center">Maintain high educational standards through structured frameworks</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <img src="https://cdn-icons-png.flaticon.com/512/2436/2436875.png" alt="Updates" class="h-16 w-16 mb-4 mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Easy Updates</h3>
                    <p class="text-gray-600 text-center">Seamless curriculum updates and version control</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <img src="https://cdn-icons-png.flaticon.com/512/2436/2436877.png" alt="Sharing" class="h-16 w-16 mb-4 mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Resource Sharing</h3>
                    <p class="text-gray-600 text-center">Collaborate and share resources across institutions</p>
                </div>
            </div>
        </div>
    </section>

    <div class="relative h-60 w-auto bg-[url('/assets/image/homebanner.jpg')] bg-cover bg-center">
        <div class="absolute inset-0 bg-black/50 flex flex-col justify-center items-center">
            <h1 class="text-white text-lg py-2">AICTE Approved Excellence!</h1>
            <h1 class="text-white text-lg font-bold py-2" >Bridging the<span class="text-red-500 text-lg font-bold py-2"> Gap</span> in Technical Education.</h1>
            <button class="bg-white px-3 py-2 m-2 text-lg font-light rounded-sm text-black hover:bg-amber-500 hover:text-white">Learn More</button>
        </div>
    </div>

    <!-- Stats section -->
    <section class="py-20 bg-primary text-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div>
                    <img src="https://cdn-icons-png.flaticon.com/512/2436/2436871.png" alt="Buildings" class="h-16 w-16 mb-4 mx-auto">
                    <span class="text-4xl font-bold mb-2 block text-blue-600">10,000+</span>
                    <span class="text-lg text-blue-600">Approved Institutions</span>
                </div>
                <div>
                    <img src="https://cdn-icons-png.flaticon.com/512/2436/2436870.png" alt="Students" class="h-16 w-16 mb-4 mx-auto">
                    <span class="text-4xl font-bold mb-2 block text-blue-600">1M+</span>
                    <span class="text-lg text-blue-600">Students Impacted</span>
                </div>
                <div>
                    <img src="https://cdn-icons-png.flaticon.com/512/2436/2436872.png" alt="Curriculum" class="h-16 w-16 mb-4 mx-auto">
                    <span class="text-4xl font-bold mb-2 block text-blue-600">500+</span>
                    <span class="text-lg text-blue-600">Curriculum Models</span>
                </div>
            </div>
        </div>
    </section>

    

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-lg font-semibold mb-4">About AICTE</h4>
                    <p class="text-gray-400">
                        All India Council for Technical Education (AICTE) is the statutory body and a national-level council for technical education.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-orange-300">Home</a></li>
                        <li><a href="#" class="hover:text-orange-300">About</a></li>
                        <li><a href="#" class="hover:text-orange-300">Curriculum</a></li>
                        <li><a href="#" class="hover:text-orange-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Resources</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-orange-300">Documentation</a></li>
                        <li><a href="#" class="hover:text-orange-300">Guidelines</a></li>
                        <li><a href="#" class="hover:text-orange-300">FAQs</a></li>
                        <li><a href="#" class="hover:text-orange-300">Support</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <address class="text-gray-400 not-italic">
                        Nelson Mandela Marg<br>
                        Vasant Kunj, New Delhi-110070<br>
                        India<br>
                        <a href="mailto:support@aicte-india.org" class="hover:text-orange-300">support@aicte-india.org</a>
                    </address>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; <?php echo date('Y'); ?> CTRL+C. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>
</body>

</html>