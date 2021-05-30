<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Livewire\Component;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Cache;
use MarcReichel\IGDBLaravel\Models\Game;

class RecentlyReviewed extends Component
{

    public $recentlyReviewed = [];
    
    public function loadRecentlyReviewed()
    {
        $recent = Carbon::now()->subMonths(3)->timestamp;
        $now = Carbon::now()->timestamp;

        $this->recentlyReviewed = Cache::remember('recently-reviewed', 10, function() use ($recent, $now){
            // sleep(7);
            $client = new Client();
            $response = $client->request('POST', 'https://api.igdb.com/v4/games', [
                'headers' => [
                    'Client-ID' => 'ilkptgvx2ijd5uxydk5yuguo7vofn9',
                    'Authorization' => 'Bearer 9duwqah8hth0fsfj2h9w11749ugvrz'
                ],
                'body' => "
                    fields name, rating, cover.*, summary, platforms.*;
                    where rating_count >= 3
                    & first_release_date >= {$recent}
                    & first_release_date < {$now};
                    sort first_release_date desc;
                    limit 3;
                ",
            ]);

            $response = new Response($response);

            return collect($response->json());
        });
    }
    
    public function render()
    {
        return view('livewire.recently-reviewed', [
            'recentlyReviewed' => $this->recentlyReviewed
        ]);
    }
}