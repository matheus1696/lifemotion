<div x-data="{ open: {{$open ?? 'false'}} }" class="my-3 overflow-hidden rounded-md shadow-md">

    <div class="flex items-center w-full p-3 text-left text-white {{$background ?? 'bg-indigo-500'}}">
        <div class="flex-1">
            <span class="text-sm">{{$title}}</span>
        </div>

        <!-- Conteúdo do Filtro -->
        @isset($filter)
        <div>
            @yield('filter')
        </div>
        @endisset

        <button @click="open = !open" class="px-3">
            <div>
                <span x-show="open">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                    </svg>
                </span>
                <span x-show="!open">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </span>
            </div>
        </button>
    </div>
    <div x-show="open" x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90" class="p-3 overflow-hidden">

        <!-- Conteúdo do acordeão -->
        {{$slot}}
    </div>
</div>