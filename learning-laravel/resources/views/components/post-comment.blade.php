@props(['comment'])
<div class="flex flex-col my-8">
    <div class="flex items-center space-x-2 text-2xl font-black text-gray-900">
        <a href="{{ $comment->author->username }}" class="flex items-center border-b-2 border-transparent hover:border-red-600 pb-1 transition duration-200">
            <img class="border-2 border-gray-300 h-10 w-10 rounded-xl mr-2" src="https://i.pravatar.cc/512?u={{ $comment->id }}" alt="User Avatar">
            <span>{{ $comment->author->name}}</span>
        </a>
        <span class="text-lg font-bold text-gray-500 font-bold">commented <time>{{ $comment->created_at->diffForHumans() }}</time></span>
    </div>
    <span class="text-xl text-gray-700 text-justify mt-1">
        {{ $comment->content }}
    </span>
</div>
