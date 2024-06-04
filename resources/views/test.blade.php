<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="font-semibold mx-auto">
  
  <nav class="flex py-4 w-full px-4 justify-between items-center bg-slate-700 text-neutral-500 shadow-lg">

    <!--Deskop-->
    <div class="container mx-auto hidden md:flex flex-wrap justify-between">
      <div class="left-0 flex flex-cols items-center">
      <button type="button" class="flex cursor-not-allowed text-white bg-blue-400 hover:bg-blue-300 font-medium rounded p-2 flex" disabled>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
        </svg> 
      <p class="pl-2 text-white font-semibold">Buku Pelanggaran</p>
      </button>

      <a class="ml-5 text-center text-xl font-bold text-slate-300" href="#">
        E-DISCIPLINE
      </a>
      </div>

      <div class="right-0 flex flex-cols">
        <form class="flex gap-2">
          <div class="relative">
              <div class="absolute left-0 flex items-center pointer-event-none">
              </div>
              <input type="search" id="default-search" class="block-w-full p-3 text-sm text-gray-800 border border-gray-400 rounded bg-gray-100" placeholder="Search name" required>
          </div>
          <div class="right-0">
              <button type="submit" class="p-3 font-medium text-white bg-blue-400 hover:bg-blue-300 rounded">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
              </button>
          </div>
        </form>
        <button type="button" data-dropdown-toggle="masbro" data-dropdown-trigger="hover" class="items-center ml-3 text-white bg-blue-400 hover:bg-blue-300 font-medium rounded-full px-2 py-2 flex">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
        <p class="pl-2 text-white font-semibold">Profile</p> 
        <div id="masbro" class="hidden bg-sky-400 px-5 py-2 rounded">
            <ul>
                <li><a href="#"> Logout </a></li>
            </ul>
        </div>
        </button>
      </div>
    </div>

    <!--mobile-->
    <button class="md:hidden text-white bg-blue-400 hover:bg-blue-500 rounded-lg px-5 py-3" type="button" data-drawer-target="drawer-right" data-drawer-show="drawer-right" data-drawer-placement="right" aria-controls="drawer-right">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>      
    </button>

    <a class="text-center text-xl font-bold text-slate-300 md:hidden" href="#">
      E-DISCIPLINE
    </a>

    <div id="drawer-right" class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-slate-600 w-80" tabindex="-1" aria-labelledby="drawer-right-label">
      <h5 id="drawer-right-label" class="inline-flex items-center mb-4 text-lg font-bold text-gray-100">MENU</h5>

      <form class="flex gap-2">
          <div class="relative">
              <div class="absolute left-0 flex items-center pointer-event-none">
              </div>
              <input type="search" id="default-search" class="block-w-full p-3 text-sm text-gray-800 border border-gray-400 rounded bg-gray-100" placeholder="Search name" required>
          </div>
          <div class="right-0">
              <button type="submit" class="p-3 font-medium text-white bg-blue-400 hover:bg-blue-300 rounded">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
              </button>
          </div>
        </form>

      <button type="button" data-drawer-hide="drawer-right" aria-controls="drawer-right" class="bg-slate-400 hover:bg-slate-500 rounded-sm p-2 absolute top-3 right-3 inline-flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>      
      </button>
      
      <div class="my-3 justify-content-center">
        <button type="button" class="cursor-not-allowed text-white bg-blue-400 hover:bg-blue-300 font-medium rounded p-2 flex" disabled>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
          </svg> 
          <p class="pl-2 text-white font-semibold">Buku Pelanggaran</p>
        </button>

        <div class="py-3">
        <button type="button" data-dropdown-toggle="masbroyo" class="text-white bg-blue-400 hover:bg-blue-300 font-medium rounded-full px-2 py-2 flex">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <p class="pl-2 text-white font-semibold">Profile</p> 
          <div id="masbroyo" class="hidden bg-sky-400 px-5 py-2 rounded">
              <ul>
                  <li><a href="#"> Logout </a></li>
              </ul>
          </div>
        </button>
        </div>
      </div>

    </div>
  </nav>
  

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

</body>
</html>