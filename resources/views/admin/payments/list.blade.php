<div class="flex flex-col space-y-5">
    <div class="flex justify-start ">

        <div class="flex items-center space-x-2">
            <label for="filter"
                class="font-semibold text-gray-700 ">Filter</label>
            <select id="filter"
                name="filter"
                wire:model="filter"
                class="block w-full py-2 pl-3 pr-10 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="">All</option>
                <option value="review">To review</option>
                <option value="approved">Approved</option>
            </select>
        </div>
    </div>
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="overflow-hidden border border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-600">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                Student Name</th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                Application For</th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                Amount</th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($payments as $payment)
                            <tr class="bg-white">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                    {{ $payment->application->first_name }}
                                    {{ $payment->application->middle_name }}
                                    {{ $payment->application->last_name }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    {{ $payment->portal->title }}</td>
                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    Php {{ $payment->amount }}</td>
                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    {{-- <button wire:click.prevent="approveConfirmation('{{ $payment->id }}')"
                                        type="button"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-white uppercase bg-blue-500 border border-transparent rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Approve
                                    </button> --}}
                                    <button wire:click.prevent="viewPaymentDetails('{{ $payment->id }}')"
                                        type="button"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-white uppercase bg-gray-500 border border-transparent rounded-md shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                        <span>View payment details</span>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4"
                                    class="px-6 py-4 text-sm font-medium text-center text-gray-900 whitespace-nowrap">
                                    No Payments Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
