 <div>
     <div>
         <h1 class="text-2xl font-semibold text-gray-600">Step 1</h1>
     </div>
     <div class="mb-2">
         <div>
             <label wire:key="first_choice-12344"
                 class="block font-medium text-gray-700 sm:mt-px sm:pt-2">
                 First Choice Course : <span class="font-semibold">{{ $first_choice }}</span>
             </label>
             <label wire:key="second_choice-12344"
                 class="block font-medium text-gray-700 sm:mt-px sm:pt-2">
                 Second Choice Course : <span class="font-semibold">{{ $second_choice }}</span>
             </label>
         </div>
         <div class="pb-2 mt-2 space-y-2 border-b border-gray-300">
             <div class="relative">
                 <div class="absolute inset-0 flex items-center"
                     aria-hidden="true">
                     <div class="w-full border-t border-gray-300"></div>
                 </div>
                 <div class="relative flex justify-start">
                     <span class="pr-2 text-gray-500 bg-white"> List of Programs </span>
                 </div>
             </div>
             <div>
                 @foreach ($campuses as $key => $campus)
                     <div x-data="{isOpen: false}"
                         wire:key="campus-{{ $key }}"
                         class="pb-2 border border-gray-200">
                         <div class="flex p-2 space-x-2 bg-gray-100">
                             <button type="button"
                                 x-on:click="isOpen=!isOpen"> <svg xmlns="http://www.w3.org/2000/svg"
                                     x-bind:class="{ 'rotate-0 duration-300': !isOpen, 'rotate-90 duration-300': isOpen }"
                                     class="w-6 h-6"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                     <path stroke-linecap="round"
                                         stroke-linejoin="round"
                                         stroke-width="2"
                                         d="M9 5l7 7-7 7" />
                                 </svg>
                             </button>
                             <span>{{ $campus->name }}</span>
                         </div>
                         <div x-cloak
                             x-show="isOpen"
                             x-collapse
                             class="px-2 mt-2 space-y-3">
                             @foreach ($campus->programs as $key => $program)
                                 <div wire:key="program-{{ $key }}-{{ $program->id }}"
                                     class="relative flex items-start">
                                     <div class="flex items-center h-5">
                                         <button wire:click.prevent="setChoice('{{ $program->name }}')"
                                             wire:key="button-{{ $key }}-select">
                                             <svg xmlns="http://www.w3.org/2000/svg"
                                                 class="w-6 h-6 {{ $program->name == $first_choice || $program->name == $second_choice ? 'text-white fill-green-600' : '' }} "
                                                 fill="none"
                                                 viewBox="0 0 24 24"
                                                 stroke="currentColor">
                                                 <path stroke-linecap="round"
                                                     stroke-linejoin="round"
                                                     stroke-width="2"
                                                     d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                             </svg>
                                         </button>
                                     </div>
                                     <div class="ml-3 text-sm">
                                         <label for="comments"
                                             class="font-medium text-gray-700">{{ $program->name }}</label>
                                     </div>
                                 </div>
                             @endforeach

                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
     </div>
     <div x-on:next-2.window="step='2'"
         class="flex justify-end mt-5">
         <button wire:click="updateProgramChoice"
             class="px-4 py-2 text-sm font-semibold text-white bg-blue-600 border border-blue-700 rounded-lg">
             Next
         </button>
     </div>
 </div>
