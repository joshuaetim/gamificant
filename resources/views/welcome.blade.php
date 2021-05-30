@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="font-semibold tracking-wide uppercase text-blue-500">Popular games</h2>
        <div class="popular-games grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-6 border-b border-gray-400 text-sm gap-12 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="images/single.jpg" alt="game image" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute w-16 h-16 rounded-full bg-gray-800 bottom-0 right-0" style="bottom: -20px; right: -20px">
                        <div class="font-semibold flex justify-center h-full items-center text-xs">70%</div>
                    </div>
                </div>
                <a href="#" class="font-semibold text-base mt-8 block hover:text-gray-400 leading-tight">Assasins Creed Valhalla</a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="images/single.jpg" alt="game image" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute w-16 h-16 rounded-full bg-gray-800 bottom-0 right-0" style="bottom: -20px; right: -20px">
                        <div class="font-semibold flex justify-center h-full items-center text-xs">70%</div>
                    </div>
                </div>
                <a href="#" class="font-semibold text-base mt-8 block hover:text-gray-400 leading-tight">Assasins Creed Valhalla</a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="images/single.jpg" alt="game image" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute w-16 h-16 rounded-full bg-gray-800 bottom-0 right-0" style="bottom: -20px; right: -20px">
                        <div class="font-semibold flex justify-center h-full items-center text-xs">70%</div>
                    </div>
                </div>
                <a href="#" class="font-semibold text-base mt-8 block hover:text-gray-400 leading-tight">Assasins Creed Valhalla</a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="images/single.jpg" alt="game image" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute w-16 h-16 rounded-full bg-gray-800 bottom-0 right-0" style="bottom: -20px; right: -20px">
                        <div class="font-semibold flex justify-center h-full items-center text-xs">70%</div>
                    </div>
                </div>
                <a href="#" class="font-semibold text-base mt-8 block hover:text-gray-400 leading-tight">Assasins Creed Valhalla</a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="images/single.jpg" alt="game image" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute w-16 h-16 rounded-full bg-gray-800 bottom-0 right-0" style="bottom: -20px; right: -20px">
                        <div class="font-semibold flex justify-center h-full items-center text-xs">70%</div>
                    </div>
                </div>
                <a href="#" class="font-semibold text-base mt-8 block hover:text-gray-400 leading-tight">Assasins Creed Valhalla</a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="images/single.jpg" alt="game image" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute w-16 h-16 rounded-full bg-gray-800 bottom-0 right-0" style="bottom: -20px; right: -20px">
                        <div class="font-semibold flex justify-center h-full items-center text-xs">70%</div>
                    </div>
                </div>
                <a href="#" class="font-semibold text-base mt-8 block hover:text-gray-400 leading-tight">Assasins Creed Valhalla</a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            
        </div>

        <div class="flex lg:flex-row flex-col my-10">
            <div class="recently-viewed lg:mr-32 lg:w-3/4 w-full">
                <h2 class="font-semibold text-blue-500 tracking-wide uppercase">Recently Viewed</h2>
                <div class="recently-reviewed-container mt-8 space-y-12">
                    <div class="game-info rounded-lg shadow-md bg-gray-800 px-4 py-4 flex">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="images/single.jpg" alt="game image" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute w-16 h-16 rounded-full bg-gray-900 bottom-0 right-0" style="bottom: -20px; right: -20px">
                                <div class="font-semibold flex justify-center h-full items-center text-xs">70%</div>
                            </div>
                        </div>
                        <div class="lg:ml-12 ml-3">
                            <a href="#" class="font-semibold text-lg mt-4 block hover:text-gray-400 leading-tight">Assasins Creed Valhalla</a>
                            <div class="text-gray-400 mt-1">Playstation 4</div>
                            <p class="mt-6 text-gray-400 hidden lg:block md:block">
                                Eivor’s latest journey takes them to shores of Ireland, where the newly-appointed High-King Flann Sinna seeks to unite four disparate regions under a single Irish banner. Along the way, Eivor will discover the secrets of an ancient druidic cult, encounter fearsome mythological creatures, and explore Ireland’s many mysteries.
                            </p>
                        </div>
                    </div>
                    {{-- end game info --}}
                    <div class="game-info rounded-lg shadow-md bg-gray-800 px-4 py-4 flex">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="images/single.jpg" alt="game image" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute w-16 h-16 rounded-full bg-gray-900 bottom-0 right-0" style="bottom: -20px; right: -20px">
                                <div class="font-semibold flex justify-center h-full items-center text-xs">70%</div>
                            </div>
                        </div>
                        <div class="lg:ml-12 ml-3">
                            <a href="#" class="font-semibold text-lg mt-4 block hover:text-gray-400 leading-tight">Assasins Creed Valhalla</a>
                            <div class="text-gray-400 mt-1">Playstation 4</div>
                            <p class="mt-6 text-gray-400 hidden lg:block md:block">
                                Eivor’s latest journey takes them to shores of Ireland, where the newly-appointed High-King Flann Sinna seeks to unite four disparate regions under a single Irish banner. Along the way, Eivor will discover the secrets of an ancient druidic cult, encounter fearsome mythological creatures, and explore Ireland’s many mysteries.
                            </p>
                        </div>
                    </div>
                    {{-- end game info --}}
                    <div class="game-info rounded-lg shadow-md bg-gray-800 px-4 py-4 flex">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="images/single.jpg" alt="game image" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute w-16 h-16 rounded-full bg-gray-900 bottom-0 right-0" style="bottom: -20px; right: -20px">
                                <div class="font-semibold flex justify-center h-full items-center text-xs">70%</div>
                            </div>
                        </div>
                        <div class="lg:ml-12 ml-3">
                            <a href="#" class="font-semibold text-lg mt-4 block hover:text-gray-400 leading-tight">Assasins Creed Valhalla</a>
                            <div class="text-gray-400 mt-1">Playstation 4</div>
                            <p class="mt-6 text-gray-400 hidden lg:block md:block">
                                Eivor’s latest journey takes them to shores of Ireland, where the newly-appointed High-King Flann Sinna seeks to unite four disparate regions under a single Irish banner. Along the way, Eivor will discover the secrets of an ancient druidic cult, encounter fearsome mythological creatures, and explore Ireland’s many mysteries.
                            </p>
                        </div>
                    </div>
                    {{-- end game info --}}
                </div>
            </div>
            <div class="most-anticipated lg:w-1/4 mt-8 lg:mt-0">
                <h2 class="font-semibold text-blue-500 tracking-wide uppercase">Most Anticipated</h2>
                <div class="anticipated-container space-y-10 mt-8">
                    <div class="game-info flex">
                        <div>
                            <a href="#">
                                <img src="images/single.jpg" alt="single" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                        <div class="ml-4">
                            <a href="#" class="font-semibold hover:text-gray-300 text-gray-100">Assasins Creed Valhalla</a>
                            <p class="text-xs text-gray-400 mt-1">Sept 12, 2020</p>
                        </div>
                    </div>
                    {{-- end game info --}}
                    <div class="game-info flex">
                        <div>
                            <a href="#">
                                <img src="images/single.jpg" alt="single" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                        <div class="ml-4">
                            <a href="#" class="font-semibold hover:text-gray-300 text-gray-100">Assasins Creed Valhalla</a>
                            <p class="text-xs text-gray-400 mt-1">Sept 12, 2020</p>
                        </div>
                    </div>
                    {{-- end game info --}}
                    <div class="game-info flex">
                        <div>
                            <a href="#">
                                <img src="images/single.jpg" alt="single" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                        <div class="ml-4">
                            <a href="#" class="font-semibold hover:text-gray-300 text-gray-100">Assasins Creed Valhalla</a>
                            <p class="text-xs text-gray-400 mt-1">Sept 12, 2020</p>
                        </div>
                    </div>
                    {{-- end game info --}}
                
                </div>
                {{-- end most anticipated container --}}
                <h2 class="font-semibold text-blue-500 tracking-wide uppercase mt-8">Coming Soon</h2>
                <div class="coming-soon mt-8 space-y-12">
                    <div class="game-info flex">
                        <div>
                            <a href="#">
                                <img src="images/single.jpg" alt="single" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                        <div class="ml-4">
                            <a href="#" class="font-semibold hover:text-gray-300 text-gray-100">Assasins Creed Valhalla</a>
                            <p class="text-xs text-gray-400 mt-1">Sept 12, 2020</p>
                        </div>
                    </div>
                    {{-- end game info --}}<div class="game-info flex">
                        <div>
                            <a href="#">
                                <img src="images/single.jpg" alt="single" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                        <div class="ml-4">
                            <a href="#" class="font-semibold hover:text-gray-300 text-gray-100">Assasins Creed Valhalla</a>
                            <p class="text-xs text-gray-400 mt-1">Sept 12, 2020</p>
                        </div>
                    </div>
                    {{-- end game info --}}<div class="game-info flex">
                        <div>
                            <a href="#">
                                <img src="images/single.jpg" alt="single" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                        <div class="ml-4">
                            <a href="#" class="font-semibold hover:text-gray-300 text-gray-100">Assasins Creed Valhalla</a>
                            <p class="text-xs text-gray-400 mt-1">Sept 12, 2020</p>
                        </div>
                    </div>
                    {{-- end game info --}}
                </div>
            </div>
        </div>

    </div> 
    {{-- end container --}}
@endsection