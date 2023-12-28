<div class="flex flex-col mb-4">
    <label for="{{$id}}" class="px-2 py-1 text-sm font-semibold">{{$label ?? "Label"}}</label>
    <textarea
        name="{{$id}}"
        id="{{$id}}"
        class="px-2 py-2 text-sm rounded-md border @error($id) outline-red-500 border-red-300 @else outline-teal-500 border-gray-300 @enderror"
        rows="{{$rows ?? 4}}"
    >@if(empty($value)){{old($id)}}@else{!!$value!!}@endif</textarea>

    @error($id)
        <span class="px-1 font-weight-bold invalid-feedback">{{ $message }}</span>
    @enderror
</div>
