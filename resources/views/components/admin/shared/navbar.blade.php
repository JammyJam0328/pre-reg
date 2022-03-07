   <nav class="bg-white ">
       <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
           <div class="flex justify-between h-16">
               <div class="flex">
                   <div class="flex items-center flex-shrink-0">
                       <img class="block w-auto h-8 lg:hidden"
                           src="{{ asset('images/sksu1.png') }}"
                           alt="sksu">
                       <img class="hidden w-auto h-8 lg:block"
                           src="{{ asset('images/sksu1.png') }}"
                           alt="sksu">
                   </div>
                   <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
                       <x-user.shared.link :to="route('admin.dashboard')"
                           name="Dashboard"
                           :active="Request::routeIs('admin.dashboard')" />
                       <x-user.shared.link :to="route('admin.applications')"
                           name="Applications"
                           :active="Request::routeIs('admin.applications')" />
                       <x-user.shared.link :to="route('admin.payments')"
                           name="Payments"
                           :active="Request::routeIs('admin.payments')" />
                       <x-user.shared.link :to="route('admin.form-portals')"
                           name="Application Portals"
                           :active="Request::routeIs('admin.form-portals')" />
                   </div>
               </div>
               <div class="hidden space-x-4 sm:ml-6 sm:flex sm:items-center">
                   <div class="flex space-x-2">
                       <svg xmlns="http://www.w3.org/2000/svg"
                           class="w-6 h-6 text-gray-400"
                           fill="none"
                           viewBox="0 0 24 24"
                           stroke="currentColor">
                           <path stroke-linecap="round"
                               stroke-linejoin="round"
                               stroke-width="2"
                               d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                       </svg>
                       <h1 class="text-gray-400">{{ auth()->user()->name }}</h1>

                   </div>
                   <form method="POST"
                       action="{{ route('logout') }}">
                       @csrf

                       <x-jet-dropdown-link href="{{ route('logout') }}"
                           class="flex items-center p-1 space-x-2 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                           <svg xmlns="http://www.w3.org/2000/svg"
                               class="w-6 h-6 ml-1"
                               fill="none"
                               viewBox="0 0 24 24"
                               stroke="currentColor">
                               <path stroke-linecap="round"
                                   stroke-linejoin="round"
                                   stroke-width="2"
                                   d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                           </svg>
                           {{ __('Log out') }}

                       </x-jet-dropdown-link>
                   </form>

               </div>

               <div class="flex items-center -mr-2 sm:hidden">
                   <!-- Mobile menu button -->
                   <button type="button"
                       class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                       aria-controls="mobile-menu"
                       aria-expanded="false">
                       <span class="sr-only">Open main menu</span>
                       <!--
              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
                       <svg class="block w-6 h-6"
                           xmlns="http://www.w3.org/2000/svg"
                           fill="none"
                           viewBox="0 0 24 24"
                           stroke="currentColor"
                           aria-hidden="true">
                           <path stroke-linecap="round"
                               stroke-linejoin="round"
                               stroke-width="2"
                               d="M4 6h16M4 12h16M4 18h16" />
                       </svg>
                       <!--
              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
                       <svg class="hidden w-6 h-6"
                           xmlns="http://www.w3.org/2000/svg"
                           fill="none"
                           viewBox="0 0 24 24"
                           stroke="currentColor"
                           aria-hidden="true">
                           <path stroke-linecap="round"
                               stroke-linejoin="round"
                               stroke-width="2"
                               d="M6 18L18 6M6 6l12 12" />
                       </svg>
                   </button>
               </div>
           </div>
       </div>

       <!-- Mobile menu, show/hide based on menu state. -->
       <div class="sm:hidden"
           id="mobile-menu">
           <div class="pt-2 pb-3 space-y-1">
               <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800" -->
               <a href="#"
                   class="block py-2 pl-3 pr-4 text-base font-medium text-indigo-700 border-l-4 border-indigo-500 bg-indigo-50"
                   aria-current="page">Dashboard</a>

               <a href="#"
                   class="block py-2 pl-3 pr-4 text-base font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">Team</a>

               <a href="#"
                   class="block py-2 pl-3 pr-4 text-base font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">Projects</a>

               <a href="#"
                   class="block py-2 pl-3 pr-4 text-base font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">Calendar</a>
           </div>
           <div class="pt-4 pb-3 border-t border-gray-200">
               <div class="flex items-center px-4">
                   <div class="flex-shrink-0">
                       <img class="w-10 h-10 rounded-full"
                           src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                           alt="">
                   </div>
                   <div class="ml-3">
                       <div class="text-base font-medium text-gray-800">Tom Cook</div>
                       <div class="text-sm font-medium text-gray-500">tom@example.com</div>
                   </div>
                   <button type="button"
                       class="flex-shrink-0 p-1 ml-auto text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                       <span class="sr-only">View notifications</span>
                       <!-- Heroicon name: outline/bell -->
                       <svg class="w-6 h-6"
                           xmlns="http://www.w3.org/2000/svg"
                           fill="none"
                           viewBox="0 0 24 24"
                           stroke="currentColor"
                           aria-hidden="true">
                           <path stroke-linecap="round"
                               stroke-linejoin="round"
                               stroke-width="2"
                               d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                       </svg>
                   </button>
               </div>
               <div class="mt-3 space-y-1">
                   <a href="#"
                       class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">Your
                       Profile</a>

                   <a href="#"
                       class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">Settings</a>

                   <a href="#"
                       class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">Sign
                       out</a>
               </div>
           </div>
       </div>
   </nav>
