<label>
	{{ $title }}
</label>
<select class="js-example-basic-multiple js-states form-control" 
		multiple="multiple"
		name='{{ $name }}' 
		data-language='es'
		@isset($id) 
			id='{{ $id }}' 
		@endisset 
		@isset($required) 
			required 
		@endisset 
		@isset($placeholder) 
			data-placeholder = '{{ $placeholder }}'
		@endisset
		@isset($disabled) 
			disabled 
		@endisset
		style="width: 100%">
		
	@foreach ($items as $item )
        <option value='{{ $item->id }}' {{ isset($selected) && $item->id == trim($selected) ? "selected='selected'" : "" }}> 
			{{ $item->name}}
        </option>
	@endforeach
</select>