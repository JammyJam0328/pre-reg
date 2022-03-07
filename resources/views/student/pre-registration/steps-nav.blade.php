 <nav aria-label="Progress">
     <ol role="list"
         class="border border-gray-300 divide-y divide-gray-300 rounded-md md:flex md:divide-y-0">
         <li class="relative md:flex-1 md:flex">
             <!-- Completed Step -->
             <a href="#"
                 class="flex items-center w-full group">
                 <span class="flex items-center px-6 py-4 text-sm font-medium">
                     @if ($this->isStepOneFilled())
                         <span
                             class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full group-hover:bg-indigo-800">
                             <!-- Heroicon name: solid/check -->
                             <svg class="w-6 h-6 text-white"
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20"
                                 fill="currentColor"
                                 aria-hidden="true">
                                 <path fill-rule="evenodd"
                                     d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                     clip-rule="evenodd" />
                             </svg>
                         </span>
                     @else
                         <span
                             class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-gray-300 rounded-full group-hover:border-gray-400">
                             <span class="text-gray-500 group-hover:text-gray-900">01</span>
                         </span>
                     @endif
                     <span x-bind:class="step=='1' ? 'text-indigo-700':'text-gray-900'"
                         class="ml-4 text-sm font-medium ">Program Choice</span>
                 </span>
             </a>

             <!-- Arrow separator for lg screens and up -->
             <div class="absolute top-0 right-0 hidden w-5 h-full md:block"
                 aria-hidden="true">
                 <svg class="w-full h-full text-gray-300"
                     viewBox="0 0 22 80"
                     fill="none"
                     preserveAspectRatio="none">
                     <path d="M0 -2L20 40L0 82"
                         vector-effect="non-scaling-stroke"
                         stroke="currentcolor"
                         stroke-linejoin="round" />
                 </svg>
             </div>
         </li>

         <li class="relative md:flex-1 md:flex">
             <!-- Current Step -->
             <a href="#"
                 class="flex items-center px-6 py-4 text-sm font-medium"
                 aria-current="step">
                 @if ($this->isStepTwoFilled())
                     <span
                         class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full group-hover:bg-indigo-800">
                         <svg class="w-6 h-6 text-white"
                             xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20"
                             fill="currentColor"
                             aria-hidden="true">
                             <path fill-rule="evenodd"
                                 d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                 clip-rule="evenodd" />
                         </svg>
                     </span>
                 @else
                     <span
                         class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-gray-300 rounded-full group-hover:border-gray-400">
                         <span class="text-gray-500 group-hover:text-gray-900">02</span>
                     </span>
                 @endif
                 <span x-bind:class="step=='2' ? 'text-indigo-700':'text-gray-900'"
                     class="ml-4 text-sm font-medium ">Personal Information</span>
             </a>

             <!-- Arrow separator for lg screens and up -->
             <div class="absolute top-0 right-0 hidden w-5 h-full md:block"
                 aria-hidden="true">
                 <svg class="w-full h-full text-gray-300"
                     viewBox="0 0 22 80"
                     fill="none"
                     preserveAspectRatio="none">
                     <path d="M0 -2L20 40L0 82"
                         vector-effect="non-scaling-stroke"
                         stroke="currentcolor"
                         stroke-linejoin="round" />
                 </svg>
             </div>
         </li>

         <li class="relative md:flex-1 md:flex">
             <!-- Upcoming Step -->
             <a href="#"
                 class="flex items-center px-6 py-4 text-sm font-medium">
                 @if ($this->isStepThreeFilled())
                     <span
                         class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full group-hover:bg-indigo-800">
                         <svg class="w-6 h-6 text-white"
                             xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20"
                             fill="currentColor"
                             aria-hidden="true">
                             <path fill-rule="evenodd"
                                 d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                 clip-rule="evenodd" />
                         </svg>
                     </span>
                 @else
                     <span
                         class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-gray-300 rounded-full group-hover:border-gray-400">
                         <span class="text-gray-500 group-hover:text-gray-900">03</span>
                     </span>
                 @endif
                 <span x-bind:class="step=='3' ? 'text-indigo-700':'text-gray-900'"
                     class="ml-4 text-sm font-medium ">Requirements Uploading</span>
             </a>
         </li>
     </ol>
 </nav>
