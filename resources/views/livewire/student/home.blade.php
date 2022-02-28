<div>
    <main>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-user.shared.header title="Home">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
            </x-user.shared.header>
            <x-user.shared.main-content>
                <div>
                    @forelse ($portals as $portal)
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6"
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
                                <h3 class="text-sm font-medium ">{{ $portal->title }}</h3>
                                <div class="mt-2 text-sm ">
                                    <ul role="list"
                                        class="pl-5 space-y-1 list-disc">
                                        <li>Application for Pre admission test for the school year
                                            {{ $portal->school_year }}
                                            is now
                                            available</li>
                                        <li>Fill up the form <a
                                                href="{{ route('student.pre-registration', [
                                                    'portal_id' => $portal->id,
                                                ]) }}"
                                                class="text-blue-600 underline">here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div>
                            <h3 class="text-sm font-medium ">No portal available</h3>
                        </div>
                    @endforelse
                </div>
            </x-user.shared.main-content>
        </div>
    </main>
</div>
