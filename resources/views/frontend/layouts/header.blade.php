<!doctype html>
<html class="no-js" lang="en">
<head>
    @if(lang() == "ar")
    <title>{!! setting()->sitename_ar !!}</title>
    @else
    <title>{!! setting()->sitename_en !!}</title>
    @endif
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="{{ setting()->sitename_ar }}">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="description" content="{{ setting()->sitename_ar }}">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ Storage::url(setting()->icon) }}">
    <link rel="apple-touch-icon" href="{{ Storage::url(setting()->icon) }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ Storage::url(setting()->icon) }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ Storage::url(setting()->icon) }}">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/sadu') }}/css/font-icons.min.css">
    @if(lang() == "ar")
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/sadu') }}/css/theme-vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/sadu') }}/css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/sadu') }}/css/responsive.css" />
    @else
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/sadu') }}/E/css/theme-vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/sadu') }}/E/css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/sadu') }}/E/css/responsive.css" />
    @endif
</head>
<body data-mobile-nav-style="classic">
