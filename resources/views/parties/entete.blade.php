<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Portail numérique de JUREC" />
<meta name="author" content="{{ config('app.name') }}" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
@yield("metaPartage")
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name')}} | {{ isset($titre)?$titre:"" }}</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('storage/'.$setting->site_favicon) }}" />

<!-- font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">

<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins-css.css') }} " />

<!-- revoluation -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }} " media="screen" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/typography.css') }} " />

<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes/shortcodes.css') }} " />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }} " />

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }} " />

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/custom/sweetalert2/dist/sweetalert2.min.css') }}">

</head>

<body>

<div class="wrapper">

<!--=================================preloader -->

<div id="pre-loader">
    <img src="{{ asset('assets/images/pre-loader/loader-01.svg') }} " alt="">
</div>

<!--=================================preloader -->



