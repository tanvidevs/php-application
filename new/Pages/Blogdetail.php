<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

<!-- Navbar -->
<?php include './Components/Navbar.php'; ?>

<!-- Project Details Section -->
<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <img alt="project image" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="https://dummyimage.com/720x600">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest">PROJECT CATEGORY</h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"><?php echo htmlspecialchars($project['title']); ?></h1>
        <div class="flex mb-4">
          <span class="flex items-center">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l2.09 6.26L18 9.27l-5 3.64L13.09 21 12 16.54 10.91 21 7 12.91l-5-3.64 3.91-.01L12 2z"></path>
            </svg>
            <span class="text-gray-600 ml-3">4 Reviews</span>
          </span>
          <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2.01L8 7.99v8.02l10 5.99 10-5.99V7.99l-10-5.98zM12 15.5v-7l-4 2.5v7l4-2.5zm10 2.5l-10 6V9l10-6v15z"></path>
              </svg>
            </a>
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M16 7.01V11H8V7.01h8M3 18v-5h2v5h14v-5h2v5c0 1.11-.9 2-2 2H5c-1.1 0-2-.89-2-2zm18-10h-5V3H8v5H3l10 9 10-9z"></path>
              </svg>
            </a>
          </span>
        </div>
        <p class="leading-relaxed"><?php echo nl2br(htmlspecialchars($project['description'])); ?></p>
        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
          <div class="flex">
            <span class="mr-3">Color</span>
            <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
            <button class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
            <button class="border-2 border-gray-300 ml-1 bg-indigo-500 rounded-full w-6 h-6 focus:outline-none"></button>
          </div>
          <div class="flex ml-6 items-center">
            <span class="mr-3">Size</span>
            <div class="relative">
              <select class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                <option>SM</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
              </select>
              <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"></path>
                </svg>
              </span>
            </div>
          </div>
        </div>
        <div class="flex">
          <span class="title-font font-medium text-2xl text-gray-900">$58.00</span>
          <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
          <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M20.84 4.61A5.5 5.5 0 0012 4.58 5.5 5.5 0 003.16 4.61l1.58 1.57A3.5 3.5 0 0112 3.9a3.5 3.5 0 017.26 2.27l1.58 1.58a5.5 5.5 0 000-7.84 5.5 5.5 0 00-7.84 0L12 1.41l-1.41 1.41a5.5 5.5 0 00-7.84 7.84l1.58 1.58A5.5 5.5 0 0012 18.58a5.5 5.5 0 007.84 0 5.5 5.5 0 00-7.84-7.84l-1.41 1.41L12 13.41l1.41-1.41a3.5 3.5 0 000-4.95z"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<?php include './Components/Footer.php'; ?>

</body>
</html>
<!--change my code  -->
