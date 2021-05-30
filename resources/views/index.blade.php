@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="font-semibold tracking-wide uppercase text-blue-500">Popular games</h2>
        <livewire:popular-games />

        <div class="flex lg:flex-row flex-col my-10">
            <div class="recently-reviewed lg:mr-32 lg:w-3/4 w-full">
                <h2 class="font-semibold text-blue-500 tracking-wide uppercase">Recently Reviewed</h2>
                <livewire:recently-reviewed />
            </div>
            <div class="most-anticipated lg:w-1/4 mt-8 lg:mt-0">
                <h2 class="font-semibold text-blue-500 tracking-wide uppercase">Most Anticipated</h2>
                <livewire:most-anticipated />

                <h2 class="font-semibold text-blue-500 tracking-wide uppercase mt-8">Coming Soon</h2>
                <livewire:coming-soon />
            </div>
        </div>

    </div> 
    {{-- end container --}}
@endsection