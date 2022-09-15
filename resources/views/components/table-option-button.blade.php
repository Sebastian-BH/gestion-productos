 {{-- <button type="button" class="btn btn-sm btn-primary" data-original-title="{{ $title }}" >
	<a href="{{ $route }}" style="color:inherit">
		@if ( isset($text) ) {{ $text }} @endif
  	<i class="" aria-hidden="true"></i>
  </a>
</button> --}}
<a href="{{ $route }}" 
	@isset($target)target="{{$target}}"@endisset>
	<button type="button" 
		class="btn btn-icon-text btn-outline-{{ $class }}" 
		data-toggle= "tooltip" 
		data-html="true"
		data-placement="left" 
		title="<b>{{ $title }}</b>">
		<i class="btn-icon-prepend" data-feather="{{ $icon }}"></i>
		@if ( isset($text) ) {{ $text }} @endif
	</button>
</a>
