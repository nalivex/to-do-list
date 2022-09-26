{{-- @inject('str', 'Illuminate\Support\Str') --}}

@props(['color' => 'success', 'icon' => 'fa-plus-circle', 'formId' => $str->random(), 'title' => 'Modal', 'action' => null, 'method' => 'POST', 'enctype' => null])

<x-btn-light.modal :title="$title" :color="$color" :classHeader="$attributes->get('class-header')" :icon="$icon" {{ $attributes }}>
  <x-form :action="$action" :id="$formId" :method="$method" :enctype="$enctype">
    <div class="row">
      {{ $slot }}
    </div>
  </x-form>

  <x-slot name="saveButton">
    <x-button.action :form="$formId" :color="$attributes->get('button-color', 'primary')">Salvar</x-button.action>
  </x-slot>
</x-btn-light.modal
