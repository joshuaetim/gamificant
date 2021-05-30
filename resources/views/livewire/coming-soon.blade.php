<div wire:init="loadComingSoon" class="coming-soon mt-8 space-y-12">
    @forelse ($comingSoon as $game)
        <div class="game-info flex">
            <div>
                <a href="#">
                    <img src="{{$game['cover']['url']}}" alt="single" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>
            <div class="ml-4">
                <a href="#" class="font-semibold hover:text-gray-300 text-gray-100">{{$game['name']}}</a>
                <p class="text-xs text-gray-400 mt-1">{{carbonFormat($game['first_release_date'])->toFormattedDateString()}}</p>
            </div>
        </div>
        {{-- end game info --}}
    @empty
        @foreach (range(0,3) as $game)
            <div class="game-info flex animate-pulse">
                <div class="w-16 h-16 bg-gray-800 rounded">
                </div>
                <div class="ml-4">
                    <div href="#" class="font-semibold text-transparent bg-gray-800">title goes here</div>
                    <div class="text-xs text-transparent bg-gray-800 mt-1 inline-block">date here</div>
                </div>
            </div>
        @endforeach
    @endforelse
</div>