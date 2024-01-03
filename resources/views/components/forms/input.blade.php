<div class="flex flex-col w-full mb-3">
    <label for="{{$id}}" class="p-1 text-sm font-semibold">{{$label ?? "Label"}}</label>
    <input
        type="{{$type ?? "text"}}"
        name="{{$id}}"
        id="{{$id}}"
        class="px-2 py-2 text-sm rounded-md border @error($id) outline-red-500 border-red-300 @else outline-teal-500 border-gray-300 @enderror"
        @if (empty($min))  @else min="{{$min}}" @endif
        @if (empty($max))  @else max="{{$max}}" @endif
        @if (empty($step))  @else step="{{$step}}" @endif
        @if (empty($minlength))  @else minlength="{{$minlength}}" @endif
        @if (empty($maxlength))  @else maxlength="{{$maxlength}}" @endif
        @error($id) value="{{old($id)}}" @enderror
        @if (empty($value)) value="{{old($id)}}" @else value="{{$value}}" @endif
        @if (empty($placeholder))  @else placeholder="{{$placeholder}}" @endif
        {{$attribute ?? ""}}
    >
    @error($id)
        <span class="px-2 py-1 text-xs font-semibold text-red-500">{{ $message }}</span>
    @enderror
</div>