    <x-error-alert />
    <form action="/panel/posts/create" method="POST" enctype="multipart/form-data" class="flex flex-col mx-auto px-8 md:px-80 space-y-8">
        @csrf

        <h1 class="text-gray-900 font-black text-3xl">Publish New Post</h1>

        <div class="flex flex-col space-y-2">
            <label for="photo" class="text-2xl font-black text-gray-900">Blog Image</label>
            <input type="file" name="photo" id="photo" accept="image/*">
        </div>

        <input class="bg-gray-100 text-lg font-bold border-2 border-gray-400 rounded-lg py-2 px-4 outline-none focus:border-red-600 transition duration-200 shadow-lg" value="{{ old('title') }}" type="text" name="title" id="title" placeholder="Blog Title" required>

        <input class="bg-gray-100 text-lg font-bold border-2 border-gray-400 rounded-lg py-2 px-4 outline-none focus:border-red-600 transition duration-200 shadow-lg" value="{{ old('slug') }}" type="text" name="slug" id="slug" placeholder="Blog Slug" required>

        <div>
            <select name="category_id" id="category_id" class="bg-gray-100 text-lg font-bold border-2 border-gray-400 rounded-lg py-1.5 px-3 outline-none focus:border-red-600 transition duration2-00 shadow-lg" required>
                <option value="">-- Select --</option>
                @foreach (\App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ ucwords($category->name) }}
                    </option>
                @endforeach
            </select>
        </div>

        <input class="bg-gray-100 text-lg font-bold border-2 border-gray-400 rounded-lg py-2 px-4 outline-none focus:border-red-600 transition duration-200 shadow-lg" value="{{ old('excerpt') }}" type="text" name="excerpt" id="excerpt" placeholder="Blog Excerpt" required>

        <textarea class="bg-gray-100 text-lg font-bold border-2 border-gray-400 rounded-lg w-full py-2 px-4 outline-none focus:border-red-600 transition duration-200 shadow-lg resize-y" type="text" name="content" id="content" placeholder="Quick, think of something to post about!">{{ old('content') }}</textarea>

        <button class="py-2 px-4 bg-transparent border-2 border-red-600 hover:bg-red-500 hover:border-red-500 text-2xl font-black text-red-600 hover:text-white rounded-xl focus:ring-4 ring-offset-2 outline-none focus:ring-red-400 transition duration-200 shadow-lg hover:shadow-xl" type="submit" name="submit">Publish <i class="fas fa-paper-plane ml-2 mt-0.5"></i></button>
    </form>
