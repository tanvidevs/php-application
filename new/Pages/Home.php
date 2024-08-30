<?php
// Database connection
include './Components/Func/dbcon.php';

// Fetch all blog posts instead of just one
$sql = "SELECT * FROM project "; // Use the correct column name for ordering
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $project = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $project = []; // Initialize as empty array if no posts found
}


$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
    <!-- Slick Carousel Theme -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>
    <link rel="stylesheet" href="../Assets/Styles/Banner.css">

    <style>
      .scroll-container {
      display: flex;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
    }
    .scroll-item {
      flex: 0 0 auto;
      scroll-snap-align: center;
    }

    .testimonial-slider {
    display: flex;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none; /* Firefox */
  }
  .testimonial-slider::-webkit-scrollbar {
    display: none; /* Safari and Chrome */
  }
  .testimonial-slide {
    flex-shrink: 0;
    width: 100%;
    max-width: 300px;
  }

      /* Ensure the parent container enables horizontal scrolling */
      .horizontal-scroll {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
    }

    .horizontal-scroll::-webkit-scrollbar {
    height: 10px; /* Adjust the height for horizontal scrollbar */
    }

    .horizontal-scroll::-webkit-scrollbar-thumb {
        background-image: linear-gradient(to right, #9732E3,#E52F87);
        /* background-color: #4F46E5; */
    border-radius: 6px;
    }

    .horizontal-scroll::-webkit-scrollbar-track {
    background: #c5c2ff;
    border-radius: 6px;
    }

    .item {
    flex: 0 0 auto; /* Prevent the items from shrinking */
    scroll-snap-align: start; /* Align items at the start of the container */
    margin-right: 16px; /* Optional: Add spacing between items */
    }

    .item:last-child {
    margin-right: 0; /* Remove right margin from the last item */
    }

    </style>
</head>
<body>

<?php include './Components/Navbar.php'; ?>

<div class="container mx-auto p-4 mt-24">
    <!-- Mobile Slider -->
    <div class="slider mobile-slider block md:hidden">
        <div>
            <img src="https://sqftinfra.com/Assets/Images/Desktop_Banner/bg-1.png" alt="Mobile Image 1" class="w-full rounded-md">
        </div>
        <div>
            <img src="https://sqftinfra.com/Assets/Images/Desktop_Banner/bg-3.png" class="w-full rounded-md">
        </div>
        <div>
            <img src="https://sqftinfra.com/Assets/Images/Desktop_Banner/bg-2.png" class="w-full rounded-md">
        </div>
    </div>
    <!-- Desktop Slider -->
    <div class="slider desktop-slider hidden md:block">
        <div>
            <img src="https://sqftinfra.com/Assets/Images/Desktop_Banner/bg-1.png" class="w-full rounded-md">
        </div>
        <div>
            <img src="https://sqftinfra.com/Assets/Images/Desktop_Banner/bg-3.png" class="w-full rounded-md">
        </div>
        <div>
            <img src="https://sqftinfra.com/Assets/Images/Desktop_Banner/bg-2.png" class="w-full rounded-md">
        </div>
    </div>
</div>

<!-- About section -->
<div class="container mx-auto p-4 mt-10">
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-4xl font-bold mb-4">About Us</h2>
        <p class="text-lg text-gray-700 mb-6">
            <?php
                // PHP dynamic content
                $aboutText = "We are a leading company dedicated to providing top-notch services and products to our customers. Our mission is to innovate and excel in our industry, ensuring the highest level of customer satisfaction.";
                echo $aboutText;
            ?>
        </p>
        <div class="flex items-center">
            <img src="https://sqftinfra.com/Assets/Images/General/about_1.png" alt="About Us" class="w-1/3 rounded-lg shadow-md mr-8">
            <div>
                <h3 class="text-2xl font-semibold mb-2">Our Mission</h3>
                <p class="text-lg text-gray-700">
                    <?php
                        // PHP dynamic content
                        $missionText = "Our mission is to drive progress and make a positive impact in the world through our innovative solutions and services.";
                        echo $missionText;
                    ?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="flex items-center justify-center bg-gradient-to-r from-purple-600 to-pink-600">
        <div class="text-center bg-tramsparent text-white pt-10 pb-20">
            <h2 class="text-3xl font-bold mb-8">Mapping Our Journey</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white text-gray-900 p-8 rounded-lg shadow-md">
                    <p class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 text-white text-transparent bg-clip-text">1.5+</p>
                    <p>Years Of Experience</p>
                </div>
                <div class="bg-white text-gray-900 p-8 rounded-lg shadow-md">
                    <p class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 text-white text-transparent bg-clip-text">600+</p>
                    <p>Happy Families</p>
                </div>
                <div class="bg-white text-gray-900 p-8 rounded-lg shadow-md">
                    <p class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 text-white text-transparent bg-clip-text">4+</p>
                    <p>Ongoing Projects</p>
                </div>
                <div class="bg-white text-gray-900 p-8 rounded-lg shadow-md">
                    <p class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 text-white text-transparent bg-clip-text">100%</p>
                    <p>Happiness Guaranteed</p>
                </div>
            </div>
        </div>
    </div>

<section class="text-gray-600 body-font mr-0 md:mr-36 ml-0 md:ml-36">
<h2 class="text-center mt-20 text-5xl text-gray-900 font-extrabold leading-none">Why Choose  <span class='bg-gradient-to-r from-purple-600 to-pink-600 hover:bg-gradient-to-r hover:from-purple-900 hover:to-pink-900 text-white text-transparent bg-clip-text'>Us</span></h2>
  <div class="container px-5 py-10 md:py-20 mx-auto">
    
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6 p-4">
      <div class="p-10 md:w-1/3 flex flex-col text-center items-center hover:border-2  hover:rounded-md  hover:border-indigo-500 hover:shadow-2xl">
        <div class="w-20 h-20 inline-flex items-center justify-center text-indigo-500 mb-5 flex-shrink-0">
          <img src="../Assets/Images/Icons/Simplicity.png" alt="">
        </div>
        <divmass="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Simplicity</h2>
          <p class="leading-relaxed text-base">We offer a wide range of services to assist you during the purchase of your home. Simply put, we assure your home buying process is hassle-free.</p>
          
        </divmass=>
      </div>
      <div class="p-10 md:w-1/3 flex flex-col text-center items-center hover:border-2  hover:rounded-md  hover:border-indigo-500 hover:shadow-2xl">
      <div class="w-20 h-20 inline-flex items-center justify-center text-indigo-500 mb-5 flex-shrink-0">
          <img src="../Assets/Images/Icons/Luxury.png" alt="">
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Luxury</h2>
          <p class="leading-relaxed text-base">The luxury flats in Nagpur for sale at one of Engineers Horizon’s projects comes embellished with state-of-the design and finish.</p>
        </div>
      </div>
      <div class="p-10 md:w-1/3 flex flex-col text-center items-center hover:border-2  hover:rounded-md  hover:border-indigo-500 hover:shadow-2xl">
      <div class="w-20 h-20 inline-flex items-center justify-center text-indigo-500 mb-5 flex-shrink-0">
          <img src="../Assets/Images/Icons/Affordable_Rates.png" alt="">
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Affordable Rates</h2>
          <p class="leading-relaxed text-base">We offer you the opportunity to buy a luxury and spacious apartment in the heart of Pune without breaking the bank.</p>
        </div>
      </div>
      <div class="p-10 md:w-1/3 flex flex-col text-center items-center hover:border-2  hover:rounded-md  hover:border-indigo-500 hover:shadow-2xl">
      <div class="w-20 h-20 inline-flex items-center justify-center text-indigo-500 mb-5 flex-shrink-0">
          <img src="../Assets/Images/Icons/Distinguished_Architecture.png" alt="">
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Distinguished Architecture</h2>
          <p class="leading-relaxed text-base">We offer homes designed meticulously by seasoned architects and engineers using the most advanced technologies and scientific methodologies.</p>
          
        </div>
      </div>
      <div class="p-10 md:w-1/3 flex flex-col text-center items-center hover:border-2  hover:rounded-md  hover:border-indigo-500 hover:shadow-2xl">
      <div class="w-20 h-20 inline-flex items-center justify-center text-indigo-500 mb-5 flex-shrink-0">
          <img src="../Assets/Images/Icons/Community_Living.png" alt="">
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Community Living</h2>
          <p class="leading-relaxed text-base">We’ve constructed residential projects in some of Pune’s most popular neighborhoods to house a community of welcoming, like-minded residents.</p>
          
        </div>
      </div><div class="p-10 md:w-1/3 flex flex-col text-center items-center hover:border-2  hover:rounded-md  hover:border-indigo-500 hover:shadow-2xl">
      <div class="w-20 h-20 inline-flex items-center justify-center text-indigo-500 mb-5 flex-shrink-0">
          <img src="../Assets/Images/Icons/Location.png" alt="">
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Strategic Locations</h2>
          <p class="leading-relaxed text-base">Our residential projects are situated in Prime Locations across Pune, thus offering residents easy access to hospitals, schools, shopping malls, etc.</p>
        </div>
      </div>
    </div>
    <!-- <div class="mt-10 flex justify-center">
        <button class="inline-flex bg-gradient-to-r from-purple-600 to-pink-600 hover:bg-gradient-to-r hover:from-purple-900 hover:to-pink-900 text-white  border-0 py-2 px-6 focus:outline-none rounded text-lg">Know More</button>
      </div> -->
  </div>
</section>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <?php foreach ($project as $project): ?>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1"> </h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><?php echo $project['title']; ?></h1>
            <p class="leading-relaxed mb-3"><?php echo $project['desp']; ?></p>
            <div class="flex items-center flex-wrap ">
              <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href=" ">Learn More
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
              <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
              </span>
              <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- testonimanal -->
<section class="text-gray-600 body-font mr-0 md:mr-36 ml-0 md:ml-36 -mt-20">
  <div class="container px-5 py-24 mx-auto">
  <h2 class="text-center mb-10 text-5xl text-gray-900 font-extrabold">Our <span class='bg-gradient-to-r from-purple-600 to-pink-600 text-white text-transparent bg-clip-text'>Reviews</span></h2>
    <div class="flex overflow-x-auto space-x-4 pb-10">
      <div class="flex-shrink-0 w-full md:w-1/2">
        <div class="h-full bg-gray-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">SQFT INFRA made my dream of owning a property in Nagpur a reality. Their team guided me through every step, ensuring a smooth and transparent process. Highly recommend their services for anyone looking for trustworthy real estate advice.</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="../Assets/Images/Clients/1.jfif" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Rajesh Sharma</span>
              <span class="text-gray-500 text-sm">Customer</span>
            </span>
          </a>
        </div>
      </div>
      <div class="flex-shrink-0 w-full md:w-1/2">
        <div class="h-full bg-gray-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">The professionalism and dedication of SQFT INFRA are unparalleled. They helped me find the perfect plot and handled all the paperwork seamlessly. Their commitment to customer satisfaction is commendable.</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="../Assets/Images/Clients/4.png" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Priya Mehta</span>
              <span class="text-gray-500 text-sm">Customer</span>
            </span>
          </a>
        </div>
      </div>
      <div class="flex-shrink-0 w-full md:w-1/2">
        <div class="h-full bg-gray-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">Buying property in Nagpur seemed daunting, but SQFT INFRA made it effortless. Their extensive knowledge and expertise in the local market gave me confidence. I appreciate their honesty and integrity in all dealings.</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="../Assets/Images/Clients/3.jfif" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Amit Verma</span>
              <span class="text-gray-500 text-sm">Customer</span>
            </span>
          </a>
        </div>
      </div>
      <div class="flex-shrink-0 w-full md:w-1/2">
        <div class="h-full bg-gray-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">मेरी रियल एस्टेट जरूरतों के लिए SQFT INFRA को चुनना सबसे अच्छा निर्णय था। उनकी टीम ज्ञानवान, उत्तरदायी और अपने ग्राहकों की वास्तव में परवाह करती है। उनकी उत्कृष्ट सेवा के लिए मैं आभारी हूँ और उनकी अत्यधिक सिफारिश करता हूँ।</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="../Assets/Images/Clients/2.jfif" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Ravi Patil</span>
              <span class="text-gray-500 text-sm">Customer</span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- footer -->
<?php include './Components/Footer.php'; ?>

<!-- Include jQuery and Slick Carousel JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        // Initialize the mobile slider
        $('.mobile-slider').slick({
            dots: true,             // Show dots for navigation
            infinite: true,         // Infinite scrolling
            speed: 300,             // Animation speed
            slidesToShow: 1,        // Show one slide at a time
            adaptiveHeight: true,   // Adjust height to the current slide
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            prevArrow: '<button type="button" class="slick-prev">Prev</button>'
        });

        // Initialize the desktop slider
        $('.desktop-slider').slick({
            dots: true,             // Show dots for navigation
            infinite: true,         // Infinite scrolling
            speed: 300,             // Animation speed
            slidesToShow: 1,        // Show one slide at a time
            adaptiveHeight: true,   // Adjust height to the current slide
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            prevArrow: '<button type="button" class="slick-prev">Prev</button>'
        });
    });
</script>
<?php include './Components/Whatapp.php' ?>

</body>
</html>
