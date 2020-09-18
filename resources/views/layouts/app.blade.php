<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tools</title>

    @livewireStyles
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body class="bg-gradient-to-r from-purple-700 to-purple-900">
    <div class="flex flex-col h-screen relative">
        {{ $slot }}

        <footer class="w-full flex-1 text-center p-4 bottom-0 text-yellow-500">
            Copyright @jyrkidn
        </footer>
    </div>

    @livewireScripts

    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>