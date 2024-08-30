<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colorful Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom animation for the navbar background */
        @keyframes bgAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 p-7 text-white fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="text-3xl font-bold">MySite</div>

        <!-- Menu -->
        <ul class="hidden md:flex space-x-8 text-lg">
            <li><a href="home.php" class="hover:text-yellow-300 transition duration-300">Home</a></li>
            <li><a href="about.php" class="hover:text-yellow-300 transition duration-300">About</a></li>
            <li><a href="blog.php" class="hover:text-yellow-300 transition duration-300">Blog</a></li>
            <li><a href="contact.php" class="hover:text-yellow-300 transition duration-300">Contact</a></li>
        </ul>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menu-btn" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden mt-4">
        <ul class="space-y-4 text-lg text-center">
            <li><a href="home.php" class="hover:text-yellow-300 transition duration-300">Home</a></li>
            <li><a href="about.php" class="hover:text-yellow-300 transition duration-300">About</a></li>
            <li><a href="blog.php" class="hover:text-yellow-300 transition duration-300">Blog</a></li>
            <li><a href="contact.php" class="hover:text-yellow-300 transition duration-300">Contact</a></li>
        </ul>
    </div>
</nav>

<!-- Main content -->
<!-- <div class="mt-20 p-6">
    <h1 class="text-4xl font-bold">Welcome to MySite</h1>
    <p class="mt-4">This is a responsive, animated, colorful navbar built with Tailwind CSS and PHP.</p>
</div> -->

<script>
    // Toggle mobile menu visibility
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

</body>
</html>
