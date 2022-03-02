<form>
    @csrf
    <div class="space-y-8 ">
        {{-- <div>
            <h3 class="text-xl font-medium text-gray-700">Preview</h3>
            <div class="p-4 mt-2 rounded-md bg-green-50">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 text-green-400"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="font-semibold text-green-800">{{ $title }}</h3>
                        <div class="mt-2 text-sm text-green-700">
                            <ul role="list"
                                class="pl-5 space-y-1 list-disc">
                                <li>Application for Pre admission test for the school year {{ $school_year }} is
                                    open</li>
                                <li>Fill up the form <a href="#"
                                        class="font-semibold text-blue-600 underline">here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}
        <div>
            <div>
                <h3 class="text-xl font-medium leading-6 text-gray-700">Create new application portal</h3>
                <p class="mt-1 text-sm text-gray-500">By default portal is close</p>
            </div>
            <div class="grid grid-cols-1 mt-2 gap-y-6 gap-x-4 sm:grid-cols-6">
                <div class="sm:col-span-6">
                    <label for="title"
                        class="block text-sm font-medium text-gray-700">Title</label>
                    <div class="mt-1">
                        <input type="text"
                            wire:model.debounce="title"
                            name="title"
                            id="title"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>
                <div class="sm:col-span-6">
                    <div>
                        <label for="sy"
                            class="block text-sm font-medium text-gray-700">School Year</label>
                        <select id="sy"
                            wire:model="school_year"
                            name="sy"
                            class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value=""></option>
                            @foreach ($schoolYears as $sy)
                                <option value="{{ $sy }}">{{ $sy }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                {{-- <div class="sm:col-span-6">
                    <label for="slots"
                        class="block text-sm font-medium text-gray-700">Slots</label>
                    <div class="mt-1">
                        <input type="number"
                            wire:model.debounce="slots"
                            name="slots"
                            id="slots"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div> --}}
            </div>
        </div>


    </div>

    <div class="pt-5">
        <div class="flex justify-end">
            <button x-on:click="action='displayList'"
                type="button"
                class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
            <button wire:click.prevent="create"
                type="button"
                class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
        </div>
    </div>
</form>
