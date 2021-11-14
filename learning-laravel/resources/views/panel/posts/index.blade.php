<x-layout>
    <x-nav />

    <div class="px-8 md:px-80 flex flex-col">
        <span class="text-3xl font-black text-gray-900 pb-2 border-b-2 border-gray-300">All Posts</span>

        <x-panel.nav>
            <x-success-alert />
            <x-error-alert />
            
            <div class="flex flex-col mt-4">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-md font-bold text-gray-700 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-md font-bold text-gray-700 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-md font-bold text-gray-700 uppercase tracking-wider">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-md font-bold text-gray-700 uppercase tracking-wider">
                                        Author
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">

                                    @foreach ($posts as $post)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-lg font-bold text-gray-900">
                                                    {{ $post->id  }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-wrap">
                                                <div class="flex items-center">
                                                    <div class="text-lg font-black text-gray-900">
                                                        <a class="border-b border-transparent hover:border-gray-900 transition duration-200" href="/post/{{ $post->slug }}">{{ $post->title }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900"><a class="border-b border-gray-500" href="/?category={{ $post->category->slug }}#blog">{{ ucwords($post->category->name) }}</a></div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900"><a class="border-b border-gray-500" href="/?author={{ $post->author->username }}#blog">{{ $post->author->name }}</a></div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-lg font-bold">
                                                <a href="/panel/posts/{{ $post->id }}/edit" class="text-red-600 hover:text-red-500 transition duration-200">Edit</a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-lg font-bold">
                                                <form method="POST" action="/panel/posts/{{ $post->id }}">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="text-red-600 hover:text-red-500 outline-none transition duration-200 text-lg font-bold" type="submit" name="submit" id="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </x-panel.nav>
    </div>
</x-layout>
