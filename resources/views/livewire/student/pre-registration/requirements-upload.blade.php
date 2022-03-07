<div>
    <div>
        <h1 class="text-2xl font-semibold text-gray-600">Step 3</h1>
    </div>
    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
        <label for="student_photo"
            class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
            Upload a clear photo of you
        </label>
        <div class="mt-1 sm:mt-0 sm:col-span-2">
            <div>
                @if ($studentPhotoNewUrl != null)
                    <div class="flex h-40">
                        <div class="h-full p-3 rounded-md bg-gradient-to-tr from-gray-400 to-gray-700">
                            <img class="h-full"
                                src="{{ URL::to('/storage') }}/{{ $studentPhotoNewUrl }}"
                                alt="Student-Photo">
                        </div>
                    </div>
                @endif
            </div>
            <div class="relative h-8 my-2">
                <button type="button"
                    class="px-2 py-1 text-white bg-blue-600 group-hover:bg-blue-700 border rounded-md shadow">{{ $studentPhotoNewUrl == null ? 'Upload photo' : 'Change photo' }}</button>
                <input type="file"
                    wire:model="student_photo"
                    name="student_photo"
                    id="student_photo"
                    class="absolute top-0 left-0 h-full opacity-0 w-28"
                    autocomplete="student_photo"
                    class="block w-full max-w-lg p-2 border-gray-300 rounded-md shadow-sm ring-indigo-500 sm:max-w-xs sm:text-sm">
            </div>
        </div>
    </div>
    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
        <label for="gpa"
            class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Scan
            Copy
            of
            your SHS First semester GPA</label>
        <div class="mt-1 sm:mt-0 sm:col-span-2">
            <div>
                @if ($firstSemGpaPhotoNewUrl != null)
                    <div class="flex h-40">
                        <div class="h-full p-3 rounded-md bg-gradient-to-tr from-gray-400 to-gray-700">
                            <img class="h-full"
                                src="{{ URL::to('/storage') }}/{{ $firstSemGpaPhotoNewUrl }}"
                                alt="Student-Photo">
                        </div>
                    </div>
                @endif
            </div>
            <div class="relative h-8 my-2">
                <button type="button"
                    class="px-2 py-1 text-white bg-blue-600 group-hover:bg-blue-700 border rounded-md shadow">{{ $firstSemGpaPhotoNewUrl == '' ? 'Upload photo' : 'Change photo' }}</button>
                <input type="file"
                    wire:model="first_sem_gpa_photo"
                    name="gpa"
                    id="gpa"
                    class="absolute top-0 left-0 h-full opacity-0 w-28"
                    autocomplete="gpa"
                    class="block w-full max-w-lg p-2 border-gray-300 rounded-md shadow-sm ring-indigo-500 sm:max-w-xs sm:text-sm">
            </div>
        </div>
    </div>
    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
        <label for="gpa"
            class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">School
            Pricipal/Head Certification</label>
        <div class="mt-1 sm:mt-0 sm:col-span-2">
            <div>
                @if ($shsCorPhotoNewUrl != null)
                    <div class="flex h-40">
                        <div class="h-full p-3 rounded-md bg-gradient-to-tr from-gray-400 to-gray-700">
                            <img class="h-full"
                                src="{{ URL::to('/storage') }}/{{ $shsCorPhotoNewUrl }}"
                                alt="Student-Photo">
                        </div>
                    </div>
                @endif
            </div>
            <div class="relative h-8 my-2">
                <button type="button"
                    class="px-2 py-1 text-white bg-blue-600 group-hover:bg-blue-700 border rounded-md shadow">{{ $shsCorPhotoNewUrl == '' ? 'Upload photo' : 'Change photo' }}</button>
                <input type="file"
                    wire:model="shs_cor_photo"
                    name="gpa"
                    id="gpa"
                    class="absolute top-0 left-0 h-full opacity-0 w-28"
                    autocomplete="gpa"
                    class="block w-full max-w-lg p-2 border-gray-300 rounded-md shadow-sm ring-indigo-500 sm:max-w-xs sm:text-sm">
            </div>
        </div>
    </div>
    <div class="flex justify-between mt-5">
        <button x-on:click="step='2'"
            class="px-4 py-2 text-sm font-semibold text-gray-700 bg-gray-100 border border-gray-200 rounded-lg">
            Back to Step 2
        </button>
        <button wire:click="finalize"
            class="px-4 py-2 text-sm font-semibold text-white bg-blue-600 border border-blue-700 rounded-lg hover:border">
            Finalize
        </button>
    </div>
</div>
