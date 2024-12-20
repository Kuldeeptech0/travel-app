<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @if (request()->segment(1) === 'admin')
        @include('pages.admin.component.adminnav')
    @else
        @include('common.nav')
    @endif
    <main class="flex-grow">
        @yield('content')
    </main>
    @include('common.footer')
    @stack('scripts')
</body>

</html>
