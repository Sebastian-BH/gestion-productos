<label for="{{ $name }}">
    {{ $title }}
</label>
<textarea class="form-control"
    id="{{$name}}"
    name="{{$name}}" 
    @isset($rows)
        rows="{{ $rows }}"
    @endisset
    @isset($placeholder)
        placeholder="{{ $placeholder }}"
    @endisset
    @isset($required) 
        required 
    @endisset>@isset($value){{$value}}@endisset</textarea>
				