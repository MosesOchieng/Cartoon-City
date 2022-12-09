<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Post Job Page</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.4.6/tailwind.min.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!--
This is my attempt to recreate the Job Board Application that was initially developed by Andy Leverenz from Web-Crunch.

https://www.youtube.com/watch?v=tGUMArAW5OE&list=PL01nNIgQ4uxNkDZNMON-TrzDVNIk3cOz4&index=39&t=0s

-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=">
  <title>Job Board</title>
</head>
<body class="bg-gray-400">
  <header class="header">
    <div class="notifications">
      <div class="bg-green-400 text-white px-6 py-2">
        <p>
          Hello there please indicate the service that you would like a Jua Kali artisan to do for you.
        </p>
      </div>
    </div>
    <nav class="flex items-center justify-between flex-wrap px-6" style="height: 65px;">
      <div class="flex items-center flex-shrink-0 text-black mr-6">
        <span class="font-semibold text-xl tracking-tight">Job Board</span>
      </div>
  <!--     <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
          <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
      </div> -->
        <div class="flex items-center h-full">
          <a href="#" class="bg-teal-500 hover:bg-teal-600 text-white py-2 px-4 rounded-full mr-3">
            Post Job
          </a>

          <div class="dropdown relative flex items-center h-full hover:bg-gray-500 px-2 transition">
            <button class="inline-flex items-center h-full">
              <span class="mr-1">Account</span>
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </button>

            <ul class="dropdown-menu absolute bg-white shadow hidden w-32">
              <li><a href="#" class="py-1 px-4 block hover:bg-gray-200 whitespace-no-wrap">Client</a></li>
              <li><a href="#" class="py-1 px-4 block hover:bg-gray-200 whitespace-no-wrap">Log out</a></li>
            </ul>


          </div> <!-- end .dropdown -->
        </div>
      </div>
    </nav>
  </header>

  <main class="main bg-white px-6 md:px-16 py-6">
    <div class="w-full max-w-xl mx-auto">
      <form action="" method="post">
        <h1 class="text-2xl mb-2">Post new job</h1>

        <div class="job-info border-b-2 py-2 mb-5">
          <!--    Title      -->
          <div class="mb-4">
            <label class="block text-gray-700 text-sm mb-2" for="job-title">Title</label>
            <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" type="email" id="job-title" name="job-title" placeholder="job type." autofocus>
          </div>




          <div class="md:flex md:justify-between">
            <!--      Job Type      -->
            <div class="w-full md:w-3/12 mb-4 md:mb-0">
                <label class="block text-gray-700 text-sm mb-2" for="job-type">
                Work area
                </label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-white border border-gray-400 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-gray-500" id="job-type" name="job-type">
                    <option>Plumbing</option>
                    <option>Drivers</option>
                    <option>Electrical repairs</option>
                    <option>Carpentry</option>
                  </select>

                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
            </div>

            <!--     Location       -->
            <div class="w-full md:w-8/12 mb-4 md:mb-0">
              <label for="location" class="block text-gray-700 text-sm mb-2">Location</label>
              <input type="text" class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" id="location" name="location" placeholder="kariobangi">

              <div>
                <label class="text-gray-600 flex items-center" for="remote">
                  <input class="mr-2 leading-tight" type="checkbox" id="remote">
                  <span class="text-sm">Work available from anywhere.</span>
                </label>
              </div>
            </div>
          </div> <!-- end group -->

          <!--    Description      -->
          <div>
            <label for="description" class="block text-gray-700 text-sm mb-2">Job Description</label>
            <textarea name="description" id="description" cols="" rows=""></textarea>
          </div>

          <div class="flex flex-wrap -mx-3">
            <!--     Company       -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
              <label for="company" class="block text-gray-700 text-sm mb-2">Payment </label>
              <input type="text" class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" id="company" name="company" placeholder="Payment range.">
            </div>

            <!--      Company Website      -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
              <label for="company" class="block text-gray-700 text-sm mb-2">Contact Person for the Job.</label>
              <input type="text" class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" id="company" name="company" placeholder="https://www.djangoproject.com/">
            </div>
          </div> <!-- end group -->

          <!--      Company Website      -->
          <div class="mb-4 md:mb-0">
            <label for="company-logo" class="block text-gray-700 text-sm mb-2">Upload you ID</label>
            <input type="file" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-3 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="company-logo" name="company-logo">
          </div>
        </div> <!-- end job-info -->

        <div class="payment mb-6">

          <h4 class="mb-2">Disclaimer</h4>
          <p class="bg-gray-200 py-3 text-center text-sm">
            <span><i class="far fa-credit-card"></i></span>
            All jobs not given out by 30 days  <strong></strong> will be pulled down from the site.
          </p>

        </div>


        <!--     Submit     -->
        <div>
          <button class="bg-teal-500 hover:bg-teal-600 text-white py-2 px-3 rounded" type="submit">Create job</button>
        </div>
      </form>
    </div>
  </main>

  <footer class="footer py-4">
    <p class="text-center text-gray-600 text-xs">
      Plan B
    </p>
  </footer>
</body>
</html>
<!-- partial -->
  <script src='https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js'></script><script  src="./script.js"></script>

</body>
</html>
