<!-- This example requires Tailwind CSS v2.0+ -->
<div>
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">List of All Application Portals</h1>
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <button wire:click="$set('action','create')"
                type="button"
                class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                Create new portal
            </button>
        </div>
    </div>
    <div class="my-1">
        <x-global.alert />
    </div>
    <div class="mt-5 -mx-4 border shadow sm:-mx-6 md:mx-0 md:rounded-lg">
        <table class="min-w-full divide-y divide-gray-300">
            <thead>
                <tr>
                    <th scope="col"
                        class="py-3.5 pl-4 pr-3 text-left  font-semibold text-indigo-600 sm:pl-6">Name</th>
                    <th scope="col"
                        class="hidden px-3 py-3.5 text-left  font-semibold text-indigo-600 lg:table-cell">
                        School Year
                    </th>
                    <th scope="col"
                        class="hidden px-3 py-3.5 text-left  font-semibold text-indigo-600 lg:table-cell">Status
                    </th>
                    <th scope="col"
                        class="hidden px-3 py-3.5 text-left  font-semibold text-indigo-600 lg:table-cell">
                        Schedule
                    </th>

                    <th scope="col"
                        class="relative py-3.5 pl-3 pr-4 sm:pr-6">

                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($portals as $portal)
                    <tr>
                        <td class="hidden px-3 py-3.5  text-gray-500 lg:table-cell">{{ $portal->title }}</td>
                        <td class="hidden px-3 py-3.5  text-gray-500 lg:table-cell">{{ $portal->school_year }}
                        </td>
                        <td class="hidden px-3 py-3.5  text-gray-500 lg:table-cell">
                            @if ($portal->status == 'open')
                                <span class="p-2 text-green-500 bg-green-100 rounded-full">Open</span>
                            @else
                                <span class="p-2 text-red-500 bg-red-100 rounded-full">Close</span>
                            @endif
                        </td>
                        <td class="hidden px-3 py-3.5  text-gray-500 lg:table-cell">
                            <a href="{{ route('admin.portal-schedule', [
                                'id' => $portal->id,
                            ]) }}"
                                type="button"
                                class="inline-flex items-center px-3 py-2 font-medium leading-4 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none ">
                                View Schedules
                            </a>
                        </td>
                        <td class="relative py-3.5 pl-3 pr-4 sm:pr-6 text-right  font-medium">
                            @if ($portal->status == 'close')
                                <button wire:click="confirmOpenPortal('{{ $portal->id }}')"
                                    type="button"
                                    class="inline-flex items-center px-3 py-2 font-medium leading-4 text-white bg-green-600 rounded-md ">
                                    Open
                                </button>
                            @else
                                <button wire:click="confirmClosePortal('{{ $portal->id }}')"
                                    type="button"
                                    class="inline-flex items-center px-3 py-2 font-medium leading-4 text-white bg-red-600 rounded-md ">
                                    Close
                                </button>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5"
                            class="px-4 py-3 text-center">
                            <p class="text-gray-500">No portals found.</p>
                        </td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
</div>






{{-- <div class="flex flex-col">
     <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
         <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
             <div class="overflow-hidden border border-gray-200 sm:rounded-lg">
                 <table class="min-w-full divide-y divide-gray-200">
                     <thead class="bg-blue-500">
                         <tr>
                             <th scope="col"
                                 class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                 Title</th>
                             <th scope="col"
                                 class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                 School Year</th>
                             <th scope="col"
                                 class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                 Slots</th>
                             <th scope="col"
                                 class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                 Created</th>
                             <th scope="col"
                                 class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                 Status</th>
                             <th scope="col"
                                 class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                 Options</th>
                             <th scope="col"
                                 class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                 Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         @forelse ($portals as $key=>$portal)
                             <tr class="{{ $key % 2 == 0 ? 'bg-white' : 'bg-gray-50' }} ">
                                 <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                     {{ $portal->title }}</td>
                                 <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                     {{ $portal->school_year }}</td>
                                 <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                     {{ $portal->slots }}</td>
                                 <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                     {{ $portal->created_at->format('M d, Y') }}</td>
                                 <td class="px-6 py-4 text-xs text-gray-500 uppercase whitespace-nowrap">
                                     @switch($portal->status)
                                         @case('open')
                                             <span
                                                 class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                 {{ $portal->status }}
                                             </span>
                                         @break

                                         @case('close')
                                             <span
                                                 class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                                 {{ $portal->status }}
                                             </span>
                                         @break

                                         @case('closed')
                                             <span
                                                 class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                                 {{ $portal->status }} </span>
                                         @break
                                     @endswitch

                                 </td>
                                 <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap ">
                                     <a href="{{ route('admin.portal-schedule', ['id' => $portal->id]) }}"
                                         class="px-2 py-1 text-white bg-indigo-600 rounded-md hover:bg-indigo-500">
                                         View schedule</a>
                                 </td>
                                 <td
                                     class="flex items-center px-6 py-4 space-x-1 text-sm font-medium text-right whitespace-nowrap">
                                     @switch($portal->status)
                                         @case('open')
                                             <button wire:click.prevent="confirmClosePortal({{ $portal->id }})"
                                                 type="button"
                                                 class="p-1 text-white bg-gray-600 rounded-md hover:bg-gray-500">
                                                 Close
                                             </button>
                                         @break

                                         @case('close')
                                             <button wire:click.prevent="confirmOpenPortal({{ $portal->id }})"
                                                 class="p-1 text-white bg-green-600 rounded-md hover:bg-green-500">
                                                 Open
                                             </button>
                                         @break

                                         @case('closed')
                                             <button type="button"
                                                 class="p-1 text-white bg-yellow-600 rounded-md hover:bg-yellow-500">
                                                 Re-Open
                                             </button>
                                         @break
                                     @endswitch
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
                                 <tr class="bg-white">
                                     <td colspan="6"
                                         class="px-6 py-4 text-sm font-medium text-center text-gray-900 whitespace-nowrap">
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
     </div> --}}
