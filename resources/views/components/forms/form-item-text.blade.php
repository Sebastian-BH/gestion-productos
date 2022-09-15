<label for="{{ $name }}">
    {{ $title }}
</label>
<input type="text"
    class="form-control"
    id="{{$name}}"
    name="{{$name}}"
    autocomplete="off"
    value="@isset($value){{$value}}@endisset"  
    @isset($placeholder)
        placeholder="{{ $placeholder }}"
    @endisset
    @isset($pattern)
        pattern="{{ $pattern }}"
    @endisset
    @isset($minlength) 
        minlength="{{$minlength}}" 
    @endisset
    @isset($maxlength) 
        maxlength="{{$maxlength}}" 
    @endisset
    @isset($required) 
        required
    @endisset
    @isset($readonly) 
        readonly 
    @endisset
    @isset($onkeyup)
        onkeyup="{{$onkeyup}}"
    @endisset>