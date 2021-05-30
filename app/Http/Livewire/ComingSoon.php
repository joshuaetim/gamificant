<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Livewire\Component;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Cache;
use MarcReichel\IGDBLaravel\Models\Game;

class ComingSoon extends Component
{
    public $comingSoon = [];

    public function loadComingSoon()
    {
        $after = Carbon::now()->addMonths(4)->timestamp;
        $now = Carbon::now()->timestamp;

        $this->comingSoon = Cache::remember('coming-soon', 10, function() use ($after, $now){
            // sleep(7);
            $client = new Client();
            $response = $client->request('POST', 'https://api.igdb.com/v4/games', [
                'headers' => [
                    'Client-ID' => 'ilkptgvx2ijd5uxydk5yuguo7vofn9',
                    'Authorization' => 'Bearer 9duwqah8hth0fsfj2h9w11749ugvrz'
                ],
                'body' => "
                    fields name, first_release_date, cover.*;
                    where first_release_date >= {$now}
                    & first_release_date < {$after};
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
        return view('livewire.coming-soon', [
            'comingSoon' => $this->comingSoon
        ]);
    }
}
