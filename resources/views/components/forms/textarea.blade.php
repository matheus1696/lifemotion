<div class="form-group col-12" style="font-size: 0.9em">
    <label for="{{$id}}" class="col-form-label">{{$label ?? "Label"}}</label>
    <textarea
        name="{{$id}}"
        id="{{$id}}"
        class="form-control summernote @error($id) is-invalid border border-danger @enderror"
        rows="{{$rows ?? 4}}"
    >@if(empty($value)){{old($id)}}@else{!!$value!!}@endif</textarea>

    @error($id)
        <span class="px-1 font-weight-bold invalid-feedback">{{ $message }}</span>
    @enderror
</div>
