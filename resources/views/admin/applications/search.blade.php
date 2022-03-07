<div>
    <div x-cloak
        x-show="searching"
        class="fixed inset-0 z-10 overflow-y-auto p-4 sm:p-6 md:p-20"
        role="dialog"
        aria-modal="true">

        <div x-show="searching"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-gray-500 bg-opacity-25 transition-opacity"
            aria-hidden="true"></div>

        <div x-show="searching"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            x-on:click.away="searching = false"
            class="mx-auto max-w-xl transform divide-y divide-gray-100 overflow-hidden rounded-xl bg-white shadow-2xl ring-1 ring-black ring-opacity-5 transition-all">
            <div class="relative">
                <svg wire:loading.remove
                    wire:target="searchPortal"
                    class="pointer-events-none absolute top-3.5 left-4 h-5 w-5 text-gray-400"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd" />
                </svg>
                <svg wire:loading
                    wire:target="searchPortal"
                    xmlns="http://www.w3.org/2000/svg"
                    class="pointer-events-none absolute top-3.5 left-4 h-5 w-5 text-gray-400 animate-spin"
                    viewBox="0 0 16 16">
                    <path fill="#444"
                        d="M12.9 3.1C14.2 4.3 15 6.1 15 8c0 3.9-3.1 7-7 7s-7-3.1-7-7c0-1.9.8-3.7 2.1-4.9l-.8-.8C.9 3.8 0 5.8 0 8c0 4.4 3.6 8 8 8s8-3.6 8-8c0-2.2-.9-4.2-2.3-5.7l-.8.8z" />
                </svg>
                <input type="text"
                    wire:model.debounce.500ms="searchPortal"
                    class="h-12 w-full border-0 bg-transparent pl-11 pr-4 text-gray-800 placeholder-gray-400 focus:ring-0 sm:text-sm"
                    placeholder="Search..."
                    role="combobox"
                    aria-expanded="false"
                    aria-controls="options">
            </div>

            <!-- Results, show/hide based on command palette state -->
            <ul class="max-h-96 scroll-py-3 overflow-y-auto p-3"
                id="options"
                role="listbox">
                @forelse ($searchResults as $key=>$portal)
                    <li wire:key="{{ $key }}-portal"
                        wire:click.prevent="newPortal('{{ $portal->id }}')"
                        class="group flex cursor-default select-none rounded-xl p-3 hover:bg-gray-100 "
                        id="option-1"
                        role="option"
                        tabindex="-1">
                        <div class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-white"
                                viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M2 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1H3a1 1 0 01-1-1V4zM8 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1H9a1 1 0 01-1-1V4zM15 3a1 1 0 00-1 1v12a1 1 0 001 1h2a1 1 0 001-1V4a1 1 0 00-1-1h-2z" />
                            </svg>

                        </div>
                        <div class="ml-4 flex-auto">
                            <p class="text-sm font-medium text-gray-700">{{ $portal->title }}</p>
                            <p class="text-sm text-gray-500">{{ $portal->school_year }}</p>
                        </div>
                    </li>
                @empty
                    <div class="py-14 px-6 text-center text-sm sm:px-14">
                        <svg class="mx-auto h-6 w-6 text-gray-400"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="mt-4 font-semibold text-gray-900">
                            {{ $searchPortal == '' ? 'Search Portal' : 'No result found' }}
                        </p>

                    </div>
                @endforelse

            </ul>


        </div>
    </div>
</div>
