<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">
	<link rel="shortcut icon" href="icon/Logic_link_favicon.ico" type="image/x-icon">
	<meta name="description" content="{{ __('messages.logic_meta_description') }}">
    <title>{{ __('messages.logic_meta_title') }}</title>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TMPQ58T');</script>
	<!-- End Google Tag Manager -->

    <meta property="og:title" content="{{ __('messages.logic_og_title') }}">
	<meta property="og:site_name" content="LogicLink">
	<meta property="og:url" content="https://logiclink.com.ua">
	<meta property="og:description" content="{{ __('messages.logic_og_description') }}">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://logiclink.com.ua/img/ogimage.png">
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="logiclink.com.ua">
	<meta property="twitter:url" content="https://logiclink.com.ua/">
	<meta name="twitter:title" content="{{ __('messages.logic_og_title') }}">
	<meta name="twitter:description" content="{{ __('messages.logic_og_description') }}">
	<meta name="twitter:image" content="https://logiclink.com.ua/img/ogimage.png">
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TMPQ58T"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	@include('partials.header')

		@yield('content')

	@include('partials.footer')

</body>

</html>