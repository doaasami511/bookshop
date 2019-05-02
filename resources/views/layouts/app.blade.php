<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Eman -->
    <meta charset="utf-8">
		<title>acme</title>
		<link rel="stylesheet"  href="/css/app.css">
		<style>
			.invalid-feedback{
				display: block;
				color: red
			}
		</style>

</head>
<body>
    @include('inc.navbar')

    <main class="py-4">
        <div class="container">
            @include('inc.messeges')
            @if(Request::is('about'))
                @include('inc.showcase')
            @endif
            @yield('content')
        </div>
        </main>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('article-ckeditor');
    </script>
</body>
</html>
