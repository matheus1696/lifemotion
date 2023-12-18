<div class="flex flex-col">
    <label for="{{$id}}" class="px-2 py-1 text-sm font-semibold">{{$label ?? "Label"}}</label>
    <select
        name="{{$id}}"
        id="{{$id}}"
        class="px-2 py-2 text-sm rounded-md border @error($id) outline-red-500 border-red-300 @else outline-teal-500 border-gray-300 @enderror"
    >
        <option selected disabled>Selecione</option>
        {{$slot}}
    </select>
    @error($id)
        <span class="px-1 font-weight-bold invalid-feedback">{{ $message }}</span>
    @enderror
</div>
