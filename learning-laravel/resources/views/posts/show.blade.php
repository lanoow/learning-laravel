<x-layout>
    <x-nav />
    <x-success-alert />

    <x-blogPost :post="$post"></x-blogPost>

    <div class="max-w-xs md:max-w-2xl lg:max-w-4xl xl:max-w-5xl xl:max-w-7xl mx-auto my-4">
        <div class="flex flex-col">
            <span class="text-3xl text-gray-900 font-black border-b-2 border-gray-300">Comments</span>

            <div class="flex md:px-24 mt-8">
                <form class="w-full" method="POST" action="#">
                    @csrf

                    <div class="flex items-center">
                        @auth
                            <span class="font-bold text-gray-900 text-xl mb-2">Hey there {{ auth()->user()->name }}, want to participate?</span>
                        @endauth

                        @guest
                            <span class="flex items-center font-bold text-gray-900 text-xl mb-2">Hey there guest, want to participate? <a href="/login" class="text-red-600 hover:text-red-500 mx-1">Click here</a> to login or <a href="/register" class="text-red-600 hover:text-red-500 mx-1">here</a> to create an account.</span>
                        @endguest
                    </div>

                    <textarea class="bg-gray-100 text-lg font-bold border-2 border-gray-400 rounded-lg w-full py-2 px-4 outline-none focus:border-red-600 transition-all duration-200 shadow-lg resize-y" type="text" name="comment" id="comment" placeholder="Comment message" required></textarea>

                    <button class="flex items-center bg-red-600 text-white hover:bg-red-500 font-bold text-xl py-2 px-6 rounded-lg transition duration-200 shadow-lg transform hover:scale-105" type="submit" name="submit" id="submit">
                        Post <i class="fas fa-paper-plane ml-2 mt-0.5"></i>
                   </button>
                </form>
            </div>

            <div class="flex flex-col-reverse md:px-24 mt-8">

                @if ($post->comments->count() >= 1)
                    @foreach ($post->comments as $comment)
                        <x-post-comment :comment="$comment" />
                    @endforeach
                @else
                    <span class="mx-auto text-xl font-bold text-gray-900">No comments were found.</span>
                @endif

            </div>
        </div>
    </div>
</x-layout>
