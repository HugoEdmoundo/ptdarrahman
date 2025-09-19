<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Pesantren</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
</head>
<body>
    {{-- Header --}}
    @include('partials.header')

    {{-- Cursor efek khusus --}}
    @include('partials.cursor')

    <main class="container">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
