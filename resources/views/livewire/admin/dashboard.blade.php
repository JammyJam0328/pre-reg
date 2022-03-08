<div>
    <main>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-admin.shared.header title="Dashboard">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                </svg>
                <x-slot:actions>
                </x-slot:actions>
            </x-admin.shared.header>
            <x-admin.shared.main-content>
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div>
                    <ul role="list"
                        class="grid grid-cols-1 gap-5 mt-3 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
                        <li class="flex col-span-1 rounded-md ">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-pink-600 rounded-l-md">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div
                                class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                                <div class="flex-1 px-4 py-2 text-sm truncate">
                                    <a href="#"
                                        class="font-medium text-gray-900 hover:text-gray-600">Pending Application</a>
                                    <p class="text-gray-500">
                                        {{ \App\Models\Application::where('status', 'pending')->count() }}</p>
                                </div>
                                <div class="flex-shrink-0 pr-2">
                                    <button type="button"
                                        class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-transparent bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <span class="sr-only">Open options</span>
                                        <svg class="w-5 h-5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </li>

                        <li class="flex col-span-1 rounded-md ">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-purple-600 rounded-l-md">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                </svg>
                            </div>
                            <div
                                class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                                <div class="flex-1 px-4 py-2 text-sm truncate">
                                    <a href="#"
                                        class="font-medium text-gray-900 hover:text-gray-600">Portals</a>
                                    <p class="text-gray-500">
                                        {{ \App\Models\Portal::where('status', 'open')->count() }}/{{ \App\Models\Portal::count() }}
                                    </p>
                                </div>
                                <div class="flex-shrink-0 pr-2">
                                    <button type="button"
                                        class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-transparent bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <span class="sr-only">Open options</span>
                                        <svg class="w-5 h-5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </li>

                        <li class="flex col-span-1 rounded-md ">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-yellow-500 rounded-l-md">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div
                                class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                                <div class="flex-1 px-4 py-2 text-sm truncate">
                                    <a href="#"
                                        class="font-medium text-gray-900 hover:text-gray-600">Users</a>
                                    <p class="text-gray-500">{{ \App\Models\User::count() }}</p>
                                </div>
                                <div class="flex-shrink-0 pr-2">
                                    <button type="button"
                                        class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-transparent bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <span class="sr-only">Open options</span>
                                        <!-- Heroicon name: solid/dots-vertical -->
                                        <svg class="w-5 h-5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </li>

                        <li class="flex col-span-1 rounded-md ">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-green-500 rounded-l-md">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </div>
                            <div
                                class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                                <div class="flex-1 px-4 py-2 text-sm truncate">
                                    <a href="#"
                                        class="font-medium text-gray-900 hover:text-gray-600">Payments to Review</a>
                                    <p class="text-gray-500">
                                        {{ \App\Models\Payment::where('status', 'review')->count() }}</p>
                                </div>
                                <div class="flex-shrink-0 pr-2">
                                    <button type="button"
                                        class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-transparent bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <span class="sr-only">Open options</span>
                                        <!-- Heroicon name: solid/dots-vertical -->
                                        <svg class="w-5 h-5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </x-admin.shared.main-content>
        </div>
    </main>
</div>
