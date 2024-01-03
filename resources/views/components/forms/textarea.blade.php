<x-forms.input-group>
    <x-forms.label id="{{$id}}" label={{$label}} />
    <textarea
        name="{{$id}}"
        id="{{$id}}"
        class="px-2 py-2 text-sm rounded-md border @error($id) outline-red-500 border-red-300 @else outline-teal-500 border-gray-300 @enderror"
        rows="{{$rows ?? 4}}"
    >@if(empty($value)){{old($id)}}@else{!!$value!!}@endif</textarea>

    @error($id)
        <x-forms.errors>{{$message}}</x-forms.errors>
    @enderror
</x-forms.input-group>
