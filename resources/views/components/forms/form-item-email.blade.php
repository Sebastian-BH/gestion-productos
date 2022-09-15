<label for="{{ $name }}">
	{{ $title }}
</label>
<input type="email"
	class="form-control"
	id="{{ $name }}"
	name="{{ $name }}"
	placeholder="@isset($placeholder) {{ $placeholder }} @endisset"
	value="@isset($value) {{ $value }} @endisset"
	@isset($minlength) 
        minlength="{{$minlength}}" 
    @endisset
    @isset($maxlength) 
        maxlength="{{$maxlength}}" 
    @endisset
	@isset($required) 
		required 
	@endisset
	@isset($readonly) 
        readonly 
    @endisset>