<div class="overflow-auto" style="max-height: 70vh">
    @foreach ($historical as $historic)
        <x-accordion title="{{(new DateTime($historic->date))->format('d/m/Y');}}" background="bg-teal-500">
            <div class="flex items-center justify-center gap-2 text-sm">
                <div><strong>IMC:</strong> {{$historic->bmi}}</div>
                <div><strong>Altura:</strong> {{$historic->height}}cm</div>
                <div><strong>Peso:</strong> {{$historic->weight}}kg</div>
            </div>
        </x-accordion>
    @endforeach
</div>