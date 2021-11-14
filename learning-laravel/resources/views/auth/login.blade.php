<x-layout>
    <x-error-alert />

    <form class="flex flex-col space-y-6 mx-auto max-w-xs items-center mt-12 px-10 py-16 rounded-xl" action="/login" method="post">
        @csrf
        <!-- Logo -->
        <a href="/" class="flex flex-col items-center mx-auto font-black text-3xl text-red-600">
            <i class="fab fa-laravel fa-2x"></i>
            <span>Login</span>
        </a>

        <!-- Inputs -->
        <div class="space-y-2">

            <input class="bg-gray-100 text-lg font-bold border-2 border-gray-400 rounded-lg py-2 px-4 outline-none focus:border-red-600 transition-all duration-200 shadow-lg" type="text" name="username" id="username" placeholder="Userame" value="{{ old('username') }}" required>

            <input class="bg-gray-100 text-lg font-bold border-2 border-gray-400 rounded-lg py-2 px-4 outline-none focus:border-red-600 transition-all duration-200 shadow-lg" type="password" name="password" id="password" placeholder="Password" required>
        </div>

        <!-- Buttons -->
        <div class="flex flex-col items-center space-y-2">
           <button class="flex items-center bg-red-600 text-white hover:bg-red-500 font-bold text-xl py-2 px-6 rounded-lg transition duration-200 shadow-lg transform hover:scale-105" type="submit" name="submit" id="submit">
                Login
                <svg xmlns="https://www.w3.org/2000/svg" class="ml-1 mt-0.5 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
           </button>
           <span class="font-bold">or</span>
           <a href="/register" class="text-red-600 hover:text-red-500 font-black text-xl transition duration-200">
              create an account
           </a>
        </div>

        <input type="text" name="antiBot" id="antiBot" hidden>
     </form>
</x-layout>
