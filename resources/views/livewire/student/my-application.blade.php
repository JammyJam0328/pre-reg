<div>
    <main>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-user.shared.header title="My Application">
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
                <div class="my-2 space-y-2 text-gray-700">
                    @forelse ($applications as $application)
                        <div class="p-3 border rounded-md">
                            <h1 class="font-semibold">
                                {{ $application->portal->title }}
                            </h1>
                            @if ($application->status == 'approved')
                                <div class="flex space-x-2">
                                    <span>Your
                                        application is approved, please proceed to payments</span>
                                    <a
                                        href="{{ route('student.payment-section', [
                                            'user_id' => auth()->user()->id,
                                            'application_id' => $application->id,
                                        ]) }}"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5 text-blue-700 animate-pulse"
                                            viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                                                clip-rule="evenodd" />
                                        </svg></a>
                                </div>
                            @elseif ($application->status == 'payment-submitted')
                                <span>Your payment is now under validation. We will notify you for your payment
                                    updates.</span>
                            @elseif ($application->status == 'payment-approved')
                                <div class="flex space-x-2">
                                    <span>Your payment has been approved. You can now select schedule</span>
                                    <a
                                        href="{{ route('student.select-schedule', ['application_id' => $application->id]) }}"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5 text-blue-700 animate-pulse"
                                            viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                                                clip-rule="evenodd" />
                                        </svg></a>
                                </div>
                            @elseif ($application->status == 'schedule-selected')
                                <div class="flex space-x-2">
                                    <span>
                                        Your schedule has been selected. View your examination permit
                                    </span>
                                    <a
                                        href="{{ route('student.my-permit', ['application_id' => $application->id]) }}"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5 text-blue-700 animate-pulse"
                                            viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                                                clip-rule="evenodd" />
                                        </svg></a>
                                </div>
                            @endif
                        </div>
                    @empty
                    @endforelse
                </div>

            </x-user.shared.main-content>
        </div>
    </main>
</div>
