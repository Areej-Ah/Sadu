<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ !empty($title)? $title : trans('admin.adminpanel') }} </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('/') }}/frontend/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ url('/') }}/frontend/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <!-- tree js -->
  <link rel="stylesheet" href="{{ url('/') }}/frontend/adminlte/jstree/themes/default/style.css">



  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('/') }}/frontend/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url('/') }}/frontend/adminlte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  @if(direction()=='ltr')
  <link rel="stylesheet" href="{{ url('/') }}/frontend/adminlte/dist/css/adminlte.min.css">
  @else
  <link rel="stylesheet" href="{{ url('/') }}/frontend/adminlte/dist/css/rtl/adminlte.min.css">
  <link rel="stylesheet" href="{{ url('/') }}/frontend/adminlte/dist/css/rtl/custom.css">
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <style type="text/css">
    html,body{
      font-family: 'Cairo', sans-serif;
    }
  </style>

  @endif
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('/') }}/frontend/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('/') }}/frontend/adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('/') }}/frontend/adminlte/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
