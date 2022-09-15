<label for="{{ $name }}">
	{{ $title }}
</label>
<select class="form-control" 
		name='{{ $name }}' 
		@isset($id) 
			id = '{{ $id }}' 
		@endisset 
		@isset($required) 
			required 
		@endisset>
	@isset($default) 
		<option value=''> 
	     	{{ $default }} 
	    </option>
    @endisset
	@foreach ($items as $item )
        <option value='{{ $item->id }}' {{ isset($selected) && $item->id == trim($selected) ? "selected='selected'" : "" }}> 
			@isset($locale)
				{{ isset($showField) ? __('messages.'.$item->$showField) : __('messages.'.$item->name) }}
			@else
				{{ isset($showField) ? $item->$showField : $item->name}}
			@endif
        </option>
	@endforeach
</select>