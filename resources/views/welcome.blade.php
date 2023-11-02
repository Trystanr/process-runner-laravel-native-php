<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Process Runner</title>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @livewireStyles
    @vite('resources/css/app.css')
</head>

<body class="h-full">
    <div class="min-h-full">
        <div class="bg-blue-600 pb-32">

            <header class="py-4">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-white">Process Runner</h1>
                </div>
            </header>
        </div>

        <main class="-mt-32">
            <div class="mx-auto max-w-7xl px-4 pb-4 sm:px-6 lg:px-8">
                <div class="rounded-lg bg-white px-5 py-4 shadow sm:px-6">
                    <livewire:process-form />

                    <livewire:process-list />
                </div>
            </div>
        </main>
    </div>



    @livewireScripts
</body>

</html>
