<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC @yield('title', 'Comics')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        @yield('css')
        @yield('js')

    </head>
    <body>

        @include('partials.header')

        <!-- /#site_header -->

        <main id="site_main">
        @yield('content')
        </main>
        <!-- /#site_main -->


        @include('partials.footer')

        <!-- /#site_footer -->
    </body>
</html>
