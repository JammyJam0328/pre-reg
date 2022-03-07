<div x-data="app"
    x-on:alert.window="action = event.detail.action">
    <main>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-admin.shared.header title="Schedules ">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z"
                        clip-rule="evenodd" />
                    <path d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                </svg>
                <x-slot:actions>
                    <div>
                        <button x-on:click="action='add'"
                            type="button"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Add Schedule
                        </button>
                    </div>
                </x-slot:actions>
            </x-admin.shared.header>

            <x-admin.shared.main-content>
                <div class="space-y-2">
                    <div>
                        <x-global.alert />
                    </div>
                    <div x-show="action=='displayList'">
                        @include('admin.view-schedules.list')
                    </div>
                </div>
                <div x-cloak
                    x-show="action=='add'">
                    <h1 class="text-xl font-semibold text-gray-600">
                        Add New Schedule
                    </h1>
                    <div>
                        @include('admin.view-schedules.create')
                    </div>
                </div>




                {{-- <div>
                    {{ $portal_details->title }}
                </div>
                <div class="w-1/2 mb-2">
                    <x-global.alert />
                </div>
                <div class="w-1/2 space-y-2 divide-y-2 divide-gray-200">
                    <div>
                        <ul role="list"
                            class="divide-y divide-gray-200">
                            @forelse ($schedules as $schedule)
                                <li class="flex py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10"
                                        viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="flex items-center ml-3">
                                        <p class="text-xl font-medium text-gray-900">{{ $schedule->date }}</p>
                                    </div>
                                </li>
                            @empty
                                <li class="flex py-4">
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-center text-gray-700">
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
                                        class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                        placeholder="you@example.com">
                                </div>
                            </div>
                            <div class="mt-2">
                                <button wire:click.prevent="create"
                                    type="button"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Add
                                </button>
                            </div>
                        </form>
                    </div>

                </div> --}}

            </x-admin.shared.main-content>
        </div>
    </main>
</div>


@once
    @push('scripts')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('app', () => ({
                    action: "displayList",
                }))
            })
        </script>
    @endpush
@endonce
