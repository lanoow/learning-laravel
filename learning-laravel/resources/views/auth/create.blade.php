<x-layout>
    <div class="z-0 md:max-w-2xl mx-auto my-8">
        @if ($errors->any())
            <div class="flex flex-col bg-red-100 border-2 border-dashed border-red-200 rounded-xl p-4 mb-4 text-sm text-red-600" role="alert">
                @foreach ($errors->all() as $error)
                    <div class="flex items-center">
                        <svg xmlns="https://www.w3.org/2000/svg" class="w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <span class="font-black">{{ $error }}</span>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <form class="flex flex-col space-y-6 mx-auto max-w-xs items-center mt-12 px-10 py-16 rounded-xl" action="/register" method="post">
        @csrf
        <!-- Logo -->
        <a href="/" class="flex flex-col items-center mx-auto font-black text-3xl text-red-600">
            <i class="fab fa-laravel fa-2x"></i>
            <span>Register</span>
        </a>

        <!-- Inputs -->
        <div class="space-y-2">
            <input class="bg-gray-100 text-lg font-bold border-2 border-gray-400 rounded-lg py-2 px-4 outline-none focus:border-red-600 transition-all duration-200 shadow-lg" type="text" name="name" id="name" placeholder="Name" autocomplete="off" value="{{ old('name') }}" required>

            <input class="bg-gray-100 text-lg font-bold border-2 border-gray-400 rounded-lg py-2 px-4 outline-none focus:border-red-600 transition-all duration-200 shadow-lg" type="text" name="username" id="username" placeholder="Userame" autocomplete="off" value="{{ old('username') }}" required>

           <input class="bg-gray-100 text-lg font-bold border-2 border-gray-400 rounded-lg py-2 px-4 outline-none focus:border-red-600 transition-all duration-200 shadow-lg" type="email" name="email" id="email" placeholder="Email" autocomplete="off" value="{{ old('email') }}" required>

           <input class="bg-gray-100 text-lg font-bold border-2 border-gray-400 rounded-lg py-2 px-4 outline-none focus:border-red-600 transition-all duration-200 shadow-lg" type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
        </div>

        <!-- Buttons -->
        <div class="flex flex-col items-center space-y-2">
           <button class="flex items-center bg-red-600 text-white hover:bg-red-500 font-bold text-xl py-2 px-6 rounded-lg transition duration-200 shadow-lg transform hover:scale-105" type="submit" name="submit" id="submit">
              Register
              <svg xmlns="https://www.w3.org/2000/svg" class="ml-1 mt-0.5 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
           </button>
           <span class="font-bold">or</span>
           <a href="/login" class="text-red-600 hover:text-red-500 font-black text-xl transition duration-200">
              log in
           </a>
        </div>

        <input type="text" name="antiBot" id="antiBot" hidden>
     </form>
</x-layout>
