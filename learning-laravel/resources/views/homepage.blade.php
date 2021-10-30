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
    <div class="w-full flex flex-col px-8 xl:max-w-7xl mx-auto mt-60 mb-32 space-y-8">
        <span class="text-5xl font-black text-gray-900 border-b-2 border-gray-400">Blog</span>
        <div class="grid grid-end grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
            @foreach ($posts as $post)
            <x-blogCard>
                <x-slot name="link">
                    /posts/{{ $post->id }}
                </x-slot>

                <x-slot name="photo">
                    {{ $post->photo }}
                </x-slot>

                <x-slot name="photoAlt">
                    {{ $post->title }} Image
                </x-slot>

                <x-slot name="title">
                    {{ $post->title }}
                </x-slot>

                <x-slot name="content">
                    {{ $post->excerpt }}..
                </x-slot>

                <x-slot name="button">
                    Read More <i class="fas fa-long-arrow-alt-right"></i>
                </x-slot>
            </x-blogCard>
            @endforeach
        </div>
    </div>
</body>
</html>
