<div>
    <main>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-admin.shared.header title="Schedules ">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-8 w-8"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z"
                        clip-rule="evenodd" />
                    <path d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                </svg>
                <x-slot:actions>

                </x-slot:actions>
            </x-admin.shared.header>

            <x-admin.shared.main-content>
                <div>
                    {{ $portal_details->title }}
                </div>
                <div class="w-1/2 mb-2">
                    <x-global.alert />
                </div>
                <div class="space-y-2 w-1/2 divide-y-2 divide-gray-200">
                    <div>
                        <ul role="list"
                            class="divide-y divide-gray-200">
                            @forelse ($schedules as $schedule)
                                <li class="py-2 flex">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-10 w-10"
                                        viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="ml-3 flex items-center">
                                        <p class="text-xl font-medium text-gray-900">{{ $schedule->date }}</p>
                                    </div>
                                </li>
                            @empty
                                <li class="py-4 flex">
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-700 text-center">
                                            No schedules yet
                                        </p>
                                    </div>
                                </li>
                            @endforelse
                        </ul>
                    </div>
                    <div>
                        <form>
                            @csrf
                            <div>
                                <label for="date"
                                    class="block text-sm font-medium text-gray-700">Date</label>
                                <div class="mt-1">
                                    <input type="date"
                                        wire:model.defer="date"
                                        name="date"
                                        id="date"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                        placeholder="you@example.com">
                                </div>
                            </div>
                            <div class="mt-2">
                                <button wire:click.prevent="create"
                                    type="button"
                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Add
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

            </x-admin.shared.main-content>
        </div>
    </main>
</div>
