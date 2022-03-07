<div>
    <main>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-user.shared.header title="Select Schedule">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-8 w-8"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd" />
                </svg>
            </x-user.shared.header>
            <x-user.shared.main-content>
                <div>
                    <form>
                        @csrf
                        <div class="p-3 rounded-md border">
                            @foreach ($schedules as $key => $schedule)
                                <div>
                                    <label class="text-base font-medium text-gray-900">{{ $schedule->date }}</label>
                                    <p class="text-sm leading-5 text-gray-500"> Batch # {{ $key + 1 }}</p>
                                    <fieldset class="mt-4">
                                        <div class="space-y-4">
                                            @foreach ($schedule->examinationFacilities as $scheduledExamination)
                                                <div class="flex items-center">
                                                    <input
                                                        wire:click="$set('selectedSchedule','{{ $scheduledExamination->id }}')"
                                                        id="sched{{ $key }}"
                                                        name="sched{{ $key }}"
                                                        type="radio"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                    <label for="sms"
                                                        class="ml-3 text-xl block font-medium text-gray-700">
                                                        {{ $scheduledExamination->facility->name }}
                                                        ({{ $scheduledExamination->day_time }})
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </fieldset>
                                </div>
                            @endforeach
                        </div>
                        <div class="flex justify-end mt-3">
                            @if ($selectedSchedule != '')
                                <button type="button"
                                    wire:click.prevent="selectSchedule"
                                    wire:loading.attr="disabled"
                                    class="inline-flex items-center px-5 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
                                    <svg class="-ml-1 mr-2 h-5 w-5"
                                        fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Submit
                                </button>
                            @endif
                        </div>
                    </form>


                </div>
            </x-user.shared.main-content>
        </div>
    </main>
</div>
