<div>
    <main>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-user.shared.header title="Schedules">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd" />
                </svg>
            </x-user.shared.header>
            <x-user.shared.main-content>

                <section>
                    <h2 class="font-semibold text-gray-900">Examination Schedule</h2>
                    <ol class="mt-2 text-sm leading-6 text-gray-500 divide-y divide-gray-200">

                        <li class="py-4 sm:flex">
                            <time datetime="2022-01-19"
                                class="flex-none w-28">Thu, Jan 13</time>
                            <p class="flex-auto mt-2 font-semibold text-gray-900 sm:mt-0">First Batch</p>
                            <p class="flex-none sm:ml-6"> <time datetime="2022-01-13T16:30">All day</time></p>
                        </li>
                        <li class="py-4 sm:flex">
                            <time datetime="2022-01-20"
                                class="flex-none w-28">Fri, Jan 14</time>
                            <p class="flex-auto mt-2 font-semibold text-gray-900 sm:mt-0">Second Batch</p>
                            <p class="flex-none sm:ml-6">All day</p>
                        </li>
                        <li class="py-4 sm:flex">
                            <time datetime="2022-01-18"
                                class="flex-none w-28">Mon, Jan 17</time>
                            <p class="flex-auto mt-2 font-semibold text-gray-900 sm:mt-0">Third Batch</p>
                            <p class="flex-none sm:ml-6"> <time datetime="2022-01-17T10:15">All day</time></p>
                        </li>
                    </ol>
                </section>
            </x-user.shared.main-content>
        </div>
    </main>
</div>
