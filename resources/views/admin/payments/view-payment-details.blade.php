<div class="space-y-4">
    <div class="overflow-hidden bg-white border rounded-md ">
        <div class="flex justify-between px-4 py-5 sm:px-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Payment Details</h3>
            <div class="flex space-x-2">
                <button wire:click.prevent="$set('action','showList')"
                    type="button"
                    wire:loading.attr="disabled"
                    wire:target="$set"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-700 uppercase bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <span wire:loading.remove
                        wire:target="$set">Return</span>
                    <span wire:loading.flex
                        wire:target="$set"
                        class="flex space-x-1">
                        <x-global.spinner class="w-4 h-4 fill-slate-700" />
                        <span>
                            Loading..
                        </span>
                    </span>
                </button>
                <div>
                    @if ($this->payment->status == 'review')
                        <button wire:click.prevent="approveConfirmation('{{ $this->payment->id }}')"
                            wire:loading.attr="disabled"
                            wire:target="approveConfirmation"
                            type="button"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-white uppercase bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                            Approve
                        </button>
                    @endif
                </div>
            </div>
        </div>
        <div class="px-4 py-5 border-t border-gray-200 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Amount</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $this->payment->amount }}</dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Application for</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $this->payment->portal->title }}
                    </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Proof of Payments</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <section class="overflow-hidden text-gray-700 ">
                            <div class="container px-2 py-2 mx-auto lg:pt-12 ">
                                <div class="flex flex-wrap -m-1 space-x-2 md:-m-2">
                                    @foreach ($this->payment->proofs as $proofs)
                                        <div class="flex flex-wrap w-1/3">
                                            <div
                                                class="w-full p-3 rounded-md bg-gradient-to-tr from-gray-400 to-gray-700">
                                                <a href="http://"
                                                    target="_blank"
                                                    rel="noopener noreferrer">
                                                    <img alt="gallery"
                                                        class="block object-cover object-center w-full h-full rounded-lg"
                                                        src="/storage/{{ $proofs->image }}"></a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                        </section>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
    <div class="relative">
        <div class="absolute inset-0 flex items-center"
            aria-hidden="true">
            <div class="w-full border-t border-gray-300"></div>
        </div>
        <div class="relative flex justify-center">
            <span class="px-2 text-gray-500 bg-white">
                <img src="{{ asset('images/sksu1.png') }}"
                    class="w-3 h-3"
                    alt="">
            </span>
        </div>
    </div>

    <div class="overflow-hidden bg-white border sm:rounded-lg">
        <div class="flex justify-between px-4 py-5 sm:px-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Application Details</h3>

        </div>
        <div class="px-4 py-5 border-t border-gray-200 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Student Type</dt>
                    <dd class="mt-1 text-sm text-gray-900 uppercase sm:mt-0 sm:col-span-2">
                        {{ $this->payment->application->student_type }}</dd>
                </div>
                @if ($this->payment->application->student_type == 'Freshmen')
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">First choice</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $this->payment->application->first_choice }}</dd>
                    </div>
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Second choice</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $this->payment->application->second_choice }}</dd>
                    </div>
                @elseif($this->payment->application->student_type == 'Transferee')
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Choosen Program</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $this->payment->application->transferee_choice }}</dd>
                    </div>
                @endif
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">First name</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $this->payment->application->first_name }}</dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Middle name</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $this->payment->application->middle_name }}</dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Last name</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $this->payment->application->last_name }}</dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Sex</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $this->payment->application->sex }}</dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Age</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $this->payment->application->age }}</dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Date of Birth</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $this->payment->application->date_of_birth }}</dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Place of Birth</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $this->payment->application->place_of_birth }}</dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Nationality</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $this->payment->application->nationality }}</dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Citizenship</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $this->payment->application->citizenship }}</dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Tribe</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $this->payment->application->tribe }}</dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Religion</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $this->payment->application->religion }}</dd>
                </div>
                @if ($this->payment->application->student_type == 'Freshmen')
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">School Last Attended</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $this->payment->application->school_last_attended }}</dd>
                    </div>
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">School Address</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $this->payment->application->school_address }}</dd>
                    </div>
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Track/Strand Taken</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $this->payment->application->track_taken }}</dd>
                    </div>
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">School Year Graduated</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $this->payment->application->school_year_graduated }}</dd>
                    </div>
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Honor/Award received</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $this->payment->application->awards_received }}</dd>
                    </div>
                @elseif ($this->payment->application->student_type == 'Transferee')
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Last School Attended</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $this->payment->application->transferee_last_school_attended }}</dd>
                    </div>
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Last School Year Attended</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $this->payment->application->school_year_last_attended }}</dd>
                    </div>
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Previous program</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $this->payment->application->previous_program }}</dd>
                    </div>
                @endif
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Student Photo</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <x-global.image-card>
                            <img src="/storage/{{ $this->payment->application->student_photo }}"
                                alt="Student Photo"
                                class="h-72">
                        </x-global.image-card>
                    </dd>
                </div>
                @if ($this->payment->application->student_type == 'Freshmen')
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">SHS School ID</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <x-global.image-card>
                                <img src="/storage/{{ $this->payment->application->scan_shs_id }}"
                                    alt="Student Photo"
                                    class="h-72">
                            </x-global.image-card>
                        </dd>
                    </div>
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">SHS First Sem GPA Photo</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <x-global.image-card>
                                <img src="/storage/{{ $this->payment->application->first_sem_gpa_photo }}"
                                    alt="Student Photo"
                                    class="h-72">
                            </x-global.image-card>
                        </dd>
                    </div>
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">SHS Principal/Head Certification</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <x-global.image-card>
                                <img src="/storage/{{ $this->payment->application->shs_cor_photo }}"
                                    alt="Student Photo"
                                    class="h-72">
                            </x-global.image-card>
                        </dd>
                    </div>
                @endif

            </dl>
        </div>
    </div>

</div>
