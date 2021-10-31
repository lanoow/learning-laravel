<div class="container md:px-8 xl:px-0 mx-auto flex flex-col my-24">
    <img class="md:rounded-xl w-full h-96 mx-auto object-cover" src="{{ $photo }}" alt="{{ $photoAlt }}">
    <div class="flex flex-col my-8 mx-8 md:mx-0 space-y-4">
        <div class="flex items-center justify-between">
            <span class="text-6xl text-gray-900 font-black">{{ $title }}</span>
            <div class="flex items-center space-x-2">
                <a href="/author/{{ $authorSlug }}" class="text-md text-gray-700 hover:text-red-400 transition duration-200 font-bold uppercase">{{ $author }}</a>
                |
                <a href="/category/{{ $categorySlug }}" class="text-md text-gray-700 hover:text-red-400 transition duration-200 font-bold uppercase">{{ $category }}</a>
            </div>
        </div>
        <span class="text-2xl text-gray-700">{{ $content }}</span>
    </div>

    <div>
        <a href="{{ $link }}" class="py-3 px-4 mx-8 md:mx-0 rounded-xl bg-gray-200 hover:bg-red-600 text-xl font-bold text-black hover:text-white transition duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl">{{ $button }}</a>
    </div>
</div>
