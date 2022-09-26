@props(['href' => '#', 'color' => 'primary', 'icon' => ''])

<a {{ $attributes->merge(['class' => "btn btn-{$color}"]) }} href="{{ $href }}">
  <i aria-hidden="true" class="fa {{ $icon }}"></i>
  {{ $slot }}
</a>
