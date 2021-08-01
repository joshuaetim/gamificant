<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    @livewireStyles
    <title>{{$title}} - Gamificant</title>
    <script src="/assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
    <body class="bg-gray-900 text-white">
        <header class="border-b border-gray-400">
            <nav class="container flex flex-col lg:flex-row items-center justify-between px-4 py-6">
                <div class="flex flex-col lg:flex-row items-center">
                    <a href="/" class="w-40 text-3xl bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-gray-50" style="font-family: 'Pacifico', cursive;">Gamificant</a>
                    <ul class="flex lg:ml-8 ml-0 space-x-8 mt-4 lg:mt-0">
                        <li><a href="/" class="hover:text-gray-300">Home</a></li>
                    </ul>
                </div>
                <div class="flex items-center mt-4 lg:mt-0" id="vue-model">
                    
                    <livewire:search-dropdown />
                    <div class="lg:ml-8 ml-4">
                        <a href="#"><img src="/assets/images/avatar.png" alt="profile" class="w-8 h-8 rounded-full"></a>
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-8">
            @yield('content')
        </main>

        <footer class="border-t border-gray-400">
            <div class="container mx-auto px-4 py-6">
                Powered by <a href="#" class="underline hover:text-gray-300">IGDB API</a>
            </div>
        </footer>
        @livewireScripts
    </body>
</html>