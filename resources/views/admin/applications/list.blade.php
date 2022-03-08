<div>
    <div>
        @if ($portal_id != '')
            <div class="flex justify-between px-2 mb-2">
                <div class="flex items-center space-x-2 text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5"
                        viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z" />
                        <path d="M3 8a2 2 0 012-2v10h8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
                    </svg>
                    <h1 class="text-xl ">Application List</h1>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-blue-600">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                            Full Name</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                            First Choice</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                            Second Choice</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                            Options</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($applications as $application)
                                        <tr class="bg-white">
                                            <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                {{ $application->firs_name }} {{ $application->middle_name }}
                                                {{ $application->last_name }}</td>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">

                                                {{ $application->first_choice }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $application->second_choice }}
                                            </td>
                                            <td class="px-6 py-2 text-sm text-gray-500 whitespace-nowrap">
                                                <div class="flex space-x-1">
                                                    @if ($application->status == 'pending')
                                                        <button
                                                            wire:click="approveConfirmation('{{ $application->id }}')"
                                                            type="button"
                                                            class="inline-flex uppercase items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                            Approve
                                                        </button>
                                                        <button
                                                            wire:click="rejectConfirmation('{{ $application->id }}')"
                                                            type="button"
                                                            class="inline-flex uppercase items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                                            Deny
                                                        </button>
                                                    @endif
                                                    <a href="{{ route('admin.view-application', ['application_id' => $application->id]) }}"
                                                        type="button"
                                                        class="inline-flex uppercase cursor-pointer items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-gray-500 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                                        View Details
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr class="bg-white">
                                            <td colspan="4"
                                                class="px-6 py-4 text-sm font-medium text-center text-gray-900 whitespace-nowrap">
                                                No applications yet
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="my-2">
                    {{ $applications->links() }}
                </div>
            </div>
        @else
            <div x-data="{hasPortal:false}"
                class="flex items-center justify-center"
                x-intersect="setTimeout(function(){
                    hasPortal = true;
                },6000)">
                <span x-show="hasPortal==false"
                    class="animate-pulse">Loading previous search . . .</span>
                <div x-cloak
                    x-show="hasPortal==true"
                    class="flex items-center space-x-2 text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5"
                        viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Looks like you haven't selected a portal yet. Try searching.</span>
                </div>
            </div>
        @endif
    </div>
</div>
