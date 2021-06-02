<div class="popular-games grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-6 border-b border-gray-400 text-sm gap-12 pb-16">
    @forelse ($popularGames as $game)
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="{{route('games.show', $game['slug'])}}">
                    <img src="{{$game['imageCover']}}" alt="game image" class="hover:opacity-75 transition ease-in-out duration-150">
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
            <a href="{{route('games.show', $game['slug'])}}" class="font-semibold text-base mt-8 block hover:text-gray-400 leading-tight">{{$game['name']}}</a>
            <div class="text-gray-400 mt-1">
                @if (isset($game['platforms']))
                    {{$game['abbreviations']}}
                @endif
            </div>
        </div>
        <!-- end game info -->
    @empty
        @foreach (range(1,12) as $game)
            <div class="game mt-8 animate-pulse">
                <div class="relative inline-block">
                    <div class="w-48 h-56 bg-gray-800 rounded"></div>
                </div>
                <div class="font-semibold text-base mt-4 block leading-tight text-transparent bg-gray-800 rounded">title goes here</div>
                <div class="inline-block mt-1 text-transparent bg-gray-800 rounded">
                    Sony, PS IV, more
                </div>
            </div>
        @endforeach
    @endforelse
    
</div>
{{-- end popular games section --}}