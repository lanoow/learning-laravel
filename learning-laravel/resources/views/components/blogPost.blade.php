@props(['post'])

<div class="container md:px-8 xl:px-0 mx-auto flex flex-col my-24">
    <img class="md:rounded-xl w-full h-96 mx-auto object-cover" src="{{ $post->photo }}" alt="{{ $post->photoAlt }}">
    <div class="flex flex-col my-8 mx-8 md:mx-0 space-y-4">
        <div class="flex flex-col space-y-8 md:space-y-0 md:flex-row md:items-center justify-between">
            <span class="text-6xl text-gray-900 font-black">{{ $post->title }}</span>
            <div class="flex flex-col">
                <span class="text-sm text-gray-700 font-black uppercase">Published <time>{{ $post->created_at->diffForHumans() }}</time> by</span>
                <div class="flex items-center space-x-2">
                    <a href="/author/{{ $post->author->name }}" class="text-md text-gray-700 hover:text-red-600 transition duration-200 font-bold uppercase">{{ $post->author->name }}</a>
                    <span>|</span>
                    <a href="/category/{{ $post->category->slug }}" class="text-md text-gray-700 hover:text-red-600 transition duration-200 font-bold uppercase">{{ $post->category->name }}</a>
                </div>
            </div>
        </div>
        <span class="text-2xl text-gray-700">{{ $post->content }}</span>
    </div>

    <div>
        <a href="{{ $post->link }}" class="py-3 px-4 mx-8 md:mx-0 rounded-xl bg-gray-200 hover:bg-red-600 text-xl font-bold text-black hover:text-white transition duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl">{!! $post->button !!}</a>
    </div>
</div>
