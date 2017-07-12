
<html>
    <head>
        <title> {{$title or 'System Form'}} </title>


    </head>
    <body>
        @yield('content')

        @stack('scripts')
    </body>
</html>