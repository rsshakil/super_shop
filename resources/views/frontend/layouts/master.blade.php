<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fariha Jewellery</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description"
    content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css" rel="stylesheet">
  <link href="<?php echo(\Config::get('app.url').'/public/dashboard/styles/shards-dashboards.1.1.0.min.css');?>"
    rel="stylesheet">
  <link rel="stylesheet" href="<?php echo(\Config::get('app.url').'/public/dashboard/styles/extras.1.1.0.min.css');?>">
  <link rel="stylesheet" href="<?php echo(\Config::get('app.url').'/public/dashboard/styles/frontend.css');?>">
  <link rel="stylesheet" href="<?php echo(\Config::get('app.url').'/public/css/style.css');?>">
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
  <div class="container-fluid">
    @include('frontend.pages.header')
    @yield('content')
    @include('frontend.pages.footer')
  </div>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script> -->
  <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>

  <script src="<?php echo(\Config::get('app.url').'/public/dashboard/scripts/extras.1.1.0.min.js')?>"></script>
  <!-- <script src="<?php echo(\Config::get('app.url').'/public/dashboard/scripts/shards-dashboards.1.1.0.min.js')?>"></script> -->
  <!-- <script src="<?php echo(\Config::get('app.url').'/public/dashboard/scripts/app/app-blog-overview.1.1.0.js')?>"></script> -->
  <script src="<?php echo(\Config::get('app.url').'/public/dashboard/scripts/app/frontend.js')?>"></script>
  <script src="<?php echo(\Config::get('app.url').'/public/js/custom_plugins.js')?>"></script>
  <script src="<?php echo(\Config::get('app.url').'/public/js/custom_main.js')?>"></script>

</body>

</html>