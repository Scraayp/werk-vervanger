<x-app-layout>

    <div id="hero" class="mt-20 text-center">
        <h1 class="text-black dark:text-white text-6xl font-extrabold">Werk Vervaning</h1>
        <p class="text-black dark:text-gray-300 text-xl mt-5 leading-6">Een makkelijkere manier om vervanging te regelen
            van je werk!</p>
        <div id="hero-buttons" class="mt-6">
            @if(Auth::check())
                    <a
                        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" href="{{route('dashboard')}}">
                        Dashboard
                    </a>
            @else
                <a
                    class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" href="{{route('register')}}">
                    Registreer
                </a>
                <a
                    class="text-white bg-cyan-500 hover:bg-cyan-600 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" href="{{route('login')}}">
                    Login
                </a>
            @endif

        </div>
    </div>
</x-app-layout>
