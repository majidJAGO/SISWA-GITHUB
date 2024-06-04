<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

</head>
<body class="bg-blue-50">

<div class="font-semibold mx-auto">

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
            <button type="button" data-dropdown-toggle="masbroyo" data-dropdown-trigger="hover" class="text-white bg-blue-400 hover:bg-blue-300 font-medium rounded-full px-2 py-2 flex">
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

    <main class="grid grid-cols-3 grid-rows-5 flex mx-10 my-8">

                <div class="flex justify-center py-3">
                    <div class="block p-6 bg-white shadow-lg border border-gray-200 rounded max-w border-l-[8px] border-l-orange-400 w-72 cursor-pointer">
                        <div class="flex flex-row-reverse justify-between">
                            <span class="bg-orange-300 px-4 py-4 rounded-full my-5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z" clip-rule="evenodd" />
                                    <path d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                                </svg>                                              
                            </span>
                            <p class="flex items center mr-5 py-5">Pekerja Sosial</p>
                        </div>
                    </div>
                </div>

                <div class="flex py-3">
                    <div class="block p-6 bg-white shadow-lg border border-gray-200 rounded max-w border-l-[8px] border-l-sky-400 w-72 cursor-pointer">
                        <div class="flex flex-row-reverse justify-between">
                            <span class="bg-sky-300 px-4 py-4 rounded-full my-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                                </svg>                                                                        
                            </span>
                            <p class="flex items center mr-5 py-3">Teknik Jaringan Komputer dan Telekomunikasi</p>
                        </div>
                    </div>
                </div>
                
                {{-- Greeting --}}
                <div class="my-2 mr-10 col-1 row-span-2 flex justify-center items-center rounded bg-slate-400 shadow-md">
                    <img src="">
                    <h1 class=" text-white">BRO</h1>
                </div>

                <div class="flex justify-center  py-3">
                    <div class="block p-6 bg-white shadow-lg border border-gray-200 rounded max-w border-l-[8px] border-l-yellow-300 w-72 cursor-pointer">
                        <div class="flex flex-row-reverse justify-between">
                            <span class="bg-yellow-200 px-4 py-4 rounded-full my-5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path d="M12 9a3.75 3.75 0 100 7.5A3.75 3.75 0 0012 9z" />
                                    <path fill-rule="evenodd" d="M9.344 3.071a49.52 49.52 0 015.312 0c.967.052 1.83.585 2.332 1.39l.821 1.317c.24.383.645.643 1.11.71.386.054.77.113 1.152.177 1.432.239 2.429 1.493 2.429 2.909V18a3 3 0 01-3 3h-15a3 3 0 01-3-3V9.574c0-1.416.997-2.67 2.429-2.909.382-.064.766-.123 1.151-.178a1.56 1.56 0 001.11-.71l.822-1.315a2.942 2.942 0 012.332-1.39zM6.75 12.75a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0zm12-1.5a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                                </svg>                                                                            
                            </span>
                            <p class="flex items center mr-5 py-3">Desain Komunikasi dan Visual</p>
                        </div>
                    </div>
                </div>
        
                <div class="flex py-3">
                    <div class="block p-6 bg-white shadow-lg border border-gray-200 rounded max-w border-l-[8px] border-l-red-600 w-72 cursor-pointer">
                        <div class="flex flex-row-reverse justify-between">
                            <span class="bg-red-400 px-4 py-4 rounded-full my-5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>                                                                            
                            </span>
                            <p class="flex items center mr-5 py-5">Animasi</p>
                        </div>
                    </div>
                </div>

                <div class="flex  justify-center py-3">
                    <div class="block p-6 bg-white shadow-lg border border-gray-200 rounded max-w border-l-[8px] border-l-gray-400 w-72 cursor-pointer">
                        <div class="flex flex-row-reverse justify-between">
                            <span class="bg-gray-300 px-4 py-4 rounded-full my-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                </svg>                                           
                            </span>
                            <p class="f lex items center mr-5 py-3">Pengembangan Perangkat Lunak dan Gim</p>
                        </div>
                    </div>
                </div>
        
                
                <div class="flex py-3">
                    <div class="block p-6 bg-white shadow-lg border border-gray-200 rounded max-w border-l-[8px] border-l-green-500 w-72 cursor-pointer">
                        <div class="flex flex-row-reverse justify-between">
                            <span class="bg-green-200 px-4 py-4 rounded-full my-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5" />
                                </svg>                      
                            </span>
                            <p class="flex items center mr-5 py-3">Broadcasting dan Film</p>
                        </div>
                    </div>
                </div>
            
                {{-- Kelas 10 & 11 --}}
                <div class="mr-10 col-1 row-span-1 my-5 text-center">
                    <div class="p-4 rounded bg-red-400">
                        <p>KELAS 10</p>
                    </div>
                    <div class="p-4 mt-4 rounded bg-sky-400">
                        <p>KELAS 11</p>
                    </div>
                </div>

                <div class="flex justify-center py-3">
                    <div class="block p-6 bg-white shadow-lg border border-stone-300 rounded max-w border-l-[8px] border-l-stone-400 w-72 cursor-pointer">
                        <div class="flex flex-row-reverse justify-between">
                            <span class="bg-orange-200 px-4 py-4 rounded-full my-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                </svg>                                                                           
                            </span>
                            <p class="flex items center mr-5 py-5">Teknik Kimia Industri</p>
                        </div>
                    </div>
                </div>
        
                <div class="flex py-3">
                    <div class="block p-6 bg-white shadow-lg border border-gray-200 rounded max-w border-l-[8px] border-l-orange-800 w-72 cursor-pointer">
                        <div class="flex flex-row-reverse justify-between">
                            <span class="bg-orange-300 px-4 py-4 rounded-full my-5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path d="M19.006 3.705a.75.75 0 00-.512-1.41L6 6.838V3a.75.75 0 00-.75-.75h-1.5A.75.75 0 003 3v4.93l-1.006.365a.75.75 0 00.512 1.41l16.5-6z" />
                                    <path fill-rule="evenodd" d="M3.019 11.115L18 5.667V9.09l4.006 1.456a.75.75 0 11-.512 1.41l-.494-.18v8.475h.75a.75.75 0 010 1.5H2.25a.75.75 0 010-1.5H3v-9.129l.019-.006zM18 20.25v-9.565l1.5.545v9.02H18zm-9-6a.75.75 0 00-.75.75v4.5c0 .414.336.75.75.75h3a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75H9z" clip-rule="evenodd" />
                                </svg>                                                                            
                            </span>
                            <p class="flex items center mr-5 py-5">Teknik Furnitur</p>
                        </div>
                    </div>
                </div>

                {{-- Kelas 12 & 13 --}}
                <div class="mr-10 col-1 row-span-1 my-5 text-center cursor-pointer">
                    <div class="p-4 rounded bg-red-400">
                        <p>KELAS 12</p>
                    </div>
                    <div class="p-4 mt-4 rounded bg-sky-400">
                        <p>KELAS 13</p>
                    </div>
                </div>
                
        <div id="accordion-collapse" data-accordion="collapse" class="col-span-3 row-span-1 m-6">
            <div id="accordion-collapse-heading">
                    <button type="button" class="flex items-center justify-between w-full p-3 bg-sky-300 font-medium text-left text-gray-800 border border-gray-500 rounded focus:ring-5 focus:ring-yellow-500" data-accordion-target="#accordion-collapse-body" aria-expanded="false" aria-controls="accordion-collapse-body">
                        <span>Nama nama Siswa</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                </div>
                <div id="accordion-collapse-body" class="hidden" aria-labelledby="accordion-collapse-heading">
                    <div class="p-5 font-gray-800 border border-gray-200 bg-sky-200 rounded">
                    <p class="mb-2 text-gray-500">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                    </div>
                </div>
            </div>
        </div>     
    </main>

    



<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>
</html>