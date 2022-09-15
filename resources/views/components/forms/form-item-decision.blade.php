<label for="{{ $name }}">
		{{ $title }}
</label>
<select class="js-example-basic-single js-states form-control" 
	name='{{ $name }}'
	@isset($id) 
		id='{{ $id }}' 
	@endisset 
	@isset($required) 
		required 
	@endisset 
	@isset($placeholder) 
		data-placeholder = '{{ $placeholder }}'
	@endisset
	style="width: 100%" 
	value="@isset($value) {{ $value }} @endisset">
	<option value="{{$value1}}"  {{ isset($value) && $value == $value1 ? "selected='selected'" : "" }}>{{$label1}}</option>
	<option value="{{$value2}}"  {{ isset($value) && $value == $value2 ? "selected='selected'" : "" }}>{{$label2}}</option>
</select>