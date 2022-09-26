@inject('str', 'Illuminate\Support\Str')

@props(['id' => $str->random(), 'header', 'body', 'noscript' => false, 'withoutResponsive' => false])

<table {{ $attributes->class(['table table-bordered t-width-100', 'responsive' => !$withoutResponsive]) }}
  id="{{ $id }}">
  <thead>
    <tr class="success">
      {{ $header }}
    </tr>
  </thead>
  <tbody>
    {{ $body }}
  </tbody>
</table>

@if (!$noscript)
  <script>
    const id = "#{{ $id }}"
    $(document).ready(function() {
      $(id).DataTable({
        language: {
          url: "/css/translate.datatablejs.pt-br.json"
        }
      });
    });
  </script>
@endif
