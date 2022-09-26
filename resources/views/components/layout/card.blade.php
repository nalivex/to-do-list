@props(['heading' => null])

<div class="row" {{ $attributes }}>
  <div class="col-xs-12">
    <div class="panel panel-default">
      @if ($heading)
        <div class="panel-heading">
          {{ $heading }}
        </div>
      @endif
      <div class="panel-body">
        {{ $slot }}
      </div>
    </div>
  </div>
</div>
