<div class="tab-pane fade
		 @isset($active) {{ $active == $name ? "show active" : "" }} @endisset"
		 id="{{ $name }}"
		 role="tabpanel" 
		 aria-expanded="true">
	<div class="customTabContent">
		{{ $slot }}
	</div>
</div>