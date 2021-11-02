<x-layout>
    <x-nav />
    <x-success-alert />

    <x-homeBanner />

    <div id="blog" class="w-full flex flex-col px-8 xl:max-w-7xl 2xl:max-w-none 2xl:px-80 mx-auto mt-60 mb-32 space-y-8">
        <div class="flex items-center justify-between border-b-2 border-gray-400">
            @if (request()->routeIs('home'))
                <span class="text-5xl font-black text-gray-900">Blog</span>
            @else
                <span class="text-5xl font-black text-gray-900">Blog</span>
                <a href="/" class="text-xl font-black text-gray-700 hover:text-red-600 uppercase transition duration-200">Go Home</a>
            @endif
        </div>
        <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 items-center space-x-4">
            <x-category-dropdown />

            {{-- Search --}}
            <div class="flex items-center space-x-4">
                <form method="GET" action="#blog">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <input type="search" name="s" placeholder="Search for something" class="bg-transparent placeholder-black font-black text-lg outline-none relative flex lg:inline-flex items-center bg-gray-100 border border border-gray-300 focus:border-red-600 transition duration-200 rounded-xl px-4 py-2" autocomplete="off" value="{{ request('s') }}">
                </form>
                @if (request(['s', 'category']))
                        <a href="/#blog" class="text-xl font-black text-gray-700 hover:text-red-600 uppercase transition duration-200">
                            Clear
                        </a>
                @endif
            </div>
        </div>
        <div class="grid grid-end grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
            @if ($posts->count() >= 1)
            @foreach ($posts as $post)
                <x-blogCard :post="$post"></x-blogCard>
            @endforeach
        </div>
        {{ $posts->links() }}
        @else
        <span class="text-5xl font-black text-gray-900">Oh gawd! :(<br>There are no posts to show..</span>
        @endif
    </div>

</x-layout>
