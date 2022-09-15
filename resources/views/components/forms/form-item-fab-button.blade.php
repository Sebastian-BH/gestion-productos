<div class="btn-group-fab" 
	role="group" 
	aria-label="{{ $title }}">

	<a href="{{ $route }}">

		<button type="button" 
				class="btn btn-icon btn-lg btn-main btn-{{ $class }}"        
				data-toggle="tooltip" 
				data-html="true"
				data-placement="left"
				title="<b>{{ $title }}</b>">
			<i data-feather="{{ $icon }}"></i>    
		</button>
		
	</a>

</div>