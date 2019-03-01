<!-- meta data -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script type="text/javascript">window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
<!-- title -->
  <title>{{ config('app.name', 'Rudi International') }} | @yield('title', 'For a better future of Africa!')</title>
  <meta name="description" content="Rudi International: For a better future of Africa!">
<!-- stylesheets -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
