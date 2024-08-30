<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<!-- Your content goes here -->

<!-- Footer -->
<footer class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white py-4 mt-10">
    <div class="max-w-7xl mx-auto px-4 flex flex-col sm:flex-row justify-between items-center">
        <div class="text-sm">&copy; <?php echo date("Y"); ?> MySite. All rights reserved.</div>
        
        <ul class="flex space-x-4 text-sm mt-4 sm:mt-0">
            <li><a href="privacy.php" class="hover:text-yellow-300 transition duration-300">Privacy Policy</a></li>
            <li><a href="terms.php" class="hover:text-yellow-300 transition duration-300">Terms of Service</a></li>
            <li><a href="contact.php" class="hover:text-yellow-300 transition duration-300">Contact Us</a></li>
        </ul>
    </div>
</footer>

</body>
</html>
