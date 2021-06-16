<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Cache;
use MarcReichel\IGDBLaravel\Models\Game;

class PopularGames extends Component
{
    public $popularGames = [];

    public function loadPopularGames()
    {
        // sleep(10);
        $before = Carbon::now()->subYears(1)->timestamp;
        $recent = Carbon::now()->subMonths(3)->timestamp;
        $after = Carbon::now()->addYears(1)->timestamp;

        $this->popularGames = Cache::remember('popular-games', 1, function() use ($before, $after){
            // sleep(4);
            $client = new Client();
            $response = $client->post('https://api.igdb.com/v4/games', [
                'headers' => [
                    'Client-ID' => env('IGDB_CLIENT_ID'),
                    'Authorization' => 'Bearer '.env('IGDB_ACCESS_TOKEN'),
                ],
                'body' => "
                    fields name, rating, cover.*, platforms.*, slug;
                    where hypes >= 10
                    & first_release_date >= {$before}
                    & first_release_date < {$after}
                    & cover != null;
                    sort hypes desc;
                    limit 10;
                ",
            ]);

            $response = new Response($response);

            return collect($response->json());
        });

        $this->popularGames = $this->viewFormat($this->popularGames);
    }

    public function viewFormat($games)
    {
        $games = collect($games);
        
        return $games->map(function($game){
            return collect($game)->merge([
                'imageCover' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
                'rating' => isset($game['rating']) ? round($game['rating']) : null,
                'abbreviations' => collect($game['platforms'])->pluck('abbreviation')->implode(', ')
            ]);
        });
    }

    public function render()
    {
        // dump($this->popularGames);
        return view('livewire.popular-games', [
            'popularGames' => $this->popularGames
        ]);
    }
}
