<div wire:init="loadRecentlyReviewed" class="recently-reviewed-container mt-8 space-y-12">
    @forelse ($recentlyReviewed as $game)
        <div class="game-info rounded-lg shadow-md bg-gray-800 px-4 py-4 flex">
            <div class="relative flex-none">
                <a href="{{route('games.show', $game['slug'])}}">
                    <img src="{{$game['imageCover']}}" alt="game image" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                </a>
                @if (isset($game['rating']))
                    <div class="absolute w-16 h-16 rounded-full bg-gray-800 bottom-0 right-0" style="bottom: -20px; right: -20px">
                        <div class="font-semibold flex justify-center h-full items-center text-xs">{{$game['rating']}}</div>
                    </div>
                @else
                    <div class="absolute w-16 h-16 rounded-full bg-red-800 bottom-0 right-0" style="bottom: -20px; right: -20px">
                        <div class="font-semibold flex justify-center h-full items-center text-xs" title="No rating yet">N/A</div>
                    </div>
                @endif
            </div>
            <div class="lg:ml-12 ml-3">
                <a href="{{route('games.show', $game['slug'])}}" class="font-semibold text-lg mt-4 block hover:text-gray-400 leading-tight">{{$game['name']}}</a>
                <div class="text-gray-400 mt-1">
                    @if (isset($game['platforms']))
                        {{$game['abbreviations']}}
                    @endif
                </div>
                <p class="mt-6 text-gray-400 hidden lg:block md:block">
                    {{Str::words($game['summary'], 70, '...')}}
                </p>
            </div>
        </div>
        <!-- end game info -->
    @empty
        @foreach (range(0,2) as $game)
            <div class="animate-pulse game-info rounded-lg shadow-md bg-gray-800 px-4 py-4 flex">
                <div class="relative flex-none w-32 lg:w-48 bg-gray-700 h-48 lg:h-56 rounded"></div>
                <div class="lg:ml-12 ml-3">
                    <div class="font-semibold text-lg mt-4 inline-block leading-tight text-transparent bg-gray-700 rounded">title goes here</div>
                    
                    <div class="mt-8 hidden lg:block space-y-4">
                        <span class="inline-block text-transparent bg-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, maiore.</span>
                        <span class="inline-block text-transparent bg-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, maiore.</span>
                        <span class="inline-block text-transparent bg-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, maiore.</span>
                    </div>
                </div>
            </div>
        @endforeach
    @endforelse
</div>