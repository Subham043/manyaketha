<head>

    <!-- Responsive -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    @cspMetaTag(App\Http\Policies\ContentSecurityPolicy::class)

    <!-- App Css-->
    @vite(['resources/css/app.css'])
    @yield('css')
</head>
