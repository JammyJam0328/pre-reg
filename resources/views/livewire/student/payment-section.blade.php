<div>
    <main>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-user.shared.header title="Payment">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd" />
                </svg>
            </x-user.shared.header>
            <x-user.shared.main-content>
                <div class="p-3 text-gray-700 border rounded-md">
                    <div>
                        @if ($this->application->status == 'approved')
                            <div>
                                <h1>Examination Fee : Php 275</h1>
                                <div class="my-2 space-y-2">
                                    <h1>Step 1 : Go to this <a href="#"
                                            class="text-blue-600 underline">Link</a> , select a Bayad center and follow
                                        their
                                        instructions </h1>
                                    <h1>Step 2 : Take and photo / Screenshot of your payment receipts and upload here
                                    </h1>
                                    <div>
                                        <section class="overflow-hidden text-gray-700 ">
                                            <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
                                                <div class="flex flex-wrap -m-1 md:-m-2">
                                                    @foreach ($proof_of_payments as $proof)
                                                        <div class="flex flex-wrap w-1/3">
                                                            <div class="w-full p-1 md:p-2">
                                                                <img alt="gallery"
                                                                    class="block object-cover object-center w-full h-full rounded-lg"
                                                                    src="{{ $proof->temporaryURL() }}">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div>
                                                    <div wire:loading.flex
                                                        wire:target="proof_of_payments"
                                                        class="flex items-center justify-center">
                                                        <h1 class="text-xl text-center animate-pulse">Uploading . . .
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <form>
                                        @csrf
                                        <input wire:model="proof_of_payments"
                                            type="file"
                                            name="proofs"
                                            multiple
                                            accept="image/*"
                                            id="proofs">
                                    </form>
                                </div>
                                <div class="mt-5">
                                    @if (count($proof_of_payments) > 0)
                                        <div>
                                            <button wire:click.prevent="submitPayment"
                                                wire:loading.attr="disabled"
                                                wire:target="submitPayment"
                                                type="button"
                                                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 disabled:bg-gray-700">
                                                <span wire:loading.remove
                                                    wire:target="submitPayment">Submit</span>
                                                <span wire:loading
                                                    wire:target="submitPayment">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="w-6 h-6 fill-white animate-spin"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.9 3.1C14.2 4.3 15 6.1 15 8c0 3.9-3.1 7-7 7s-7-3.1-7-7c0-1.9.8-3.7 2.1-4.9l-.8-.8C.9 3.8 0 5.8 0 8c0 4.4 3.6 8 8 8s8-3.6 8-8c0-2.2-.9-4.2-2.3-5.7l-.8.8z" />
                                                    </svg>
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                    <div>
                        @if ($this->application->status == 'payment-submitted')
                            <div class="flex items-center justify-center">
                                <img src="{{ asset('images/receipt.gif') }}"
                                    class="h-32 rounded-full"
                                    alt="payment-logo">
                                <h1 class="text-gray-600">
                                    Your payment is now under validation. We will notify you for your payment updates.
                                </h1>
                            </div>
                        @endif
                    </div>
                </div>
            </x-user.shared.main-content>
        </div>
    </main>
</div>
