<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset ('bower_components/bootstrap/dist/css/bootstrap.min.css') }} ">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset ('bower_components/font-awesome/css/font-awesome.min.css') }} ">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset ('bower_components/Ionicons/css/ionicons.min.css') }} ">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset ('/bower_components/admin-lte/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="{{ asset ('/bower_components/admin-lte/dist/css/skins/skin-blue.min.css') }}">

    {{--   login css --}}
    <link rel="stylesheet" href="{{ asset ('/css/login.css') }}">
</head>

<body class="hold-transition login-page">
    <div id="app">
        <main class="py-4">

            @yield('content')
            
        </main>
    </div>
</body>

</html>