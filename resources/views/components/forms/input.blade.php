<div class="flex flex-col">
    <label for="{{$id}}" class="px-2 py-1 text-sm font-semibold">{{$label ?? "Label"}}</label>
    <input
        type="{{$type ?? "text"}}"
        name="{{$id}}"
        id="{{$id}}"
        class="px-2 py-2 text-sm rounded-md border border-gray-100 outline-teal-500 @error($id) @enderror"
        @if (empty($min))  @else min="{{$min}}" @endif
        @if (empty($max))  @else max="{{$max}}" @endif
        @if (empty($minlength))  @else minlength="{{$minlength}}" @endif
        @if (empty($maxlength))  @else maxlength="{{$maxlength}}" @endif
        @error($id) value="{{old($id)}}" @enderror
        @if (empty($value)) value="{{old($id)}}" @else value="{{$value}}" @endif
        @if (empty($placeholder))  @else placeholder="{{$placeholder}}" @endif
        {{$attribute ?? ""}}
    >
    @error($id)
        <span class="px-2 py-1 text-sm font-semibold text-red-500">{{ $message }}</span>
    @enderror
</div>