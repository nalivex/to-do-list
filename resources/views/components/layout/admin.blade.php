@props(['scripts' => null])

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="SGC">
  <meta name="author" content="SagaTech">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', '') }}</title>

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">


  <script src="https://use.fontawesome.com/7bdeb125bd.js"></script>

  <!--Favicon-->
  <link rel="icon" type="image/png" href="{{ asset('images/favicon-acl.png') }}">

  <link rel="shortcut icon" href="{{ asset('images/favicon-acl.png') }}" type="image/x-icon">
  <link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/bs4/dt-1.10.20/fh-3.1.6/r-2.2.3/sc-2.0.1/sl-1.3.2/b-1.7.0/b-colvis-1.7.0/datatables.min.css" />

  <link href="{{ asset('css/admin-panel.css') }}" rel="stylesheet">

  <link href="{{ asset('css/font-montserrat-google.css') }}" rel="stylesheet">
  <link href="{{ asset('css/select2modify.css') }}" rel="stylesheet">
  {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/daterangepicker.css') }}" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.25.3/locale/pt-br.min.js"
    integrity="sha256-RcapEnq6i1vk8ZM+0NfWUh2FWLQILeLfu58MNKUEFHM=" crossorigin="anonymous"></script> --}}



<body x-data="{}">
  <div x-cloak class="loader-wrapper">
    <div class="sagaTech">
      <div class="obj_1"></div>
      <div class="obj_2"></div>
      <div class="obj_3"></div>
      <div class="obj_4"></div>
      <div class="obj_5"></div>
      <div class="obj_6"></div>
    </div>
  </div>

  <div x-cloak id="wrapper">

    <div id="page-wrapper">
      <div class="container-fluid">
        {{ $slot }}
      </div>
    </div>

</body>

</html>
