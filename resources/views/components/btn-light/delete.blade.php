@props(['action', 'title' => 'Deletar Item', 'icon' => 'fa-trash', 'text' => 'Você tem certeza que deseja confirmar essa operação?', 'button' => 'Confirmar', 'method' => 'DELETE'])

<x-form :action="$action" :method="$method">
  <x-btn-light.modal :title="$title" color="red" classHeader="modal-header-danger" :icon="$icon">
    <p style="font-size:16px" class="text-center">{{ $text }}</p>
    <x-slot name="saveButton">
      <button class="btn btn-danger">{{ $button }}</button>
    </x-slot>
  </x-btn-light.modal>
</x-form>
