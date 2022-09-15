<div class="checkbox-custom checkbox-primary mb-15" style="margin-bottom:0 !important; margin-top:0 !important; ">
  <input type="checkbox" id="{{$id}}" value="{{$value}}" name="{{$name}}" @isset($checked) {{"checked"}} @endisset  @isset($required) required @endisset >
  <label for="{{$id}}" class="title">{{$title}}</label>
</div>