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
                    @include('student.pre-registration.steps-nav')
                </div>
                {{-- steps starts here --}}
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
                </div>
            </x-user.shared.main-content>
        </div>
    </main>
</div>
