<div>
    <form class="mt-2 ">
        @csrf
        <div class="space-y-4">
            <div>
                <label for="date"
                    class="block text-sm font-medium text-gray-700">Date</label>
                <div class="mt-1">
                    <input type="date"
                        wire:model.defer="date"
                        name="date"
                        id="date"
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                @error('date')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex w-full space-x-2">
                <div class="w-1/2 p-5 border border-gray-300 rounded-md shadow-md">
                    <fieldset class="p-3">
                        <legend class="text-lg font-medium text-gray-900">Select Test Center</legend>
                        <div class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
                            @foreach ($testCenters as $key => $testCenter)
                                <div wire:key="{{ $key }}-testCenter"
                                    class="relative flex items-start py-4">
                                    <div class="flex-1 min-w-0 text-sm">
                                        <label for="person-1"
                                            class="font-medium text-gray-700 select-none">{{ $testCenter->name }}</label>
                                    </div>
                                    <div class="flex items-center h-5 ml-3">
                                        @if (in_array($testCenter->id, $selecteds))
                                            <button type="button"
                                                class="font-bold text-green-600 uppercase"
                                                id="{{ $key }}-button-add "
                                                wire:click.prevent="removeSelectedTestCenter('{{ $testCenter->id }}')">
                                                Selected (remove)
                                            </button>
                                        @else
                                            <button type="button"
                                                class="font-bold uppercase"
                                                id="{{ $key }}-button-add"
                                                wire:click.prevent="addSelectedTestCenter('{{ $testCenter->id }}','{{ $testCenter->name }}')">
                                                Add
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </fieldset>
                </div>
                <div class="w-1/2 p-5 border border-gray-300 rounded-md shadow-md">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-1">
                        @forelse ($selectedTestCenters as $key=>$selectedTestCenter)
                            <div wire:key="selected-{{ $key }}"
                                class="relative flex items-center px-3 py-3 space-x-3 bg-white border border-gray-300 rounded-lg shadow-sm hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10"
                                        viewBox="0 0 64 64">
                                        <path fill="#c07a53"
                                            d="M58.7,46H57.07V15.94a3.26,3.26,0,0,0-3.26-3.26H10.19a3.26,3.26,0,0,0-3.26,3.26V46H5.3a1.55,1.55,0,0,0-1.55,1.55v2.21A1.54,1.54,0,0,0,5.3,51.32H58.7a1.54,1.54,0,0,0,1.55-1.55V47.56A1.55,1.55,0,0,0,58.7,46Z" />
                                        <rect width="29.33"
                                            height="42.14"
                                            x="17.33"
                                            y="10.28"
                                            fill="#00c081"
                                            transform="rotate(-90 32 31.35)" />
                                        <path fill="#e7e7e6"
                                            d="M18.28,42.29a1,1,0,0,1-1-1V37.81a1,1,0,0,1,2,0v3.48A1,1,0,0,1,18.28,42.29Zm3.86-1V38.66a1,1,0,0,0-2,0v2.63a1,1,0,0,0,2,0Z" />
                                        <path fill="#a57051"
                                            d="M6.93,42.83h4V46h-4ZM53.07,46h4V42.83h-4ZM23.48,42.24A1.24,1.24,0,0,0,22.24,41H17.18a1.25,1.25,0,0,0-1.25,1.25V46h7.55Zm24.59-1.3a1.3,1.3,0,0,0-1.3-1.29h-7a1.29,1.29,0,0,0-1.29,1.29v3.74h9.54Z" />
                                        <rect width="9.54"
                                            height="3.18"
                                            x="38.53"
                                            y="42.83"
                                            fill="#e7e7e6" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <a href="#"
                                        class="focus:outline-none">
                                        <span class="absolute inset-0"
                                            aria-hidden="true"></span>
                                        <p class="text-sm font-medium text-gray-900">{{ $selectedTestCenter }}
                                        </p>
                                    </a>
                                </div>
                            </div>
                        @empty
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end mt-3">
            <div class="flex space-x-2">
                <button wire:click="$set('action','showList')"
                    type="button"
                    class="inline-flex items-center px-3 py-2 font-medium leading-4 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">
                    Cancel
                </button>
                <button wire:click.prevent="create"
                    type="button"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>
