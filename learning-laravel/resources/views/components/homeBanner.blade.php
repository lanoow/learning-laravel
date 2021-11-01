    @if (request()->routeIs('home'))
        <div class="h-96 mt-60 w-full flex px-8 xl:px-80">
            <div class="flex flex-col space-y-8 mt-16">
                <div class="flex flex-col">
                    <span class="text-6xl font-black text-gray-900">
                        Learning <span class="text-red-600"><i class="fab fa-laravel"></i> Laravel</span>
                    </span>
                    <span class="text-xl font-semibold text-gray-900">
                        We <i class="fas fa-heart text-red-600"></i> Open-Source!
                    </span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="https://github.com/lanoow/learning-laravel" target="__blank" class="py-3 px-4 bg-black hover:bg-gray-800 text-xl font-bold text-white rounded-xl transform hover:scale-105 focus:ring-4 ring-offset-2 outline-none focus:ring-gray-400 transition duration-200 shadow-lg hover:shadow-xl">
                        View on <span class="font-black mx-1"><i class="fab fa-github"></i> GitHub</span>
                    </a>
                </div>
            </div>
            <div style="z-index: -9998;" class="lg:transform lg:translate-x-1/4 lg:absolute lg:flex lg:items-center lg:w-3/4 xl:w-2/4 2xl:w-3/4 2xl:right-16 lg:h-96 hidden">
                <video poster="/hero_poster.jpg" playsinline autoplay muted loop>
                    <source src="/hero.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    @endif
