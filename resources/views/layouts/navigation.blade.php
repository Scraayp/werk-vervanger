<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{route('index')}}" class="flex items-center">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo"/>
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Werk Vervanger</span>
        </a>
        <div class="flex md:order-2">
            @if(Auth::check())
                <a href="{{route('shift.new')}}"
                   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hidden md:block">Nieuwe
                    Shift Vervanging</a>
            @else
                <a href="{{route('login')}}"
                   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</a>

            @endif

            <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        @if(Auth::check())
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{route('index')}}"
                            @class(["block py-2 pl-3 pr-4 dark:text-white text-black rounded md:bg-transparent md:p-0 hover:text-blue-600", "dark:text-blue-500" => request()->routeIs('index')] )>Home</a>
                    </li>
                    <li>
                        <a href="{{route('dashboard')}}"
                            @class(["block py-2 pl-3 pr-4 dark:text-white text-black rounded md:bg-transparent md:p-0 hover:text-blue-600", "dark:text-blue-500" =>request()->routeIs('dashboard')] )>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('profile')}}"
                            @class(["block py-2 pl-3 pr-4 dark:text-white text-black rounded md:bg-transparent md:p-0 hover:text-blue-600", "dark:text-blue-500" =>request()->routeIs('profile')] )>Profiel</a>
                    </li>
                    <li>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button type="submit"
                                @class(["block py-2 pl-3 pr-4 dark:text-white text-black rounded md:bg-transparent md:p-0 hover:text-blue-600"] )>
                                Log Uit
                            </button>
                        </form>
                    </li>
                </ul>
            </div>

        @else
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{route('index')}}"
                            @class(["block py-2 pl-3 pr-4 dark:text-white text-black rounded md:bg-transparent md:p-0 hover:text-blue-600", "dark:text-blue-500" => request()->routeIs('index')] )>Home</a>
                    </li>
                    <li>
                        <a href="{{route('login')}}"
                            @class(["block py-2 pl-3 pr-4 dark:text-white text-black rounded md:bg-transparent md:p-0 hover:text-blue-600", "dark:text-blue-500" => request()->routeIs('index')] )>Login</a>
                    </li>
                </ul>
            </div>
        @endif

    </div>
</nav>
