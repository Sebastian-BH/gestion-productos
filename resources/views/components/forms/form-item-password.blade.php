<label for="{{ $name }}">
	{{ $title }}
</label>
<input type="password"
	class="form-control"
	id="{{ $name }}"
	name="{{ $name }}"
	value="@isset($value) {{ $value }} @endisset"
	@isset($placeholder)
        placeholder="{{ $placeholder }}"
    @endisset
	@isset($required) 
		required 
	@endisset>
