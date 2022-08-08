    <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="rounded-md text-blue-700 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <div class="relative" x-cloak x-show.transition.origin.top="tooltip">
            <div class="border-gray-600 absolute top-0 z-10 w-60 p-2 -mt-1 text-sm leading-tight text-gray-900 transform -translate-x-1/2 -translate-y-full bg-orange-400 rounded-lg shadow-lg">
                {{$slot}}
            </div>
        </div>
    </div>
