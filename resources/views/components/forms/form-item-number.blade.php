<label for="{{ $name }}">
    {{ $title }}
</label>
<input type="number"
    class="form-control"
    id="{{$name}}"
    name="{{$name}}"
    autocomplete="off"
    value="@isset($value){{$value}}@endisset"  
    @isset($placeholder)
        placeholder="{{ $placeholder }}" 
    @endisset
    @isset($pattern)
        pattern="{{ $pattern }}"
    @endisset
    @isset($min) 
		min="{{$min}}" 
	@endisset
	@isset($max) 
		max="{{$max}}" 
	@endisset
    @isset($required) 
        required
    @endisset
    @isset($readonly) 
        readonly 
    @endisset
    @isset($onkeyup)
        onkeyup="{{$onkeyup}}"
    @endisset
    @isset($step)
        step="{{$step}}"
    @endisset>