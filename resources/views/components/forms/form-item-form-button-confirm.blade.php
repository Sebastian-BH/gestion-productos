{{-- <button class="btn btn-sm btn-icon btn-flat btn-default" 
data-toggle="modal" title="{{ $title }}" 
data-target="#modal-confirm-delete-{{ $modal_name }}" 
data-toggle="modal" 
type="button">
	<i class="icon @if ( isset($icon) ) {{ $icon }} @endif" aria-hidden="true"></i>
</button> --}}

<button type="button"
        class="btn btn-primary btn-icon-text"
        title="{{ $title }}"
        style="margin-top: 30px;" 
        data-toggle="modal" 
        data-target="#modal-confirm-delete-{{ $modal_name }}" 
        data-placement="right">
    <i class="btn-icon-prepend" data-feather="{{ $icon }}"></i>
    {{ $title }}
</button>


<div class="modal fade modal-fade-in-scale-up"  id="modal-confirm-delete-{{ $modal_name }}" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">{{ __('messages.modal_confirmation_title') }}</h4>
                </div>
                @isset($export)
                    <div class="modal-body">
                        <p>{{ __('messages.export_excel_alert') }}</p>
                    </div>
                @endisset
                <div class="modal-body">
                    <p>{{ __('messages.modal_confirmation_body') }}</p>
                </div>
                <div class="modal-footer">

                <form name="btn_delete" id="btn_delete_form" action="{{$route}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    {{ $route }}
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <a href="{{ $route }}" style="color:inherit">
                    {{ __('messages.cancel') }}</a>
                    </button>
                        <button type="submit" onclick="document.getElementById('btn_delete_form').submit()" class="btn btn-primary" @isset($export) data-dismiss="modal" @endisset>
                        {{ __('messages.confirm') }}
                        @isset($name1) 	<input type="hidden" value="{{$value1}}" name="{{$name1}}"> @endisset
                        @isset($name2) 	<input type="hidden" value="{{$value2}}" name="{{$name2}}"> @endisset
                    </button>
                </form>

                </div>
 		</div>
    </div>
</div>
