<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    @livewireStyles
    <title>Lara Test For Games</title>
</head>
    <body class="bg-gray-900 text-white">
        <header class="border-b border-gray-400">
            <nav class="container flex flex-col lg:flex-row items-center justify-between px-4 py-6">
                <div class="flex flex-col lg:flex-row items-center">
                    <a href="#" class="w-40 text-3xl bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-gray-50" style="font-family: 'Pacifico', cursive;">Gamificant</a>
                    <ul class="flex lg:ml-8 ml-0 space-x-8 mt-4 lg:mt-0">
                        <li><a href="/" class="hover:text-gray-300">Home</a></li>
                        <li><a href="/show" class="hover:text-gray-300">Single</a></li>
                        <li><a href="/games" class="hover:text-gray-300">Gamify</a></li>
                    </ul>
                </div>
                <div class="flex items-center mt-4 lg:mt-0">
                    <div class="relative">
                        <input type="text" class="bg-gray-600 px-4 py-1 pl-8 rounded-full w-64 focus:outline-none focus:ring text-gray-100" placeholder="Search...">

                        <div class="absolute top-0 flex items-center h-full ml-2">
                            <svg class="w-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 172 172"><g fill="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M72.24 10.32c-32.263 0-58.48 26.217-58.48 58.48s26.217 58.48 58.48 58.48c12.766 0 24.564-4.112 34.185-11.072l45.258 45.15 9.675-9.676-44.72-44.827c8.788-10.24 14.082-23.53 14.082-38.055 0-32.263-26.217-58.48-58.48-58.48zm0 6.88c28.541 0 51.6 23.059 51.6 51.6s-23.059 51.6-51.6 51.6-51.6-23.059-51.6-51.6 23.059-51.6 51.6-51.6z" fill="#fff"/></g></svg>
                        </div>
                    </div>
                    <div class="lg:ml-8 ml-4">
                        <a href="#"><img src="images/avatar.png" alt="profile" class="w-8 h-8 rounded-full"></a>
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