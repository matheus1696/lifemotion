<div x-data="{ open: false, subMenuOpen: false }" class="relative">

    <!-- Item do menu principal -->
    <div @click="open = !open" class="flex items-center justify-between px-4 py-3 text-white bg-teal-500 hover:bg-gray-500">

        <div class="flex items-center justify-center gap-2 text-sm">
            <i class="fas fa-user"></i>

            <div class="w-40 overflow-hidden">
                <span class="truncate">{{ Auth::user()->name }}</span>
            </div>
            
            <!-- Ícone SVG dinâmico para indicar a direção -->
            <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="{ 'transform duration-300 -rotate-90': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
            </svg>
        </div>        
    </div>

    <!-- Conteúdo do submenu principal -->
    <div x-show="open" class="bg-white border-l border-r rounded-b shadow-lg">
        <!-- Item do submenu principal -->
            <div class="text-sm duration-300 hover:bg-gray-300 hover:text-black">
                <a href="{{ route('profile.edit') }}" class="flex gap-2 px-4 py-2">
                    <div>                        
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div>
                        <span>Perfil</span>
                    </div>
                </a>  
            </div>
            <div class="text-sm text-red-500 duration-300 hover:bg-red-500 hover:text-white">
                <form action="{{ route('logout') }}" method="POST" class="flex gap-2 px-4 py-2">
                    @csrf
                    <div>
                        <i class="fas fa-power-off"></i>
                    </div>
                    <div>
                        <button type="submit">Sair</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>

</div>