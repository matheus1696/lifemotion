<x-forms.input-group>
    <x-forms.label id="{{$id}}" label={{$label}} />
    <select
        name="{{$id}}"
        id="{{$id}}"
        class="px-2 py-2 text-sm rounded-md border @error($id) outline-red-500 border-red-300 @else outline-teal-500 border-gray-300 @enderror"
    >
        <option selected disabled>Selecione</option>
        {{$slot}}
    </select>
    @error($id)
        <x-forms.errors>{{$message}}</x-forms.errors>
    @enderror
</x-forms.input-group>
