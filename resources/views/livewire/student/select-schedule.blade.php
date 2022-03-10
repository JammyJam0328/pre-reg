<div>
    <main>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-user.shared.header title="Select Schedule">
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
                <div>
                    <div class="p-3 space-y-3 border rounded-md">
                        @foreach ($schedules as $key => $schedule)
                            <fieldset>
                                <legend class="ml-3 text-lg font-medium text-gray-900 ">Date :
                                    {{ $schedule->date }}
                                </legend>
                                <div class="grid grid-cols-1 mt-4 gap-y-6 sm:grid-cols-3 sm:gap-x-4">
                                    @foreach ($schedule->examinationTestCenters as $examSchedule)
                                        <div title="Click to Select"
                                            class="{{ $selectedSchedule == $examSchedule->id ? 'border-blue-700' : '' }} relative flex p-4 bg-white border rounded-lg cursor-pointer focus:outline-none">
                                            <div class="flex flex-1">
                                                <div class="flex flex-col">
                                                    <span class="block text-sm font-medium text-gray-900">
                                                        {{ $examSchedule->testCenter->name }}
                                                    </span>
                                                    <span class="flex items-center mt-1 text-sm text-gray-500">
                                                        {{ $examSchedule->testCenter->description }} </span>
                                                    <span class="flex items-center mt-1 text-sm text-gray-500">
                                                        {{ $examSchedule->day_time }} </span>
                                                    <div
                                                        class="flex items-center mt-6 space-x-2 text-sm font-medium text-gray-900">
                                                        <span> Slots : {{ $examSchedule->slot }} / 100</span>
                                                        @if ($this->isFull($examSchedule->slot))
                                                            <span class="text-red-600">
                                                                (Full)
                                                            </span>
                                                        @else
                                                            <button
                                                                wire:click="$set('selectedSchedule', {{ $examSchedule->id }})"
                                                                type="button"
                                                                class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                                Select
                                                            </button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                @if ($selectedSchedule == $examSchedule->id)
                                                    <svg class="w-5 h-5 text-indigo-600"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor"
                                                        aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                @endif
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                            </fieldset>
                        @endforeach
                    </div>
                    <div class="flex justify-end mt-3">
                        @if ($selectedSchedule != '')
                            <button type="button"
                                wire:click.prevent="selectSchedule"
                                wire:loading.attr="disabled"
                                class="inline-flex items-center px-5 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
                                <svg wire:loading.remove
                                    wire:target="selectSchedule"
                                    class="w-5 h-5 mr-2 -ml-1"
                                    fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div wire:loading
                                    wire:target="selectSchedule">
                                    <x-global.spinner class="w-4 h-4 fill-white" />
                                </div>
                                Submit
                            </button>
                        @endif
                    </div>
                </div>
            </x-user.shared.main-content>
        </div>
    </main>
</div>
