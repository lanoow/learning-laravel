<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">

    <title>Post | Learning Laravel</title>

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
    <x-blogPost>
        <x-slot name="photo">
            {{ $post->photo }}
        </x-slot>

        <x-slot name="photoAlt">
            {{ $post->photoAlt }}
        </x-slot>

        <x-slot name="title">
            {{ $post->title }}
        </x-slot>

        <x-slot name="category">
            {{ $post->category->name }}
        </x-slot>

        <x-slot name="categorySlug">
            {{ $post->category->slug }}
        </x-slot>

        <x-slot name="author">
            {{ $post->author->name }}
        </x-slot>

        <x-slot name="content">
            {{ $post->content }}
        </x-slot>

        <x-slot name="link">
            /
        </x-slot>

        <x-slot name="button">
            <i class="fas fa-home"></i> Go Home
        </x-slot>
    </x-blogPost>
</body>
</html>
