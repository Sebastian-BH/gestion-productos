<label for="{{ $name }}">
    {{ $title }}
</label>
<div class="input-group date datepicker" id="datePicker">
    <input type="text"
        class="form-control"
        id="{{ $name }}"
        name="{{ $name }}"
        autocomplete="off"
        data-format="yyyy-mm-dd"
	    data-language="es"
        @isset($required) required @endisset
        @isset($readonly) readonly @endisset
        @isset($min) data-date-start-date="{{ $min }}" @endisset
        @isset($max) data-date-end-date="{{ $max }}" @endisset
        value="@isset($value){{ $value }}@endisset">
        <span class="input-group-addon">
            <i data-feather="calendar"></i>
        </span>
</div>