<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="./assets/Admin/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/Admin/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Bootstrap File -->
    <link rel="stylesheet" href="assets/website/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css"/>
    <link href="./assets/Admin/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/Admin/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/Admin/css/argon-dashboard.css')}}">



  {{-- <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/Amin/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/Admin/img/favicon.png">
  <title>@yield('title')</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/Admin/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/Admin/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/Admin/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/Admin/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" /> --}}
</head>
<body class="g-sidenav-show bg-gray-100">
    <!-- Container-fluid starts-->
    @yield('content')
    <!-- Container-fluid Ends-->
</body>
</html>
