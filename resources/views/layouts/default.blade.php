<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ Route::currentRouteName() }}</title>
        @vite('resources/css/app.css')
    </head>

    <body>
        @include('partials.navbar')
        <main>
            @yield('main', 'error page not found')
        </main>
    </body>

</html>
