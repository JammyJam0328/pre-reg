<div>
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
                <form class="">
                    <div class="mb-2">
                        <div>
                            <label wire:key="first_choice-12344"
                                class="block font-medium text-gray-700 sm:mt-px sm:pt-2">
                                First Choice Course : {{ $first_choice }}
                            </label>
                            <label wire:key="second_choice-12344"
                                class="block font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Second Choice Course : {{ $second_choice }}
                            </label>
                        </div>
                        <div class="pb-2 mt-2 space-y-2 border-b border-gray-300">
                            <div class="relative">
                                <div class="absolute inset-0 flex items-center"
                                    aria-hidden="true">
                                    <div class="w-full border-t border-gray-300"></div>
                                </div>
                                <div class="relative flex justify-start">
                                    <span class="pr-2 text-gray-500 bg-white"> List of Programs </span>
                                </div>
                            </div>
                            <div>
                                @foreach ($campuses as $key => $campus)
                                    <div x-data="{isOpen: false}"
                                        wire:key="campus-{{ $key }}"
                                        class="pb-2 border border-gray-200">
                                        <div class="flex p-2 space-x-2 bg-gray-100">
                                            <button type="button"
                                                x-on:click="isOpen=!isOpen"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    x-bind:class="{ 'rotate-0 duration-300': !isOpen, 'rotate-90 duration-300': isOpen }"
                                                    class="w-6 h-6"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 5l7 7-7 7" />
                                                </svg>
                                            </button>
                                            <span>{{ $campus->name }}</span>
                                        </div>
                                        <div x-cloak
                                            x-show="isOpen"
                                            x-collapse
                                            class="px-2 mt-2 space-y-3">
                                            @foreach ($campus->programs as $key => $program)
                                                <div wire:key="program-{{ $key }}-{{ $program->id }}"
                                                    class="relative flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <button wire:click.prevent="setChoice('{{ $program->name }}')"
                                                            wire:key="button-{{ $key }}-select">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="w-6 h-6 {{ $program->name == $first_choice || $program->name == $second_choice ? 'text-white fill-green-600' : '' }} "
                                                                fill="none"
                                                                viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="comments"
                                                            class="font-medium text-gray-700">{{ $program->name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="divide-y divide-gray-200 sm:space-y-5">
                        <div class="pt-2 space-y-6 sm:space-y-5">
                            <div>
                                <div>
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                                    <p class="max-w-2xl mt-1 text-sm text-gray-500">Please review your application
                                        before
                                        submitting</p>
                                </div>
                            </div>
                            <div class="space-y-6 sm:space-y-5">
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="first-name"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> First name
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text"
                                            name="first-name"
                                            id="first-name"
                                            autocomplete="given-name"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="middle-name"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Middle name
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text"
                                            name="middle-name"
                                            id="middle-name"
                                            autocomplete="middle-name"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="date_of_birth"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Last name
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text"
                                            name="last-name"
                                            id="last-name"
                                            autocomplete="family-name"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
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
                                            name="permanent_address"
                                            type="text"
                                            autocomplete="permanent_address"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="temporary_address"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Temporary
                                        Address
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input id="temporary_address"
                                            name="temporary_address"
                                            type="text"
                                            autocomplete="temporary_address"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="sex"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Sex
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <select id="sex"
                                            name="sex"
                                            autocomplete="sex"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                            <option value=""></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="last-name"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Date of Birth
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text"
                                            name="date_of_birth"
                                            id="date_of_birth"
                                            autocomplete="family-name"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="place_of_birth"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Place of Birth
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text"
                                            name="place_of_birth"
                                            id="place_of_birth"
                                            autocomplete="place_of_birth"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="nationality"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Nationality
                                    </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text"
                                            name="nationality"
                                            id="nationality"
                                            autocomplete="address-level2"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>

                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="region"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Citizenship</label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text"
                                            name="region"
                                            id="region"
                                            autocomplete="address-level1"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>

                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="postal-code"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Civil
                                        Status</label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text"
                                            name="postal-code"
                                            id="postal-code"
                                            autocomplete="postal-code"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="religion"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Religion</label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text"
                                            name="religion"
                                            id="religion"
                                            autocomplete="religion"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>

                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="tribe"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Tribe</label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text"
                                            name="tribe"
                                            id="tribe"
                                            autocomplete="tribe"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="school_last_attended"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">School Last
                                        Attended</label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text"
                                            name="school_last_attended"
                                            id="school_last_attended"
                                            autocomplete="school_last_attended"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="school_address"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">School
                                        Address</label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text"
                                            name="school_address"
                                            id="school_address"
                                            autocomplete="school_address"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="tribe"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Track/Strand
                                        Taken</label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text"
                                            name="tribe"
                                            id="tribe"
                                            autocomplete="tribe"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="school_year_graduated"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">School Year
                                        Graduated</label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text"
                                            name="school_year_graduated"
                                            id="school_year_graduated"
                                            autocomplete="school_year_graduated"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="ha_recieved"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Honor/Award
                                        received</label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text"
                                            name="ha_recieved"
                                            id="ha_recieved"
                                            autocomplete="ha_recieved"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="student_photo"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Upload a clear
                                        photo of you</label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="file"
                                            name="student_photo"
                                            id="student_photo"
                                            autocomplete="student_photo"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="gpa"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Scan Copy of
                                        your SHS First semester GPA</label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="file"
                                            name="gpa"
                                            id="gpa"
                                            autocomplete="gpa"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="gpa"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">School
                                        Pricipal/Head Certification</label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="file"
                                            name="gpa"
                                            id="gpa"
                                            autocomplete="gpa"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-5">
                        <div class="flex justify-end">
                            <a type="button"
                                href="{{ route('student.payment') }}"
                                class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</a>
                        </div>
                    </div>
                </form>
            </x-user.shared.main-content>
        </div>
    </main>
</div>
