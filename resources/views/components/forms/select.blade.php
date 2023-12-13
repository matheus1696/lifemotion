<div class="form-group col-lg-{{$col ?? "6"}}" style="font-size: 0.8em">
    <label for="{{$id}}" class="col-form-label">{{$label ?? "Label"}}:</label>
    <select
        name="{{$id}}"
        id="{{$id}}"
        class="form-control @error($id) is-invalid border border-danger @enderror js-select"
        style="width:100%"
    >
        <option selected disabled>Selecione</option>
        {{$slot}}
    </select>
    @error($id)
        <span class="px-1 font-weight-bold invalid-feedback">{{ $message }}</span>
    @enderror
</div>
