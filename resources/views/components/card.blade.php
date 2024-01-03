<div class="p-4 mb-3 bg-white rounded-md shadow-lg">
    <header>
        <h2 class="text-lg font-medium">
            {{$title}} 
            @isset($subtitle)
                <span class="text-xs text-gray-300">({{$subtitle}})</span> 
            @endisset            
        </h2>
    </header>
    
    {{$slot}}
</div>