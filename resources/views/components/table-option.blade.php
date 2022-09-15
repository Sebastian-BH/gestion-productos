<a href="{{ $route }}" @isset($target) target="{{ $target }}" @endisset >
	<button type="button" 
		class="btn btn-xs btn-icon btn-outline-{{ $class }}" 
		data-toggle= "tooltip" 
		data-html="true"
		data-placement="left" 
		title="<b>{{ $title }}</b>">
		<i data-feather="{{ $icon }}"></i>
	</button>
</a>