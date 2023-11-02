<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Process Runner</title>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css" type="text/css">

    @livewireStyles
</head>

<body>
    <livewire:process-form />

    <livewire:process-list />

    @livewireScripts
</body>

</html>
