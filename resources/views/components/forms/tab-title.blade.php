 <li class="nav-item">
	<a class="nav-link
			@isset($active) {{ $active == $name ? "active" : "" }} @endisset"
			data-toggle="tab"
			href="#{{ $name }}"
			aria-controls="{{ $name }}"
			role="tab"
			aria-expanded="true">
		{{ $title }}
	</a>
</li>