@props(['post'])

<div class="bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-60 border border-gray-200 rounded-xl flex flex-col py-4 px-4  transition duration-200 text-gray-900 hover:text-red-600 shadow-lg hover:shadow-xl">
    <img class="h-72 h-72 rounded-xl" src="{{ $post->photo }}" alt="{{ $post->title }} Image">

    <a href="/post/{{ $post->slug }}" class="mt-4 text-3xl font-black transform hover:scale-105 hover:translate-x-2 transition duration-200">{{ $post->title }}</a>
    <span class="mt-2 text-gray-700 text-xl">{{ $post->excerpt }}</span>

    <div class="flex items-center justify-between mt-4">
        <div class="flex flex-col">
            <span class="font-black text-sm uppercase text-gray-700 ml-1">Published <time>{{ $post->created_at->diffForHumans() }}</time> by</span>
            <div class="flex items-center space-x-2">
                <a href="/author/{{ $post->author->name }}" class="font-black text-sm text-gray-700 uppercase border-b border-transparent hover:border-gray-700 transition duration-300"><i class="far fas-user"></i> {{ $post->author->name }}</a>
                <span>|</span>
                <a href="/category/{{ $post->category->slug }}" class="font-black text-sm text-gray-700 uppercase border-b border-transparent hover:border-gray-700 transition duration-300">{{ $post->category->name }}</a>
            </div>
        </div>
        <a href="/post/{{ $post->slug }}" class="font-bold text-xl transform hover:scale-105 hover:-translate-x-4 transition duration-200">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
    </div>
</div>
