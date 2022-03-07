   <nav class="sticky top-0 z-50 bg-white">
       <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
           <div class="flex justify-between h-16">
               <div class="flex">
                   <div class="flex items-center flex-shrink-0">

                       <img class="w-auto h-8 "
                           src="{{ asset('images/sksu1.png') }}"
                           alt="sksu logo">
                   </div>
                   <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
                       <x-user.shared.link :to="route('student.home')"
                           name="Home"
                           :active="Request::routeIs('student.home')" />
                       <x-user.shared.link :to="route('student.my-application')"
                           name="My Applications"
                           :active="Request::routeIs('student.my-application')" />
                       {{-- <x-user.shared.link :to="route('student.schedules')"
                           name="Schedules"
                           :active="Request::routeIs('student.schedules')" /> --}}
                       <x-user.shared.link :to="route('student.notifications')"
                           name="Notifications"
                           :active="Request::routeIs('student.notifications')" />
                   </div>
               </div>
               <div class="hidden sm:ml-6 sm:flex sm:items-center">
                   <!-- Authentication -->
                   <form method="POST"
                       action="{{ route('logout') }}">
                       @csrf

                       <x-jet-dropdown-link href="{{ route('logout') }}"
                           class="flex items-center p-1 space-x-2 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                           {{ __('Log out') }}
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
                       </x-jet-dropdown-link>
                   </form>

               </div>
               <div class="flex items-center -mr-2 sm:hidden">
                   <button x-on:click="mobileNav=!mobileNav"
                       type="button"
                       class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                       aria-controls="mobile-menu"
                       aria-expanded="false">
                       <span class="sr-only">Open main menu</span>
                       <svg x-bind:class="mobileNav ? 'hidden ':'block' "
                           class="block w-6 h-6"
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

                       <svg x-bind:class="mobileNav ? 'block ':' hidden' "
                           class="w-6 h-6 "
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
       <div x-show="mobileNav"
           class="sm:hidden"
           id="mobile-menu">
           <div class="pt-2 pb-3 space-y-1">
               <a href="#"
                   class="block py-2 pl-3 pr-4 text-base font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">Home</a>

               <a href="#"
                   class="block py-2 pl-3 pr-4 text-base font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">My
                   Application</a>

               <a href="#"
                   class="block py-2 pl-3 pr-4 text-base font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">Schedules</a>

               <a href="#"
                   class="block py-2 pl-3 pr-4 text-base font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">Notification</a>
               <a href="#"
                   class="block py-2 pl-3 pr-4 text-base font-medium text-gray-600 border-l-4 border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">Log
                   out</a>
           </div>
       </div>
   </nav>
