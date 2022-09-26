@props(['method' => 'POST'])

<form {{ $attributes->class('form') }} @if ($method !== 'GET') method="POST" @endif>
  @if ($method !== 'GET')
    @csrf
    @method($method)
  @endif
  {{ $slot }}
</form>
