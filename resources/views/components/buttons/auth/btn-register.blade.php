@if (isset($route))
    <a class="w-full py-2 text-sm font-bold text-center text-white duration-300 bg-indigo-500 rounded-md shadow-md hover:bg-indigo-700"
        href="{{ $route }}">
            Cadastre-se
    </a>
@else    
    <div>        
        <button type="submit" class="w-full py-2 text-sm font-bold text-center text-white duration-300 bg-indigo-500 rounded-md shadow-md hover:bg-indigo-700">
            Cadastrar
        </button>
    </div>
@endif