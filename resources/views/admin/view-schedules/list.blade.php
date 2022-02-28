 <div class="flex flex-col">
     <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
         <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
             <div class=" overflow-hidden border border-gray-200 sm:rounded-lg">
                 <table class="min-w-full divide-y divide-gray-200">
                     <thead class="bg-blue-500">
                         <tr>
                             <th scope="col"
                                 class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                 Title</th>
                             <th scope="col"
                                 class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                 School Year</th>
                             <th scope="col"
                                 class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                 Slots</th>
                             <th scope="col"
                                 class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                 Created</th>
                             <th scope="col"
                                 class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                 Options</th>
                             <th scope="col"
                                 class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                 Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         @forelse ($portals as $key=>$portal)
                             <tr class="{{ $key % 2 == 0 ? 'bg-white' : 'bg-gray-50' }} ">
                                 <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                     {{ $portal->title }}</td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Regional
                                     {{ $portal->school_year }}</td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                     {{ $portal->slots }}</td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                     {{ $portal->created_at->format('M d, Y') }}</td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 ">
                                     <a href="{{ route('admin.portal-schedule', ['id' => $portal->id]) }}"
                                         class="bg-indigo-600 py-1 px-2 rounded-md  text-white hover:bg-indigo-500">
                                         View schedule</a>
                                     @switch($portal->status)
                                         @case('close')
                                             <button wire:click.prevent="confirmOpenPortal({{ $portal->id }})"
                                                 type="button"
                                                 class="bg-red-600 py-1 px-2 rounded-md  text-white hover:bg-red-500">
                                                 Open</button>
                                         @break

                                         @case('open')
                                             <button type="button"
                                                 class="bg-gray-600 py-1 px-2 rounded-md  text-white hover:bg-gray-500">
                                                 Close</button>
                                         @break

                                         @case('closed')
                                             <button type="button"
                                                 class="bg-gray-600 py-1 px-2 rounded-md  text-white hover:bg-gray-500">
                                                 Reopen</button>
                                         @break
                                     @endswitch
                                 </td>
                                 <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                     <button type="button"
                                         class="bg-blue-600 p-1 rounded-md  text-white hover:bg-blue-500">
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                             class="h-5 w-5"
                                             viewBox="0 0 20 20"
                                             fill="currentColor">
                                             <path
                                                 d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                         </svg>
                                     </button>
                                     <button type="button"
                                         class="bg-red-600  p-1 rounded-md text-white hover:bg-red-500">
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                             class="h-5 w-5"
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
                                 <tr class="bg-white">
                                     <td colspan="5"
                                         class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">
                                         No Portals Found
                                     </td>
                                 </tr>
                             @endforelse
                         </tbody>
                     </table>
                 </div>
             </div>
             <div class="my-2">
                 {{ $portals->links() }}
             </div>
         </div>
     </div>
