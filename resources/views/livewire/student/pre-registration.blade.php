<div x-data="{step:$persist('1')}">
    <main>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-user.shared.header title="Pre-Registration Form">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z"
                        clip-rule="evenodd" />
                    <path d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                </svg>
            </x-user.shared.header>
            <x-user.shared.main-content>
                <div>
                    <form>
                        @csrf
                        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">

                            <div class="space-y-6 sm:space-y-5">
                                <div>
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                                </div>
                                <div class="space-y-6 sm:space-y-5">
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="first-name"
                                            class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Type
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <select id="type"
                                                wire:model="student_type"
                                                name="type"
                                                autocomplete="type"
                                                class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                                <option value=""></option>
                                                <option value="Transferee">Transferee</option>
                                                <option value="Freshmen">Freshmen</option>
                                            </select>
                                        </div>
                                    </div>
                                    @if ($this->application->student_type != '')
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="first-name"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> First
                                                name
                                            </label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <input type="text"
                                                    wire:model.defer="first_name"
                                                    name="first-name"
                                                    id="first-name"
                                                    autocomplete="given-name"
                                                    class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                                @error('first_name')
                                                    <span class="mt-2 text-sm text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="middle-name"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Middle
                                                name
                                            </label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <input type="text"
                                                    wire:model.defer="middle_name"
                                                    name="middle-name"
                                                    id="middle-name"
                                                    autocomplete="middle-name"
                                                    class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                                @error('middle_name')
                                                    <span class="mt-2 text-sm text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="last-name"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Last
                                                name
                                            </label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <input type="text"
                                                    wire:model.defer="last_name"
                                                    name="last-name"
                                                    id="last-name"
                                                    autocomplete="family-name"
                                                    class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                                @error('last_name')
                                                    <span class="mt-2 text-sm text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="permanent_address"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Permanent
                                                Address
                                            </label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <input id="permanent_address"
                                                    wire:model.defer="permanent_address"
                                                    name="permanent_address"
                                                    type="text"
                                                    autocomplete="permanent_address"
                                                    class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                @error('permanent_address')
                                                    <span class="mt-2 text-sm text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="present_address"
                                                class="flex space-x-2 text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Present
                                                Address
                                            </label>

                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <input id="present_address"
                                                    wire:model.defer="present_address"
                                                    name="present_address"
                                                    type="text"
                                                    autocomplete="present_address"
                                                    class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                @error('present_address')
                                                    <span class="mt-2 text-sm text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="sex"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Sex
                                            </label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <select id="sex"
                                                    wire:model.defer="sex"
                                                    name="sex"
                                                    autocomplete="sex"
                                                    class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                                    <option value=""></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                @error('sex')
                                                    <span class="mt-2 text-sm text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="last-name"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Date
                                                of
                                                Birth
                                            </label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <input type="date"
                                                    wire:model.defer="date_of_birth"
                                                    name="date_of_birth"
                                                    id="date_of_birth"
                                                    autocomplete="date_of_birth"
                                                    class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                                @error('date_of_birth')
                                                    <span class="mt-2 text-sm text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="age"
                                                class="flex space-x-2 text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                                Age
                                            </label>

                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <input id="age"
                                                    wire:model.defer="age"
                                                    name="age"
                                                    type="text"
                                                    autocomplete="age"
                                                    class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                @error('age')
                                                    <span class="mt-2 text-sm text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="place_of_birth"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Place
                                                of
                                                Birth
                                            </label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <input type="text"
                                                    wire:model.defer="place_of_birth"
                                                    name="place_of_birth"
                                                    id="place_of_birth"
                                                    autocomplete="place_of_birth"
                                                    class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                @error('place_of_birth')
                                                    <span class="mt-2 text-sm text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="nationality"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                                Nationality
                                            </label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <input type="text"
                                                    wire:model.defer="nationality"
                                                    name="nationality"
                                                    id="nationality"
                                                    autocomplete="address-level2"
                                                    class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                                @error('nationality')
                                                    <span class="mt-2 text-sm text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="region"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                                Citizenship</label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <input type="text"
                                                    wire:model.defer="citizenship"
                                                    name="region"
                                                    id="region"
                                                    autocomplete="address-level1"
                                                    class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                                @error('citizenship')
                                                    <span class="mt-2 text-sm text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="postal-code"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Civil
                                                Status</label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <input type="text"
                                                    wire:model.defer="civil_status"
                                                    name="postal-code"
                                                    id="postal-code"
                                                    autocomplete="postal-code"
                                                    class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                                @error('civil_status')
                                                    <span class="mt-2 text-sm text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="religion"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Religion</label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <input type="text"
                                                    wire:model.defer="religion"
                                                    name="religion"
                                                    id="religion"
                                                    autocomplete="religion"
                                                    class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                                @error('religion')
                                                    <span class="mt-2 text-sm text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="tribe"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Tribe</label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <input type="text"
                                                    wire:model.defer="tribe"
                                                    name="tribe"
                                                    id="tribe"
                                                    autocomplete="tribe"
                                                    class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                                @error('tribe')
                                                    <span class="mt-2 text-sm text-red-600">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        @if ($this->application->student_type == 'Freshmen')
                                            <div
                                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                                <label for="school_last_attended"
                                                    class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">School
                                                    Last
                                                    Attended</label>
                                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                    <input id="school_last_attended"
                                                        wire:model.defer="school_last_attended"
                                                        name="school_last_attended"
                                                        type="text"
                                                        autocomplete="school_last_attended"
                                                        class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    @error('school_last_attended')
                                                        <span class="mt-2 text-sm text-red-600">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div
                                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                                <label for="school_address"
                                                    class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">School
                                                    Address</label>
                                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                    <input id="school_address"
                                                        wire:model.defer="school_address"
                                                        name="school_address"
                                                        type="text"
                                                        autocomplete="school_address"
                                                        class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    @error('school_address')
                                                        <span class="mt-2 text-sm text-red-600">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div
                                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                                <label for="strant_taken"
                                                    class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Track/Strand
                                                    Taken</label>
                                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                    <input id="strant_taken"
                                                        wire:model.defer="track_taken"
                                                        name="strant_taken"
                                                        type="text"
                                                        autocomplete="strant_taken"
                                                        class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    @error('track_taken')
                                                        <span class="mt-2 text-sm text-red-600">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div
                                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                                <label for="school_year_graduated"
                                                    class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">School
                                                    Year
                                                    Graduated</label>
                                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                    <select id="sy_graduated"
                                                        name="sy_graduated"
                                                        wire:model.defer="school_year_graduated"
                                                        autocomplete="sy_graduated"
                                                        class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                                        @foreach ($schoolYears as $year)
                                                            <option value="{{ $year }}">{{ $year }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('school_year_graduated')
                                                        <span class="mt-2 text-sm text-red-600">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div
                                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                                <label for="ha_recieved"
                                                    class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Honor/Award
                                                    received</label>
                                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                    <input id="ha_recieved"
                                                        wire:model.defer="awards_received"
                                                        name="ha_recieved"
                                                        type="text"
                                                        autocomplete="ha_recieved"
                                                        placeholder="e.g. With High Honor"
                                                        class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    @error('awards_received')
                                                        <span class="mt-2 text-sm text-red-600">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        @elseif ($this->application->student_type == 'Transferee')
                                            <div
                                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                                <label for="previous_program"
                                                    class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                                    Previous Program
                                                </label>
                                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                    <input id="last_school_attended"
                                                        wire:model.defer="previous_program"
                                                        name="previous_program"
                                                        type="text"
                                                        autocomplete="previous_program"
                                                        class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    @error('previous_program')
                                                        <span class="mt-2 text-sm text-red-600">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div
                                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                                <label for="ha_recieved"
                                                    class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                                    Last School Attended
                                                </label>
                                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                    <input id="transferee_last_school_attended"
                                                        wire:model.defer="transferee_last_school_attended"
                                                        name="last_"
                                                        type="text"
                                                        autocomplete="last_"
                                                        class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    @error('transferee_last_school_attended')
                                                        <span class="mt-2 text-sm text-red-600">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div
                                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                                <label for="school_year_last_attended"
                                                    class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">School
                                                    Year Last Attended</label>
                                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                    <select id="school_year_last_attended"
                                                        name="school_year_last_attended"
                                                        wire:model="school_year_last_attended"
                                                        autocomplete="school_year_last_attended"
                                                        class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                                        @foreach ($schoolYears as $year)
                                                            <option value="{{ $year }}">{{ $year }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('school_year_last_attended')
                                                        <span class="mt-2 text-sm text-red-600">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endif

                                    @endif
                                </div>
                            </div>

                            <div class="pt-8 space-y-6 divide-y divide-gray-200 sm:pt-10 sm:space-y-5">
                                <div>
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Course Selection</h3>
                                </div>

                                <div class="space-y-6 divide-y divide-gray-200 sm:space-y-5">
                                    @if ($this->application->student_type == 'Freshmen')
                                        <div class="pt-6 sm:pt-5">
                                            <div role="group"
                                                aria-labelledby="label-email">
                                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-baseline">
                                                    <div>
                                                        <div class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700"
                                                            id="label-email">First Choice</div>
                                                    </div>
                                                    <div class="mt-4 sm:mt-0 sm:col-span-2">

                                                        <div>
                                                            <label for="first_choice"
                                                                class="block text-sm font-medium text-gray-700">Choose
                                                                Pogram</label>
                                                            <select id="first_choice"
                                                                wire:model.defer="first_choice"
                                                                name="first_choice"
                                                                class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                <option value=""></option>
                                                                @php
                                                                    $programs = \App\Models\Program::all();
                                                                @endphp
                                                                @foreach ($programs as $program)
                                                                    <option value="{{ $program->name }}">
                                                                        {{ $program->name }}
                                                                        ({{ $program->campus->name }})
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('first_choice')
                                                                <span class="mt-2 text-sm text-red-600">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-6 sm:pt-5">
                                            <div role="group"
                                                aria-labelledby="label-email">
                                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-baseline">
                                                    <div>
                                                        <div class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700"
                                                            id="label-email">Second Choice</div>
                                                    </div>
                                                    <div class="mt-4 sm:mt-0 sm:col-span-2">

                                                        <div>
                                                            <label for="second_choice"
                                                                class="block text-sm font-medium text-gray-700">Choose
                                                                Pogram</label>
                                                            <select id="second_choice"
                                                                name="second_choice"
                                                                wire:model.defer="second_choice"
                                                                class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                <option value=""></option>
                                                                @php
                                                                    $programs = \App\Models\Program::all();
                                                                @endphp
                                                                @foreach ($programs as $program)
                                                                    <option value="{{ $program->name }}">
                                                                        {{ $program->name }}
                                                                        ({{ $program->campus->name }})
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('second_choice')
                                                                <span class="mt-2 text-sm text-red-600">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif ($this->application->student_type == 'Transferee')
                                        <div class="pt-6 sm:pt-5">
                                            <div role="group"
                                                aria-labelledby="label-email">
                                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-baseline">
                                                    <div>
                                                        <div class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700"
                                                            id="label-email">Choose a Program</div>
                                                    </div>
                                                    <div class="mt-4 sm:mt-0 sm:col-span-2">

                                                        <div>
                                                            <label for="transferee_choice"
                                                                class="block text-sm font-medium text-gray-700">Choose
                                                                Pogram</label>
                                                            <select id="transferee_choice"
                                                                name="transferee_choice"
                                                                wire:model.defer="transferee_choice"
                                                                class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                <option value=""></option>
                                                                @php
                                                                    $programs = \App\Models\Program::all();
                                                                @endphp
                                                                @foreach ($programs as $program)
                                                                    <option value="{{ $program->name }}">
                                                                        {{ $program->name }}
                                                                        ({{ $program->campus->name }})
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('transferee_choice')
                                                                <span class="mt-2 text-sm text-red-600">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="pt-8 space-y-6 divide-y divide-gray-200 sm:pt-10 sm:space-y-5">
                                <div>
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Uploading of Requirements
                                    </h3>
                                </div>

                                <div class="space-y-6 divide-y divide-gray-200 sm:space-y-5">
                                    <div class="pt-6 sm:pt-5">
                                        <div role="group"
                                            aria-labelledby="label-email">
                                            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-baseline">
                                                <div>
                                                    <div class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700"
                                                        id="label-email">Student Photo</div>
                                                </div>
                                                <div class="mt-4 space-y-2 sm:mt-0 sm:col-span-2">
                                                    <div>
                                                        @if ($student_photo)
                                                            <img class="border rounded-md h-44"
                                                                src="{{ $student_photo->temporaryURL() }}"
                                                                alt="">
                                                        @endif

                                                    </div>
                                                    <div wire:loading
                                                        wire:target="student_photo">Uploading ...</div>
                                                    <input type="file"
                                                        wire:model="student_photo"
                                                        name="student_photo"
                                                        id="student_photo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($this->application->student_type == 'Freshmen')
                                        <div class="pt-6 sm:pt-5">
                                            <div role="group"
                                                aria-labelledby="label-email">
                                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-baseline">
                                                    <div>
                                                        <div class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700"
                                                            id="label-email">Scan Copy of your SHS ID</div>
                                                    </div>
                                                    <div class="mt-4 space-y-2 sm:mt-0 sm:col-span-2">
                                                        <div>
                                                            @if ($scan_shs_id)
                                                                <img class="border rounded-md h-44"
                                                                    src="{{ $scan_shs_id->temporaryURL() }}"
                                                                    alt="">
                                                            @endif

                                                        </div>
                                                        <div wire:loading
                                                            wire:target="scan_shs_id">Uploading ...</div>
                                                        <input type="file"
                                                            wire:model="scan_shs_id"
                                                            name="scan_shs_id"
                                                            id="scan_shs_id">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-6 sm:pt-5">
                                            <div role="group"
                                                aria-labelledby="label-email">
                                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-baseline">
                                                    <div>
                                                        <div class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700"
                                                            id="label-email">
                                                            Scan
                                                            Copy
                                                            of
                                                            your SHS First semester GPA
                                                        </div>
                                                    </div>
                                                    <div class="mt-4 space-y-2 sm:mt-0 sm:col-span-2">
                                                        <div>
                                                            @if ($first_sem_gpa_photo)
                                                                <img class="border rounded-md h-44"
                                                                    src="{{ $first_sem_gpa_photo->temporaryURL() }}"
                                                                    alt="">
                                                            @endif

                                                        </div>
                                                        <div wire:loading
                                                            wire:target="first_sem_gpa_photo">Uploading ...</div>
                                                        <input type="file"
                                                            wire:model="first_sem_gpa_photo"
                                                            name="first_sem_gpa_photo"
                                                            id="first_sem_gpa_photo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-6 sm:pt-5">
                                            <div role="group"
                                                aria-labelledby="label-email">
                                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-baseline">
                                                    <div>
                                                        <div class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700"
                                                            id="label-email">
                                                            School
                                                            Pricipal/Head Certification
                                                        </div>
                                                    </div>
                                                    <div class="mt-4 space-y-2 sm:mt-0 sm:col-span-2">
                                                        <div>
                                                            @if ($shs_cor_photo)
                                                                <img class="border rounded-md h-44"
                                                                    src="{{ $shs_cor_photo->temporaryURL() }}"
                                                                    alt="">
                                                            @endif
                                                        </div>
                                                        <div wire:loading
                                                            wire:target="shs_cor_photo">Uploading ...</div>
                                                        <input type="file"
                                                            wire:model="shs_cor_photo"
                                                            name="shs_cor_photo"
                                                            id="shs_cor_photo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="pt-5">
                            <div class="flex justify-end">

                                <button wire:click.prevent="saveApplication"
                                    type="submit"
                                    class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
            </x-user.shared.main-content>
        </div>
    </main>
</div>


{{-- <div>
    @include('student.pre-registration.steps-nav')
</div>
<div class="mt-2">
    <div x-cloak
        x-show="step=='1'">
        <livewire:student.pre-registration.program-choice :application="$this->application" />
    </div>
    <div x-cloak
        x-show="step=='2'">
        <livewire:student.pre-registration.personal-data :application="$this->application" />
    </div>
    <div x-cloak
        x-show="step=='3'">
        <livewire:student.pre-registration.requirements-upload :application="$this->application" />
    </div>
</div> --}}
