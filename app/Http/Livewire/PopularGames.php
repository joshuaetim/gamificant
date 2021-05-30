<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Livewire\Component;
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

        $this->popularGames = Cache::remember('popular-games', 10, function() use ($before, $after){
            // sleep(4);
            $client = new Client();
            $response = $client->post('https://api.igdb.com/v4/games', [
                'headers' => [
                    'Client-ID' => env('IGDB_CLIENT_ID'),
                    'Authorization' => 'Bearer '.env('IGDB_ACCESS_TOKEN'),
                ],
                'body' => "
                    fields name, rating, cover.*, platforms.*;
                    where hypes >= 10
                    & first_release_date >= {$before}
                    & first_release_date < {$after};
                    sort hypes desc;
                    limit 10;
                ",
            ]);

            $response = new Response($response);

            return collect($response->json());
        });
    }

    public function render()
    {
        return view('livewire.popular-games', [
            'popularGames' => $this->popularGames
        ]);
    }
}
