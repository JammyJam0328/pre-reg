<div x-data="{searching:false,portal:$persist(@entangle('portal_id'))}"
    x-on:keydown.escape="searching = false"
    x-on:exit-search.window="searching=false">
    <main>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-admin.shared.header title="Applications">
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
                    <div class="flex items-center">
                        <button x-on:click="searching=true"
                            class="px-2 py-1 text-sm text-gray-600 bg-gray-100 border rounded-md hover:bg-gray-200">
                            Search Portal
                        </button>
                    </div>
                    @include('admin.applications.search')
                </x-slot:actions>
            </x-admin.shared.header>
            <x-admin.shared.main-content>
                <div>
                    @include('admin.applications.list')
                </div>
            </x-admin.shared.main-content>
        </div>
    </main>
    <livewire:shared.confirmation />

</div>
