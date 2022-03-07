 <div>
     <div>
         <h1 class="text-2xl font-semibold text-gray-600">Step 2</h1>
     </div>
     <div class="divide-y divide-gray-200 sm:space-y-5">
         <div class="pt-2 space-y-6 sm:space-y-5">
             <div>
                 <div>
                     <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                     <p class="max-w-2xl mt-1 text-sm text-gray-500">Please review your
                         application
                         before
                         submitting</p>
                 </div>
             </div>
             <div class="space-y-6 sm:space-y-5">
                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
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
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>
                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
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
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>
                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                     <label for="date_of_birth"
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
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>

                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
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
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>
                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
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
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>
                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
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
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>

                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
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
                             autocomplete="family-name"
                             class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                         @error('date_of_birth')
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>
                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                     <label for="last-name"
                         class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Age
                     </label>
                     <div class="mt-1 sm:mt-0 sm:col-span-2">
                         <input type="number"
                             wire:model.defer="age"
                             name="age"
                             id="age"
                             autocomplete="age"
                             class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                         @error('age')
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>
                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
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
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>

                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
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
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>

                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
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
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>

                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
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
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>
                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
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
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>

                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
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
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>
                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
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
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>
                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
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
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>
                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
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
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>
                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                     <label for="school_year_graduated"
                         class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">School
                         Year
                         Graduated</label>
                     <div class="mt-1 sm:mt-0 sm:col-span-2">
                         <select id="sy_graduated"
                             name="sy_graduated"
                             wire:model="school_year_graduated"
                             autocomplete="sy_graduated"
                             class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                             @foreach ($schoolYears as $year)
                                 <option value="{{ $year }}">{{ $year }}
                                 </option>
                             @endforeach
                         </select>
                         @error('school_year_graduated')
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>
                 <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
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
                             <span class="text-red-600">{{ $message }}</span>
                         @enderror
                     </div>

                 </div>
             </div>
         </div>
     </div>
     <div x-on:next-3.window="step='3'"
         class="flex justify-between mt-5">
         <button x-on:click="step='1'"
             class="px-4 py-2 text-sm font-semibold text-gray-700 bg-gray-100 border border-gray-200 rounded-lg">
             Back to Step 1
         </button>
         <button wire:click="updateInfo"
             class="px-4 py-2 text-sm font-semibold text-white bg-blue-600 border border-blue-700 rounded-lg">
             Next
         </button>
     </div>
 </div>
