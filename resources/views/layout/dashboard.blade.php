<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ClickME</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <title>Laravel-todo</title> --}}
</head>
<body class="dark:bg-neutral-900 bg-white flex-nowrap">
    <x-sidebar />
    <div class="p-4 sm:ml-64">
        @yield('main-dashboard')
    </div>
    <x-modal-list-form />
</body>
</html>