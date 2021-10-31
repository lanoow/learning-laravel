<div class="bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-60 border border-gray-200 rounded-xl flex flex-col py-4 px-4  transition duration-200 text-gray-900 hover:text-red-600 shadow-lg hover:shadow-xl">
    <img class="h-72 h-72 rounded-xl" src="{{ $photo }}" alt="{{ $photoAlt }}">

    <a href="{{ $link }}" class="mt-4 text-3xl font-black transform hover:scale-105 hover:translate-x-2 transition duration-200">{{ $title }}</a>
    <span class="mt-2 text-gray-700 text-xl">{{ $content }}</span>

    <div class="flex items-center justify-between mt-4">
        <div class="flex items-center space-x-2">
            <a href="/author/{{ $authorSlug }}" class="font-black text-sm text-gray-700 border-b border-transparent hover:border-gray-700 transition duration-300"><i class="far fas-user"></i> {{ $author }}</a>
            |
            <a href="/category/{{ $categorySlug }}" class="font-black text-sm text-gray-700 uppercase border-b border-transparent hover:border-gray-700 transition duration-300">{{ $category }}</a>
        </div>
        <a href="{{ $link }}" class="font-bold text-xl transform hover:scale-105 hover:-translate-x-4 transition duration-200">{{ $button }}</a>
    </div>
</div>
