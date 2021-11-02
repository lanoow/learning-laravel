<div class="z-0 md:max-w-2xl xl:max-w-7xl mx-auto my-8">
    @if (session()->has('success'))
        <div class="flex flex-col bg-green-100 border-2 border-dashed border-green-200 rounded-xl p-4 mb-4 text-sm text-green-600" x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show">
            <div class="flex items-center">
                <svg xmlns="https://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                <span class="font-black">{{ session('success') }}</span>
            </div>
        </div>
    @endif
</div>