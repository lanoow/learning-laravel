<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">

    <title>Learning Laravel</title>

    <meta name="description" content="The website of Learning Laravel -> https://github.com/lanoow/learning-laravel">

    <link rel="stylesheet" href="https://cdn.blazingdev.xyz/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.blazingdev.xyz/fontawesome/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <style>
        .font { font-family: "Zen Kaku Gothic Antique", Arial, Helvetica, sans-serif !important; }
    </style>
</head>
<body class="font overflow-x-hidden">
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
    <div class="w-full flex flex-col px-8 xl:max-w-7xl 2xl:max-w-none 2xl:px-80 mx-auto mt-60 mb-32 space-y-8">
        <div class="flex items-center justify-between border-b-2 border-gray-400">
            @if (request()->routeIs('home'))
                <span class="text-5xl font-black text-gray-900">Blog</span>
            @else
                <span class="text-5xl font-black text-gray-900">Blog</span>
                <a href="/" class="text-xl font-black text-gray-700 hover:text-red-600 uppercase transition duration-200">Go Home</a>
            @endif
        </div>
        <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 items-center space-x-4">
            <style>.dropdown:focus-within .dropdown-menu{opacity:1;transform:translate(0) scale(1);visibility:visible;}</style>
            {{-- Category --}}
            <div class="dropdown" style="z-index: 1;">
                <button class="relative items-center flex lg:inline-flex items-center bg-gray-100 border border-gray-300 rounded-xl py-2 px-4 transition duration-200 ease-in-out" type="button" aria-haspopup="true" aria-expanded="true">
                   <span class="font-black text-lg">{{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}</span>
                   <svg xmlns="https://www.w3.org/2000/svg" class="h-4 w-4 ml-1 pr-px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                   </svg>
                </button>
                <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-left -translate-y-2 scale-95 z-50">
                    <div class="absolute left-0 w-32 mt-2 origin-top-left bg-white border border-gray-200 divide-y divide-gray-100 rounded-lg shadow-lg outline-none z-50" role="menu">
                        <div class="py-1 text-gray-700">
                            <a href="/" class="hover:text-gray-900 hover:bg-gray-100 flex justify-between w-full font-semibold px-4 py-2 text-md leading-5 text-left transition duration-200 ease-in-out {{ request()->routeIs('home') ? 'bg-gray-100 text-red-600' : '' }}"  role="menuitem">All</a>
                            @foreach ($categories as $category)
                                <a href="/category/{{ $category->slug }}" class="hover:text-gray-900 hover:bg-gray-100 flex justify-between w-full font-semibold px-4 py-2 text-md leading-5 text-left transition duration-200 ease-in-out {{ isset($currentCategory) && $currentCategory->is($category) ? 'bg-gray-100 text-red-600' : '' }}"  role="menuitem">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- Search --}}
            <div class="flex items-center space-x-4">
                <div class="relative flex lg:inline-flex items-center bg-gray-100 border border-gray-300 rounded-xl px-4 py-2">
                    <form method="GET" action="#">
                        <input type="search" name="s" placeholder="Search for something" class="bg-transparent placeholder-black font-black text-lg outline-none" autocomplete="off" value="{{ request('s') }}">
                    </form>
                </div>
                @if (request('s'))
                        <a href="/" class="text-xl font-black text-gray-700 hover:text-red-600 uppercase transition duration-200">
                            Clear
                        </a>
                @endif
            </div>
        </div>
        <div class="grid grid-end grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
            @if ($posts->count() >= 1)
            @foreach ($posts as $post)
                <x-blogCard :post="$post"></x-blogCard>
            @endforeach
        </div>
        @else
        <span class="text-5xl font-black text-gray-900">Oh gawd! :(<br>There are no posts to show..</span>
        @endif
    </div>
</body>
</html>
