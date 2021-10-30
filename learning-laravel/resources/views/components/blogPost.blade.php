<div class="container mx-auto flex flex-col my-24">
    <img class="md:rounded-xl w-full h-96 mx-auto object-cover" src="{{ $photo }}" alt="{{ $photoAlt }}">
    <div class="flex flex-col my-8 mx-8 md:mx-0 space-y-4">
        <span class="text-6xl text-gray-900 font-black">{{ $title }}</span>
        <span class="text-2xl text-gray-700">{{ $content }}</span>
    </div>

    <div>
        <a href="{{ $link }}" class="py-3 px-4 mx-8 md:mx-0 rounded-xl bg-gray-200 hover:bg-red-600 text-xl font-bold text-black hover:text-white transition duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl">{{ $button }}</a>
    </div>
</div>
