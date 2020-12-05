{{-- Modal Import --}}
@if ($modalType == "modalImport")
    <div id="{{ $id }}" class="modal {{ $modalClass }} fade" data-backdrop="{{ $backdrop }}">
        <div class="modal-dialog {{ $modalDiaglogClass }}" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title font-weight-bold">{{ $title }}</h4>
                </div>
                <form id="{{ $formId }}" class="{{ $formClass }}" action="{{ $formAction }}" method="{{ $formMethod }}">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="file" id="file" name="file" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-upload mr-2"></i>Import</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif