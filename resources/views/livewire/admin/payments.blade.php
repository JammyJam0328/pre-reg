<div>
    <main>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-admin.shared.header title="Payments">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd" />
                </svg>
                <x-slot:actions>
                </x-slot:actions>
            </x-admin.shared.header>
            <x-admin.shared.main-content>
                <div class="mb-2">
                    <x-global.alert />
                </div>

                <div>
                    @if ($action == 'showList')
                        <div>
                            @include('admin.payments.list')
                        </div>
                    @endif
                </div>
                <div>
                    @if ($action == 'viewPaymentDetails')
                        <div>
                            @include('admin.payments.view-payment-details')
                        </div>
                    @endif
                </div>

            </x-admin.shared.main-content>
        </div>
    </main>
    <livewire:shared.confirmation />
</div>
