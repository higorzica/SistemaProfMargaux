<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.tailwindcss.com"></script>
<title>@yield('title')</title>
</head>
    <body>
        <header>
          @include('site._partials.header')
        </header>
        <main >
            @yield('content')
        </main>
        <footer class="text-center">
            @include('site._partials.footer')
        </footer>
    </body>
</html>