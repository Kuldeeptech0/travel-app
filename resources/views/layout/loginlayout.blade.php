<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/authlayout.css', 'resources/js/app.js'])
</head>

<body>
    <main class="min-h-screen bg-gradient-to-br from-gray-200 via-blue-300 to-blue-600 ">
        @yield('content')
    </main>
    @stack('scripts')
</body>

</html>
