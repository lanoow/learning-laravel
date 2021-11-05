<div id="newsletter" class="h-60 w-full flex justify-center text-center px-8 xl:px-80 mb-24">
    <div class="flex flex-col space-y-8 mt-16">
        <div class="flex flex-col">
            <span class="text-3xl font-black text-gray-900">
                Stay in touch with the latest posts
            </span>
            <span class="text-2xl font-semibold text-gray-900">
                We promise to keep your inbox clean. No spam-mail!
            </span>
        </div>
        <form action="/newsletter" method="post" class="flex items-center mx-auto">
            @csrf

            <input type="email" name="newsletter_email" id="newsletter_email" class="py-3 px-6 bg-gray-100 border border-gray-300 rounded-full text-xl text-gray-900 font-bold outline-none w-80 focus:border-red-600 transition duration-200" placeholder="Your email address" required>

            <button type="submit" name="submit" class="py-4 px-6 bg-red-600 hover:bg-red-500 text-white rounded-full transition duration-200 uppercase transform -translate-x-12 font-black">Subscribe</button>
        </form>
    </div>
</div>
