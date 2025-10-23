<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'WaveShop')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('styles')
</head>
<body class="bg-gradient-to-br from-purple-500 via-purple-600 to-indigo-700 min-h-screen flex flex-col">
    <x-navbar :username="$username ?? 'Guest'" />

    <main class="flex-1 p-5 md:p-8">
        <div class="max-w-7xl mx-auto">
            @yield('content')
        </div>
    </main>

    @include('components.footer', ['username' => $username ?? 'Guest'])

    @yield('scripts')
</body>
</html>