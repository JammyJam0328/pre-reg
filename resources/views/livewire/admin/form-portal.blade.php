{{-- <div x-data="app"
    x-on:alert.window="action = event.detail.action">
    <main>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-admin.shared.header title="Application Portals">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M2 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1H3a1 1 0 01-1-1V4zM8 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1H9a1 1 0 01-1-1V4zM15 3a1 1 0 00-1 1v12a1 1 0 001 1h2a1 1 0 001-1V4a1 1 0 00-1-1h-2z" />
                </svg>
                <x-slot:actions>
                    <button x-show="action!='create'"
                        x-on:click="action='create'"
                        class="p-2 text-white bg-green-500 rounded-md focus:outline-none hover:bg-green-400 ">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 4v16m8-8H4" />
                        </svg>

                    </button>
                    <button x-cloak
                        x-show="action=='create'"
                        x-on:click="action='displayList'"
                        class="p-2 text-white bg-red-500 rounded-md focus:outline-none hover:bg-red-400">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <div>
                        <input type="text"
                            name="search"
                            id="search"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="Search">
                    </div>
                </x-slot:actions>
            </x-admin.shared.header>


            <x-admin.shared.main-content>
                <div class="mb-2">
                    <x-global.alert />
                </div>
                <div x-show="action=='displayList'">
                    @include('admin.form-portal.list')
                </div>
                <div x-cloak
                    x-show="action=='create'">
                    @include('admin.form-portal.create-form')
                </div>
            </x-admin.shared.main-content>
        </div>
    </main>
    <livewire:shared.confirmation />
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
@endonce --}}


<div class="py-6">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Manage Portals</h1>
    </div>
    <div class="px-4 mx-auto mt-2 max-w-7xl sm:px-6 md:px-8">
        <div class="p-4 pb-5 bg-white border rounded-md">
            <div>
                @if ($action == 'showList')
                    <div>
                        @include('admin.form-portal.list')
                    </div>
                @endif
            </div>
            <div>
                @if ($action == 'create')
                    <div>
                        @include('admin.form-portal.create-form')
                    </div>
                @endif
            </div>
        </div>
    </div>
    <livewire:shared.confirmation />

</div>
