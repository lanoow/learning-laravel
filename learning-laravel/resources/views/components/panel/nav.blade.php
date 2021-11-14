<div class="my-4 grid grid-cols-4 gap-4">
    <div class="w-full h-96 col-span-1">
        <div class="mx-8 my-4 flex flex-col space-y-4">
            <span class="text-xl font-black text-gray-900 pb-1 border-b-2 border-gray-300">Links</span>
            <div class="flex flex-col mx-4 space-y-2">
                <a href="/panel/" class="hover:text-red-600 transition duration-200 font-black uppercase {{ request()->routeIs('panel-home') ? 'text-red-700' : 'text-gray-700' }}">Home</a>
                <a href="/panel/posts/" class="hover:text-red-600 transition duration-200 font-black uppercase {{ request()->routeIs('panel-posts') ? 'text-red-700' : 'text-gray-700' }}">All Posts</a>
                {{-- <div class="flex flex-col mx-4 space-y-2"> --}}
                    <a href="/panel/posts/create" class="hover:text-red-600 transition duration-200 font-black uppercase {{ request()->routeIs('panel-posts-create') ? 'text-red-700' : 'text-gray-700' }}">New Post</a>
                {{-- </div> --}}
            </div>
        </div>
    </div>

    <div class="w-full h-96 col-span-3">{{ $slot }}</div>
</div>
