@props(['href' => '#', 'color' => 'blue', 'icon' => '', 'title' => '', 'target' => null])

<a href="{{ $href }}" class="transition btn-{{ $color }}-light btn-list" title="{{ $title }}"
  data-toggle="tooltip" data-placement="top" {{ $attributes }}>
  <i @if ($target) wire:loading.remove wire:target="{{ $target }}" @endif aria-hidden="true"
    class="fa {{ $icon }}"></i>

  @if ($target)
    <div wire:loading wire:target="{{ $target }}">
      <i class="fa fa-spinner fa-pulse fa-fw"></i>
      <span class="sr-only">Loading...</span>
    </div>
  @endif
</a>
