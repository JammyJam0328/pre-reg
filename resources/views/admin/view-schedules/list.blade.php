 {{-- <div class="flex flex-col">
     <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">

         <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
             <div class="overflow-hidden border border-gray-200 sm:rounded-lg">
                 <table class="min-w-full divide-y divide-gray-200">
                     <thead class="bg-blue-500">
                         <tr>
                             <th scope="col"
                                 class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                 #</th>
                             <th scope="col"
                                 class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                 Date</th>
                             <th scope="col"
                                 class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                 No. of Facilities</th>
                             <th scope="col"
                                 class="px-6 py-3 text-xs font-medium tracking-wider text-right text-white uppercase">
                                 Actions</th>
                         </tr>
                     </thead>
                     <tbody>
                         @forelse ($schedules as $key=>$schedule)
                             <tr class="{{ $key % 2 == 0 ? 'bg-white' : 'bg-gray-50' }}">
                                 <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                     {{ $key + 1 }}</td>
                                 <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                     {{ $schedule->date }}
                                 </td>
                                 <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                     {{ $schedule->examination_facilities_count }}
                                 </td>
                                 <td
                                     class="flex items-center justify-end px-6 py-4 space-x-1 text-sm font-medium text-right whitespace-nowrap">
                                     <button type="button"
                                         class="p-1 text-white bg-blue-600 rounded-md hover:bg-blue-500">
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                             class="w-5 h-5"
                                             viewBox="0 0 20 20"
                                             fill="currentColor">
                                             <path
                                                 d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                         </svg>
                                     </button>
                                     <button type="button"
                                         class="p-1 text-white bg-red-600 rounded-md hover:bg-red-500">
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                             class="w-5 h-5"
                                             viewBox="0 0 20 20"
                                             fill="currentColor">
                                             <path fill-rule="evenodd"
                                                 d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                 clip-rule="evenodd" />
                                         </svg>
                                     </button>
                                 </td>
                             </tr>
                         @empty
                             <td colspan="4"
                                 class="px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                                 No schedules found
                             </td>
                         @endforelse

                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div> --}}
 <div>
     <div class="sm:flex sm:items-center">
         <div class="sm:flex-auto">
             <h1 class="text-xl font-semibold text-gray-900">Schedules</h1>
             <p class="mt-2 text-sm text-gray-700">A list of all schedule of
                 {{ $portal_details->title }}
             </p>
         </div>
         <div class="flex mt-4 space-x-2 sm:mt-0 sm:ml-16">
             <a href="{{ route('admin.form-portals') }}"
                 type="button"
                 class="inline-flex items-center px-3 py-2 font-medium leading-4 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">
                 Return
             </a>
             <button wire:click="$set('action','create')"
                 type="button"
                 class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                 Add schedule
             </button>
         </div>
     </div>
     <div class="my-1">
         <x-global.alert />
     </div>
     <div class="flex flex-col mt-8">
         <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
             <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                 <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                     <table class="min-w-full divide-y divide-gray-300">
                         <thead class="bg-gray-50">
                             <tr>
                                 <th scope="col"
                                     class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                     Date
                                 </th>
                                 <th scope="col"
                                     class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                     No. of Test Centers
                                 </th>
                                 <th scope="col"
                                     class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                     Option
                                 </th>
                                 <th scope="col"
                                     class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                     <span class="sr-only">Edit</span>
                                 </th>
                             </tr>
                         </thead>
                         <tbody class="bg-white divide-y divide-gray-200">
                             @forelse ($schedules as $schedule)
                                 <tr>
                                     <td
                                         class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                                         {{ $schedule->date }}
                                     </td>
                                     <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                         {{ $schedule->examination_test_centers_count / 2 }}
                                     </td>
                                     <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                         <button type="button"
                                             title="Work in progress"
                                             class="inline-flex items-center px-3 py-2 font-medium leading-4 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">
                                             Show Test Centers
                                         </button>
                                     </td>
                                     <td
                                         class="relative py-2 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                                         <button type="button"
                                             class="inline-flex items-center px-3 py-2 font-medium leading-4 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">
                                             <svg xmlns="http://www.w3.org/2000/svg"
                                                 class="w-5 h-5 text-yellow-500"
                                                 fill="none"
                                                 viewBox="0 0 24 24"
                                                 stroke="currentColor"
                                                 stroke-width="2">
                                                 <path stroke-linecap="round"
                                                     stroke-linejoin="round"
                                                     d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                             </svg>
                                         </button>
                                         <button type="button"
                                             class="inline-flex items-center px-3 py-2 font-medium leading-4 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">
                                             <svg xmlns="http://www.w3.org/2000/svg"
                                                 class="w-5 h-5 text-red-600"
                                                 viewBox="0 0 20 20"
                                                 fill="currentColor">
                                                 <path fill-rule="evenodd"
                                                     d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                     clip-rule="evenodd" />
                                             </svg>
                                         </button>
                                     </td>
                                 </tr>
                             @empty
                                 <tr>
                                     <td colspan="3"
                                         class="p-4 text-sm text-center text-gray-500">No schedules
                                         found.</td>
                                 </tr>
                             @endforelse
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>
