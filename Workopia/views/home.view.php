<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../public/css/style.css" />
    <title>Workopia</title>
  </head>

  <body class="bg-gray-100">
    <!-- Nav -->
    <header class="bg-blue-900 text-white p-4">
      <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
          <a href="index.html">FotoGraphy</a>
        </h1>
        <nav class="space-x-4">
          <a href="login.html" class="text-white hover:underline">Login</a>
          <a href="register.html" class="text-white hover:underline">Register</a>
          <a
            href="post-job.html"
            class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300">
            <i class="fa fa-edit"></i> Post a Request</a>
        </nav>
      </div>
    </header>

    <!-- Showcase -->
    <section class="showcase relative bg-cover bg-center bg-no-repeat h-72 flex items-center">
      <div class="overlay"></div>
      <div class="container mx-auto text-center z-10">
        <h2 class="text-4xl text-white font-bold mb-4">We Don't Make Pictures, We Make Memories</h2>
        <form class="mb-4 block mx-5 md:mx-auto">
          <input
            type="text"
            name="keywords"
            placeholder="Keywords"
            class="w-full md:w-auto mb-2 px-4 py-2 focus:outline-none"/>
          <input
            type="text"
            name="location"
            placeholder="Location"
            class="w-full md:w-auto mb-2 px-4 py-2 focus:outline-none"/>
          <button
            class="w-full md:w-auto bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 focus:outline-none">
          <i class="fa fa-search"></i> Search
          </button>
        </form>
      </div>
    </section>

    <!-- Top Banner -->
    <section class="bg-blue-900 text-white py-6 text-center">
      <div class="container mx-auto">
        <h2 class="text-3xl font-semibold">See Our List Of Offers</h2>
        <p class="text-lg mt-2">
          Discover which works best for you.
        </p>
      </div>
    </section>

    <!-- FotoGraphy Pricing -->
    <section>
      <div class="container mx-auto p-4 mt-4">
        <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">Recent Work</div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

          <!-- FG 1: WEDDING SHOOT -->
          <div class="rounded-lg shadow-md bg-white">
            <div class="p-4">
              <h2 class="text-xl font-semibold">Wedding Shoot (Outdoors / Gardens)</h2>
              <p class="text-gray-700 text-lg mt-2">
                Two women had a beautiful wedding by the Gardens in Cape Town.
              </p>
              <ul class="my-4 bg-gray-100 p-4 rounded">
                <li class="mb-2"><strong>Price:</strong> R3,000</li>
                <li class="mb-2">
                  <strong>Location:</strong> Cape Town, Gardens
                  <span
                    class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Local</span>
                </li>

                <li class="mb-2">
                  <strong>Tags:</strong> <span>Lifestyle Portraits</span>,
                  <span>Close-Up Shots</span>
                </li>
              </ul>
              <a href="details.html"
                class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
                Details
              </a>
            </div>
          </div>

          <!-- FG Listing 2: PRIVATE SHOOT -->
          <div class="rounded-lg shadow-md bg-white">
            <div class="p-4">
              <h2 class="text-xl font-semibold">Private Shoot (Outdoor / Park)</h2>
              <p class="text-gray-700 text-lg mt-2">
                A young man requested our services to get some amazing shots to prepare his CV for work purposes.
              </p>
              <ul class="my-4 bg-gray-100 p-4 rounded">
                <li class="mb-2"><strong>Price:</strong> R600</li>
                <li class="mb-2">
                  <strong>Location:</strong> Kensington
                  <span
                    class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2"
                    >Local</span>
                </li>

                <li class="mb-2">
                  <strong>Tags:</strong> <span>Far-Shots</span>, <span>Portrait Shots</span>,
                  <span>Close-Up Shots</span>
                </li>
              </ul>
              <a href="details.html"
                class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
                Details
              </a>
            </div>
          </div>

          <!-- FG Listing 3: BIRTHDAY SHOOT -->
          <div class="rounded-lg shadow-md bg-white">
            <div class="p-4">
              <h2 class="text-xl font-semibold">Birthday Shoot (Indoor / Hill)</h2>
              <p class="text-gray-700 text-lg mt-2">
                Ally is having her 19th birthday and we're requested to capture the memory.
              </p>
              <ul class="my-4 bg-gray-100 p-4 rounded">
                <li class="mb-2"><strong>Price:</strong> R800</li>
                <li class="mb-2">
                  <strong>Location:</strong> Table View
                  <span
                    class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Local</span>
                </li>

                <li class="mb-2">
                  <strong>Tags:</strong> <span>Landscape</span>, <span>Close-Up Shot</span>,
                  <span>Portrait Shot</span>
                </li>
              </ul>
              <a href="details.html"
                class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
                Details
              </a>
            </div>
          </div>

          <!-- FG Listing 4: PRIVATE SHOOT -->
          <div class="rounded-lg shadow-md bg-white">
            <div class="p-4">
              <h2 class="text-xl font-semibold">Private Shoot (Indoor / Studio)</h2>
              <p class="text-gray-700 text-lg mt-2">
                Group of friends wanted our services, fashionably dressing through a 2 day shoot.
              </p>
              <ul class="my-4 bg-gray-100 p-4 rounded">
                <li class="mb-2"><strong>Price:</strong> R1000 (for 2 days)</li>
                <li class="mb-2">
                  <strong>Location:</strong> Observatory
                  <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Remote</span>
                </li>
                <li class="mb-2">
                  <strong>Tags:</strong> <span>Close-Up Shots</span>,
                  <span>Portrait Shots</span>
                </li>
              </ul>
              <a href="details.html"
                class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
                Details
              </a>
            </div>
          </div>
        </div>

        <a href="listings.html" class="block text-xl text-center">
          <i class="fa fa-arrow-alt-circle-right"></i>
          Show All Jobs
        </a>
      </section>

       <!-- Bottom Banner -->
      <section class="container mx-auto my-6">
      <div
        class="bg-blue-800 text-white rounded p-4 flex items-center justify-between">
        <div>
          <h2 class="text-xl font-semibold">Looking to hire us?</h2>
          <p class="text-gray-200 text-lg mt-2">
            Post a request and we'll be let you konw our other rates and open time.
          </p>
        </div>
        <a href="post-job.html" class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300">
          <i class="fa fa-edit"></i> Apply
        </a>
      </div>
    </section>
     
  </body>
</html>
