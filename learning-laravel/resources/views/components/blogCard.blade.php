<a href="{{ $link }}" class="bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-60 border border-gray-200 rounded-xl flex flex-col py-4 px-4 transform hover:scale-105 transition duration-200 text-gray-900 hover:text-red-600 shadow-lg hover:shadow-xl">
    <img class="h-72 h-72 rounded-xl" src="{{ $photo }}" alt="{{ $photoAlt }}">

    <span class="mt-4 text-3xl font-black">{{ $title }}</span>
    <span class="mt-2 text-gray-700 text-xl">{{ $content }}</span>

    <span class="font-bold text-right mt-4 text-xl">{{ $button }}</span>
</a>
