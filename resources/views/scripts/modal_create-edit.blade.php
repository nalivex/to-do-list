<div class="modal fade" id="{{ $idModal ?? 'create-edit'}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog {{ isset($modalG) ? 'modal-lg' : ''}}" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">{{ $title ?? 'Cadastro'}}</h4>
            </div>
            <div class="modal-body">
                @yield('form_modal_create-edit')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button form="{{ $idSubmit ?? 'submit-modal'}}" type="submit" id="{{ $idSubmit ?? 'submit-modal'}}" class="btn btn-primary"> {{ $SubmitName ?? 'Salvar'}}</button>
            </div>
        </div>
    </div>
</div>
