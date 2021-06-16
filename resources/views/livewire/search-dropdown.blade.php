<div class="relative" x-data="{ isVisible: true }" @click.away="isVisible = false">
    <input wire:model.500ms="search" class="bg-gray-600 px-4 py-1 pl-8 rounded-full w-64 focus:outline-none focus:ring text-gray-100" placeholder="Search (Press / to focus)" 
    x-on:focus="isVisible = true" 
    x-on:keydown.escape.window="isVisible = false" 
    x-on:keydown.shift.tab="isVisible = false"
    x-ref="search"
    x-on:keydown.window="
        if(event.keyCode === 191){
            event.preventDefault()
            $refs.search.focus()
        }
    "
    />

    <div class="absolute top-0 flex items-center h-full ml-2">
        <svg class="w-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 172 172"><g fill="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M72.24 10.32c-32.263 0-58.48 26.217-58.48 58.48s26.217 58.48 58.48 58.48c12.766 0 24.564-4.112 34.185-11.072l45.258 45.15 9.675-9.676-44.72-44.827c8.788-10.24 14.082-23.53 14.082-38.055 0-32.263-26.217-58.48-58.48-58.48zm0 6.88c28.541 0 51.6 23.059 51.6 51.6s-23.059 51.6-51.6 51.6-51.6-23.059-51.6-51.6 23.059-51.6 51.6-51.6z" fill="#fff"/></g></svg>
    </div>
    <div class="absolute top-0 right-0 mr-2 mt-1" wire:loading>
        <svg class="fill-current animate-spin w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 11c.511-6.158 5.685-11 12-11s11.489 4.842 12 11h-2.009c-.506-5.046-4.793-9-9.991-9s-9.485 3.954-9.991 9h-2.009zm21.991 2c-.506 5.046-4.793 9-9.991 9s-9.485-3.954-9.991-9h-2.009c.511 6.158 5.685 11 12 11s11.489-4.842 12-11h-2.009z"/></svg>
    </div>
    <div class="absolute mt-2 bg-gray-700 rounded text-sm w-64 z-50" x-show.transition.opacity.duration.300="isVisible">
        <div wire:offline>
            <ul>
                <li class="px-3 py-3">
                    You are offline
                </li>
            </ul>
        </div>
        <ul>
            @if (count($searchResults) > 0)
                @foreach ($searchResults as $game)
                    <li class="border-b border-gray-600">
                        <a href="{{route('games.show', $game['slug'])}}" class="px-3 py-3 block flex items-center hover:bg-gray-500 transition ease-in-out duration-150"
                        @if ($loop->last)
                            x-on:keydown.tab="isVisible = false"
                        @endif
                        >
                            @if (isset($game['cover']))
                                <img src="{{Str::replaceFirst('thumb', 'cover_small', $game['cover']['url'])}}" alt="cover" class="w-10">
                            @else
                                <img src="http://via.placeholder.com/150" alt="cover" class="w-10">
                            @endif
                            <span class="ml-3">{{$game['name']}}</span>
                        </a>
                    </li>
                @endforeach
            @else
                @if (strlen($search) >= 2)
                    <li>
                        <div class="px-3 py-3">
                            No results for "{{$search}}"
                        </div>
                    </li>
                @endif
            @endif
        </ul>
    </div>
</div>