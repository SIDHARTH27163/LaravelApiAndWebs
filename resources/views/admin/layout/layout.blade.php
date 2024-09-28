<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Dashboard</title>

    <!-- Fonts -->

    {{-- <link href="{{ asset('public/build/css/app.css') }}" rel="stylesheet" type="text/css" >
    <script type="text/javascript" src="{{ asset('public/build/js/app.js') }}"></script> --}}
    @vite('resources/css/app.css')
    @vite('resources/css/styles.css')
    <!-- Scripts -->

    @vite('resources/js/app.js')
    @vite('resources/js/editor.js')

</head>

<body class="leading-normal tracking-normal " style="font-family: 'Roboto Flex', sans-serif;">



    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm  rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2  text-gray-900  focus:ring-gray-950">
       <span class="sr-only">Open sidebar</span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>

    </button>

    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
       <div class="h-full px-3 py-4 overflow-y-auto  bg-slate-950">
          <ul class="space-y-2 font-medium">

             <li>
                <a href="/admin_dashboard" class="flex items-center p-2  rounded-lg text-white bg-slate-900 ">
                   <svg class="w-8 h-8  transition duration-75 text-gray-400 group-hover: group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                      <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                      <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                   </svg>
                   <span class="ml-3">Dashboard Home</span>
                </a>
             </li>

             <li>
                <a href="/all_users" class="flex items-center p-2  rounded-lg text-white hover:bg-slate-900 ">
                   <svg class="flex-shrink-0 w-5 h-5  transition duration-75 text-gray-400 group-hover: group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                      <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                   </svg>
                   <span class="flex-1 ml-3 whitespace-nowrap">Manage Homepage</span>
                </a>
             </li>
             <li>
                <a href="/admin/manage-categories" class="flex items-center p-2  rounded-lg text-white hover:bg-slate-900 ">
                    <svg class="flex-shrink-0 w-5 h-5  transition duration-75 text-blue-400 group-hover: group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.872 9.687 20 6.56 17.44 4 4 17.44 6.56 20 16.873 9.687Zm0 0-2.56-2.56M6 7v2m0 0v2m0-2H4m2 0h2m7 7v2m0 0v2m0-2h-2m2 0h2M8 4h.01v.01H8V4Zm2 2h.01v.01H10V6Zm2-2h.01v.01H12V4Zm8 8h.01v.01H20V12Zm-2 2h.01v.01H18V14Zm2 2h.01v.01H20V16Z"></path>
                      </svg>
                   <span class="flex-1 ml-3 whitespace-nowrap">Manage Categories</span>
                </a>
             </li>
             <li>
                <button type="button" class="flex items-center w-full p-2  transition duration-75 rounded-lg group  text-white hover:bg-gray-900" aria-controls="dropdown-example_state" data-collapse-toggle="dropdown-example_its">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-sky-300">
      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
    </svg>



                      <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Itservices Management</span>
                      <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <ul id="dropdown-example_its" class="hidden py-2 space-y-2">

                      <li>
                         <a href="/admin/manageitservices" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-900 font-roboto">Manage Services</a>
                      </li>

                      <li>
                         <a href="/admin/managecasestudies" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-900 font-roboto">Manage Case Studies</a>
                      </li>




                </ul>
             </li>
             <li>
                <button type="button" class="flex items-center w-full p-2 transition duration-75 rounded-lg group text-white hover:bg-gray-900" aria-controls="dropdown-footer" data-collapse-toggle="dropdown-footer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-sky-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Footer Management</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-footer" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('footer.edit', 'privacy-policy') }}" class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group text-white hover:bg-gray-900 font-roboto">Manage Privacy Policy</a>
                    </li>
                    <li>
                        <a href="{{ route('footer.edit', 'terms-and-conditions') }}" class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group text-white hover:bg-gray-900 font-roboto">Manage Terms and Conditions</a>
                    </li>
                    <li>
                        <a href="{{ route('footer.edit', 'about-us') }}" class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group text-white hover:bg-gray-900 font-roboto">Manage About Us</a>
                    </li>
                    <li>
                        <a href="{{ route('footer.edit', 'disclaimer') }}" class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group text-white hover:bg-gray-900 font-roboto">Manage Disclaimer</a>
                    </li>
                </ul>
            </li>

             <li>
                <button type="button" class="flex items-center w-full p-2  transition duration-75 rounded-lg group  text-white hover:bg-gray-900" aria-controls="dropdown-example_state" data-collapse-toggle="dropdown-example_it">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-green-400">
                      <path d="M15.75 8.25a.75.75 0 01.75.75c0 1.12-.492 2.126-1.27 2.812a.75.75 0 11-.992-1.124A2.243 2.243 0 0015 9a.75.75 0 01.75-.75z" />
                      <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM4.575 15.6a8.25 8.25 0 009.348 4.425 1.966 1.966 0 00-1.84-1.275.983.983 0 01-.97-.822l-.073-.437c-.094-.565.25-1.11.8-1.267l.99-.282c.427-.123.783-.418.982-.816l.036-.073a1.453 1.453 0 012.328-.377L16.5 15h.628a2.25 2.25 0 011.983 1.186 8.25 8.25 0 00-6.345-12.4c.044.262.18.503.389.676l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.575 15.6z" clip-rule="evenodd" />
                    </svg>





                      <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Places Management</span>
                      <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <ul id="dropdown-example_it" class="hidden py-2 space-y-2">

                      <li>
                         <a href="/admin/managelocations" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-900 font-roboto">Manage Locations</a>
                      </li>

                      <li>
                         <a href="/admin/touristplaces" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-900 font-roboto">Manage Places</a>
                      </li>





                </ul>
             </li>
             <li>
                <button type="button" class="flex items-center w-full p-2  transition duration-75 rounded-lg group  text-white hover:bg-gray-900" aria-controls="dropdown-example_services" data-collapse-toggle="dropdown-example_services">
                   <svg class="flex-shrink-0 w-5 h-5  transition duration-75 text-rose-600 group-hover: group-hover:text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                      <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                   </svg>





                      <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Services Management</span>
                      <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <ul id="dropdown-example_services" class="hidden py-2 space-y-2">

                      <li>
                         <a href="manage_services" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-1 group  text-white hover:bg-gray-900 font-roboto">Manage Services</a>
                      </li>

                      <li>
                         <a href="manage_services_category" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-1 group  text-white hover:bg-gray-900 font-roboto">Manage Services Category</a>
                      </li>





                </ul>
             </li>

             <li>
                <a href="/all_users" class="flex items-center p-2  rounded-lg text-white hover:bg-slate-900 ">
                   <svg class="flex-shrink-0 w-5 h-5  transition duration-75 text-gray-400 group-hover: group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                      <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                   </svg>
                   <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                </a>
             </li>


             <li>
                <a href="/logout" class="flex items-center p-2  rounded-lg text-white hover:bg-slate-900 ">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                      <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                    </svg>

                   <span class="flex-1 ml-1 whitespace-nowrap">Sign Out</span>
                </a>
             </li>
          </ul>
       </div>
    </aside>

    <div class="p-4 sm:ml-64   text-black h-screen overflow-y-auto bg-slate-950 ">
       @yield('content')
    </div>

    <!--  -->

    </body>

</html>
