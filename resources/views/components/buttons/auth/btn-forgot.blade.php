@if (isset($route))
    <a class="w-full py-2 text-sm font-bold text-center text-white duration-300 bg-gray-500 rounded-md shadow-md hover:bg-gray-700"
        href="{{ $route }}">
            Esqueceu a senha?
    </a>
@else    
    <div>        
        <button type="submit" class="w-full py-2 text-sm font-bold text-center text-white duration-300 bg-gray-500 rounded-md shadow-md hover:bg-gray-700">
            Enviar email de recuperação
        </button>
    </div>
@endif