<!DOCTYPE html>
<html>
<head>
    <title>@yield('page_title', 'Mijn Website')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <!-- eventueel menu -->
    </header>

    <main>
        {{ $slot }}
    </main>

    @include('layouts.partials.footer')
</body>
</html>