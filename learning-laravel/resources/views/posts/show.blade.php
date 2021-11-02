<x-layout>
    <x-nav />
    <x-success-alert />

    <x-blogPost :post="$post"></x-blogPost>

    <div class="max-w-xs md:max-w-2xl lg:max-w-4xl xl:max-w-5xl xl:max-w-7xl mx-auto my-4">
        <div class="flex flex-col">
            <span class="text-3xl text-gray-900 font-black border-b-2 border-gray-300">Comments</span>

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
