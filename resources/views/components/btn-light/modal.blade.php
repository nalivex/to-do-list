@inject('str', 'Illuminate\Support\Str')

@props(['color' => 'blue', 'icon' => '', 'title' => '', 'dataTarget' => $str->random(), 'saveButton' => null, 'classHeader' => ''])

<div>
  <span data-toggle="modal" data-target="{{ '#' . $dataTarget }}">
    <x-btn-light.link :color="$color" :icon="$icon" :title="$title" />
  </span>

  <x-modal :id="$dataTarget" :title="$title" :classHeader="$classHeader" {{ $attributes }}>
    {{ $slot }}
    <x-slot name="saveButton">
      {{ $saveButton }}
    </x-slot>
  </x-modal>
</div>
