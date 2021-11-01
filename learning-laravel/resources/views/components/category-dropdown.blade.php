<style>.dropdown:focus-within .dropdown-menu{opacity:1;transform:translate(0) scale(1);visibility:visible;}</style>
{{-- Category --}}
<div class="dropdown" style="z-index: 1;">
    <button
        class="relative items-center flex lg:inline-flex items-center bg-gray-100 border border-gray-300 focus:border-red-600 rounded-xl py-2 px-4 transition duration-200 ease-in-out" type="button" aria-haspopup="true" aria-expanded="true">
        <span class="font-black text-lg">{{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}</span>
        <svg xmlns="https://www.w3.org/2000/svg" class="h-4 w-4 ml-1 pr-px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>
    <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-left -translate-y-2 scale-95 z-50">
        <div class="absolute left-0 w-32 mt-2 origin-top-left bg-white border border-gray-200 divide-y divide-gray-100 rounded-lg shadow-lg outline-none z-50" role="menu">
            <div class="py-1 text-gray-700">
                <a href="/#blog" class="hover:text-gray-900 hover:bg-gray-100 flex justify-between w-full font-semibold px-4 py-2 text-md leading-5 text-left transition duration-200 ease-in-out {{ $_SERVER['REQUEST_URI'] === "/" ? 'bg-gray-100 text-red-600' : '' }}" role="menuitem">All</a>
                @foreach ($categories as $category)
                    <a href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}#blog" class="hover:text-gray-900 hover:bg-gray-100 flex justify-between w-full font-semibold px-4 py-2 text-md leading-5 text-left transition duration-200 ease-in-out {{ isset($currentCategory) && $currentCategory->is($category) ? 'bg-gray-100 text-red-600' : '' }}" role="menuitem">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
