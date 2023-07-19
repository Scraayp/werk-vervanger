<x-app-layout>
    <div class="mx-auto max-w-7xl pt-16 lg:flex lg:gap-x-16 lg:px-8">
        <aside
            class="flex overflow-x-auto border-b border-gray-900/5 py-4 lg:block lg:w-64 lg:flex-none lg:border-0 lg:py-20">
            <nav class="flex-none px-4 sm:px-6 lg:px-0">
                <ul role="list" class="flex gap-x-3 gap-y-1 whitespace-nowrap lg:flex-col">
                    <li>
                        <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                        <a href="#"
                           class="bg-gray-50 text-indigo-600 group flex gap-x-3 rounded-md py-2 pl-2 pr-3 text-sm leading-6 font-semibold">
                            <svg class="h-6 w-6 shrink-0 text-indigo-600" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            General
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="text-gray-300 hover:text-blue-600 hover:bg-bg-gray-100 dark:text-white group flex gap-x-3 rounded-md py-2 pl-2 pr-3 text-sm leading-6 font-semibold ">
                            <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none"
                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33"/>
                            </svg>
                            Security
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="text-gray-300 hover:text-blue-600 hover:bg-bg-gray-100 dark:text-white group flex gap-x-3 rounded-md py-2 pl-2 pr-3 text-sm leading-6 font-semibold ">
                            <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none"
                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/>
                            </svg>
                            Notifications
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="px-4 py-16 sm:px-6 lg:flex-auto lg:px-0 lg:py-20">
            <div class="mx-auto max-w-2xl space-y-16 sm:space-y-20 lg:mx-0 lg:max-w-none">
                <div>
                    <div class="flex justify-between">
                        <div>
                            <h2 class="text-base font-semibold leading-7 text-gray-900 dark:text-white">Profiel</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-500 ">Deze informatie is wat bij ons bekend is,
                                hou het up
                                to date aub.</p>
                        </div>
                        <button
                            data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                            class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Wijzig
                        </button>


                        <!-- Main modal -->
                        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                             class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button"
                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="authentication-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                             fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Wijzig jouw
                                            persoon gegevens</h3>
                                        <form class="space-y-6" action="{{route('profile.edit', auth()->user()->id)}}"
                                              method="post">
                                            @csrf
                                            <div>
                                                <label for="name"
                                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jouw
                                                    Naam</label>
                                                <input type="text" name="name" id="name"
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                       value="{{auth()->user()->name}}" required>
                                            </div>
                                            <div>
                                                <label for="email"
                                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jouw
                                                    Email</label>
                                                <input type="email" name="email" id="email"
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                       value="{{auth()->user()->email}}" required>
                                            </div>
                                            <div>
                                                <label for="department"
                                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jouw
                                                    Afdeling</label>
                                                <input type="text" name="department" id="department"
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                       value="{{auth()->user()->department}}" required>
                                            </div>
                                            <div>
                                                <label for="role"
                                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jouw
                                                    Rol</label>
                                                <input type="text" name="role" id="role" disabled
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                       value="{{auth()->user()->role}}" required>
                                            </div>
                                            <button type="submit"
                                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Wijzig
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <dl class="mt-6 space-y-6 divide-y divide-gray-100 border-t border-gray-200 text-sm leading-6">
                        <div class="pt-6 sm:flex">
                            <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6 dark:text-white">Naam</dt>
                            <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                                <div class="text-gray-900 dark:text-white">{{auth()->user()->name}}</div>

                            </dd>
                        </div>
                        <div class="pt-6 sm:flex">
                            <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6 dark:text-white">Email
                            </dt>
                            <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                                <div class="text-gray-900 dark:text-white">{{auth()->user()->email}}</div>

                            </dd>
                        </div>
                        <div class="pt-6 sm:flex">
                            <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6 dark:text-white">Email
                                Verificatie
                            </dt>
                            <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                                <div
                                    class="text-gray-900 dark:text-white">{{ auth()->user()->hasVerifiedEmail() ? 'Email geverifeerd!' : 'Niet geverifeerd.'}}</div>
                                @if(!auth()->user()->hasVerifiedEmail())
                                    <form action="{{route('verification.send')}}" method="post">
                                        @csrf
                                        <button type="submit"
                                                class="font-semibold text-indigo-600 hover:text-indigo-500 ">
                                            Verifeer
                                        </button>
                                    </form>
                                @endif
                            </dd>
                        </div>
                        <div class="pt-6 sm:flex">
                            <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6 dark:text-white">
                                Wachtwoord
                            </dt>
                            <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                                <button
                                    data-modal-target="password-modal" data-modal-toggle="password-modal"
                                    class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Wachtwoord Wijzigen
                                </button>
                            </dd>


                        </div>
                        {{--                            password modal --}}
                        <div id="password-modal" tabindex="-1" aria-hidden="true"
                             class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button"
                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="password-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                             fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Wijzig jouw
                                            wachtwoord</h3>
                                        <form class="space-y-6"
                                              action="{{route('profile.editpass', auth()->user()->id)}}" method="post">
                                            @csrf
                                            <div>
                                                <label for="password"
                                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wachtwoord</label>
                                                <input type="password" name="password" id="password"
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                       required
                                                       placeholder="••••••••">
                                            </div>
                                            <div>
                                                <label for="password_confirmation"
                                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wachtwoord Confirmatie</label>
                                                <input type="password" name="password_confirmation" id="password_confirmation"
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                       required
                                                       placeholder="••••••••">
                                            </div>
                                            <button type="submit"
                                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Wijzig
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                        -------------------------------------------------------------- --}}
                        <div class="pt-6 sm:flex">
                            <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6 dark:text-white">
                                Afdeling
                            </dt>
                            <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                                <div class="text-gray-900 dark:text-white">{{auth()->user()->department}}</div>
                            </dd>
                        </div>
                        <div class="pt-6 sm:flex">
                            <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6 dark:text-white">Rol</dt>
                            <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                                <div class="text-gray-900 dark:text-white">{{auth()->user()->role}}</div>
                                {{--                                <button type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Wijzig</button>--}}
                            </dd>
                        </div>
                    </dl>
                </div>

                {{--                <div>--}}
                {{--                    <h2 class="text-base font-semibold leading-7 text-gray-900">Bank accounts</h2>--}}
                {{--                    <p class="mt-1 text-sm leading-6 text-gray-500">Connect bank accounts to your account.</p>--}}

                {{--                    <ul role="list" class="mt-6 divide-y divide-gray-100 border-t border-gray-200 text-sm leading-6">--}}
                {{--                        <li class="flex justify-between gap-x-6 py-6">--}}
                {{--                            <div class="font-medium text-gray-900">TD Canada Trust</div>--}}
                {{--                            <button type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Update</button>--}}
                {{--                        </li>--}}
                {{--                        <li class="flex justify-between gap-x-6 py-6">--}}
                {{--                            <div class="font-medium text-gray-900">Royal Bank of Canada</div>--}}
                {{--                            <button type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Update</button>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}

                {{--                    <div class="flex border-t border-gray-100 pt-6">--}}
                {{--                        <button type="button" class="text-sm font-semibold leading-6 text-indigo-600 hover:text-indigo-500"><span aria-hidden="true">+</span> Add another bank</button>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div>--}}
                {{--                    <h2 class="text-base font-semibold leading-7 text-gray-900">Integrations</h2>--}}
                {{--                    <p class="mt-1 text-sm leading-6 text-gray-500">Connect applications to your account.</p>--}}

                {{--                    <ul role="list" class="mt-6 divide-y divide-gray-100 border-t border-gray-200 text-sm leading-6">--}}
                {{--                        <li class="flex justify-between gap-x-6 py-6">--}}
                {{--                            <div class="font-medium text-gray-900">QuickBooks</div>--}}
                {{--                            <button type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Update</button>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}

                {{--                    <div class="flex border-t border-gray-100 pt-6">--}}
                {{--                        <button type="button" class="text-sm font-semibold leading-6 text-indigo-600 hover:text-indigo-500"><span aria-hidden="true">+</span> Add another application</button>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div>--}}
                {{--                    <h2 class="text-base font-semibold leading-7 text-gray-900">Language and dates</h2>--}}
                {{--                    <p class="mt-1 text-sm leading-6 text-gray-500">Choose what language and date format to use throughout your account.</p>--}}

                {{--                    <dl class="mt-6 space-y-6 divide-y divide-gray-100 border-t border-gray-200 text-sm leading-6">--}}
                {{--                        <div class="pt-6 sm:flex">--}}
                {{--                            <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">Language</dt>--}}
                {{--                            <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">--}}
                {{--                                <div class="text-gray-900">English</div>--}}
                {{--                                <button type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Update</button>--}}
                {{--                            </dd>--}}
                {{--                        </div>--}}
                {{--                        <div class="pt-6 sm:flex">--}}
                {{--                            <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">Date format</dt>--}}
                {{--                            <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">--}}
                {{--                                <div class="text-gray-900">DD-MM-YYYY</div>--}}
                {{--                                <button type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Update</button>--}}
                {{--                            </dd>--}}
                {{--                        </div>--}}
                {{--                        <div class="flex pt-6">--}}
                {{--                            <dt class="w-64 flex-none pr-6 font-medium text-gray-900" id="timezone-option-label">Automatic timezone</dt>--}}
                {{--                            <dd class="flex flex-auto items-center justify-end">--}}
                {{--                                <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->--}}
                {{--                                <button type="button" class="bg-gray-200 flex w-8 cursor-pointer rounded-full p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" role="switch" aria-checked="true" aria-labelledby="timezone-option-label">--}}
                {{--                                    <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->--}}
                {{--                                    <span aria-hidden="true" class="translate-x-0 h-4 w-4 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>--}}
                {{--                                </button>--}}
                {{--                            </dd>--}}
                {{--                        </div>--}}
                {{--                    </dl>--}}
                {{--                </div>--}}
            </div>
        </main>
    </div>

</x-app-layout>
