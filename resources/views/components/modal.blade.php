@inject('str', 'Illuminate\Support\Str')

@props(['title', 'cancelButtonText' => 'Fechar', 'saveButton' => null, 'classHeader' => '', 'id' => $str->random(), 'large' => false])

<div x-data="{ open: true }">
  <div class="modal fade" {{ $attributes }} x-show="open" id="{{ $id }}" role="dialog">
    <div class="modal-dialog @if ($large) modal-lg @endif">
      <div class="modal-content">
        <div class="modal-header {{ $classHeader }}">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-weight: 600">{{ $title }}</h4>
        </div>
        <div class="modal-body">
          {{ $slot }}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ $cancelButtonText }}</button>
          {{ $saveButton }}
        </div>
      </div>
    </div>
  </div>
  <script>
    window.addEventListener(`show-${@json($id)}`, function() {
      $(`#${@json($id)}`).modal('show');
    });
    window.addEventListener(`hide-${@json($id)}`, function() {
      $(`#${@json($id)}`).modal('hide');
    });
  </script>
</div>
