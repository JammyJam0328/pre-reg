{{-- <div x-data="app"
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





            </x-admin.shared.main-content>
        </div>
    </main>
</div> --}}

{{-- @once
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
        <h1 class="text-2xl font-semibold text-gray-900">Manage Schedule</h1>
    </div>
    <div class="px-4 mx-auto mt-2 max-w-7xl sm:px-6 md:px-8">
        <div class="p-4 bg-white border rounded-md">
            <div>
                @if ($action == 'showList')
                    <div>
                        @include('admin.view-schedules.list')
                    </div>
                @endif
            </div>
            <div>
                @if ($action == 'create')
                    <div>
                        @include('admin.view-schedules.create')
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
