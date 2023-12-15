<div x-data="{ open: false, subMenuOpen: false }" class="relative">

    <!-- Item do menu principal -->
    <div @click="open = !open" class="flex items-center justify-between px-4 py-3 text-white bg-teal-500 hover:bg-gray-500">
        <span class="text-sm">Menu</span>
        
        <!-- Ícone SVG dinâmico para indicar a direção -->
        <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="{ 'transform duration-300 -rotate-90': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
        </svg>          
    </div>

    <!-- Conteúdo do submenu principal -->
    <div x-show="open" class="bg-white border-l border-r rounded-b shadow-lg">
        <!-- Item do submenu principal -->
        <div @click="subMenuOpen = !subMenuOpen" class="flex items-center justify-between px-4 py-2 cursor-pointer hover:bg-gray-100">            
            <span class="text-sm">Item 1</span>
            
            <!-- Ícone SVG dinâmico para indicar a direção -->
            <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="{ 'transform duration-300 -rotate-90': subMenuOpen }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
            
        </div>

        <!-- Item do submenu secondário -->
        <div x-show="subMenuOpen">
            <a href="#" class="block px-4 py-2 text-sm">Subitem 1</a>
            <a href="#" class="block px-4 py-2 text-sm">Subitem 2</a>
        </div>
    </div>
</div>