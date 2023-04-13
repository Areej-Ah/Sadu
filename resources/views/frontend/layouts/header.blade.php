<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo">
    <!-- Document title -->
    @if(lang() == "ar")
    <title>{{ setting()->sitename_ar }}</title>
    @else
    <title>{{ setting()->sitename_en }}</title>
    @endif
    <!-- Stylesheets & Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
    <link href="{{ url('frontend/Polo') }}/css/plugins.css" rel="stylesheet">
    <link href="{{ url('frontend/Polo') }}/css/style.css" rel="stylesheet">
    <link href="{{ url('frontend/Polo') }}/css/responsive.css" rel="stylesheet"> 

    @if(lang() == "ar")
    {{-- <link href="{{ url('frontend/Polo') }}/css/style-rtl.css" rel="stylesheet"> --}}
    @endif
    

    <link rel="icon" href="{{ Storage::url(setting()->icon) }}" />

</head>

<body>
    
 <div id = "wrapper">