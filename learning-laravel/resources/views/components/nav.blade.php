<nav class="relative max-w-xs md:max-w-2xl lg:max-w-4xl xl:max-w-5xl xl:max-w-7xl mx-auto h-14 border-b-2 border-gray-300 mb-8">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mt-4">

        <div class="flex items-center justify-between">
            <div class="text-gray-900 font-black text-2xl lg:text-3xl flex items-center space-x-4">
                <a href="/" class="transition duration-200 transform hover:scale-105 hover:text-red-600">Learning <span class="text-red-600"><i class="fab fa-laravel"></i> Laravel</span></a>
            </div>

            <button id="burger" class="hover:text-red-600 focus:text-red-600 md:hidden ">
                <i class="fas fa-hamburger fa-2x"></i>
            </button>
        </div>

        <div id="menu" class="hidden mt-8 bg-gray-200 border-2 border-gray-300 rounded-xl p-4 md:mt-0 md:bg-transparent md:border-none md:rounded-none md:p-0 md:flex flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4 text-gray-700 font-bold xs:text-xl md:text-md lg:text-xl" style="z-index:9998;">

            <a href="/" class="hover:text-red-600 transition duration-200 transform hover:scale-105">Home</a>
            <a href="/#blog" class="hover:text-red-600 transition duration-200 transform hover:scale-105">Blog</a>

            @auth
            <div x-data="{ open:false }" class="relative">
                <button x-on:click="open = true" class="flex items-center text-gray-700 font-bold hover:text-red-600 transition duration-200 transform hover:scale-105 outline-none focus:text-red-600">{{ Auth::user()->name }} <i class="fas fa-chevron-down text-sm ml-1 mt-1"></i></button>

                <div x-show.transition="open" x-on:click.away="open = false" class="flex flex-col absolute right-0 w-40 mt-2 py-2 bg-white border border-gray-300 rounded-xl shadow-xl divide-y">
                    @if (auth()->user()->username === "lanoow")
                    <div class="py-1">
                        <a href="/panel/" class="block font-bold w-full text-left text-gray-900 hover:bg-gray-100 transition duration-200 px-2 py-1"><i class="fas fa-columns"></i> Admin Panel</a>
                    </div>
                    @endif
                    <form method="POST" action="/logout" class="py-1">
                        @csrf
                        <button class="block font-bold w-full text-left text-red-600 hover:bg-gray-100 hover:text-red-700 transition duration-200 px-2 py-1"><i class="fas fa-sign-out-alt"></i> Logout</button>
                    </form>
                </div>
            </div>
            {{-- <a href="/panel/" class="hover:text-red-600 transition duration-200 transform hover:scale-105">Panel</a> --}}
            @else
            <a href="/login" class="hover:text-red-600 transition duration-200 transform hover:scale-105">Login</a>
            <a href="/register" class="hover:text-red-600 transition duration-200 transform hover:scale-105">Register</a>
            @endauth

            <a href="/#newsletter" class="py-2 px-4 bg-red-600 hover:bg-red-500 text-white transition duration-200 transform hover:scale-105 rounded-xl">Join our Newsletter</a>

        </div>
    </div>

    <script type="text/javascript">
        const burger = document.querySelector('#burger');
        const menu = document.querySelector('#menu');

        burger.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</nav>
