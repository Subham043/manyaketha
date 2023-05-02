<head>

    <meta charset="utf-8" />
    <title>MANYAKETHA VENTURES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="MANYAKETHA VENTURES - Admin Panel" name="description" />
    <meta content="MANYAKETHA VENTURES - Admin Panel" name="author" />
    @cspMetaTag(App\Http\Policies\ContentSecurityPolicy::class)
    <!-- App favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/images/logo.png') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('admin/js/layout.js') }}"></script>

    <!-- App Css-->
    @vite(['resources/admin/css/main.css'])

    @yield('css')
</head>
