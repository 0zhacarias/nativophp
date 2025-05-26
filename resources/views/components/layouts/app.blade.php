<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Native PHP</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    </head>
    <body class="antialiased bg-gray-100 text-gray-900">
        <div class="flex flex-col min-h-screen">
            
            <main class="flex-1">
                {{$slot}}
            </main>
        </div>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
  

<!--         @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif -->
    </body>
</html>
