<button class="btn btn-primary btn-outline"
        data-toggle="modal"
        title="{{ $title }}"
        data-target="#modal-confirm-delete-{{ $modal_name }}"
        data-toggle="modal"
        type="button"
        style="margin-top:40px">
        {{ $title }}
</button>

<div class="modal fade modal-fade-in-scale-up"
    id="modal-confirm-delete-{{ $modal_name }}"
    aria-labelledby="exampleModalTitle"
    role="dialog"
    tabindex="-1"
    aria-hidden="true"
    style="display: none;">

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
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <a href="{{ $route }}" style="color:inherit">
                            {{ __('messages.cancel') }}
                        </a>
                    </button>
                    <button type="button"
                            class="btn btn-primary"
                            id="reportExcel"
                            @isset($export)
                                data-dismiss="modal"
                            @endisset>
                            {{ __('messages.confirm') }}
                    </button>
            </div>
 		</div>
    </div>
</div>
