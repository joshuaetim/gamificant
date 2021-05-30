<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Livewire\Component;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Cache;
use MarcReichel\IGDBLaravel\Models\Game;

class MostAnticipated extends Component
{

    public $mostAnticipated = [];
    
    public function loadMostAnticipated()
    {
        $after = Carbon::now()->addMonths(5)->timestamp;
        $now = Carbon::now()->timestamp;

        $this->mostAnticipated = Cache::remember('most-anticipated', 10, function() use ($after, $now){
            // sleep(7);
            $client = new Client();
            $response = $client->request('POST', 'https://api.igdb.com/v4/games', [
                'headers' => [
                    'Client-ID' => 'ilkptgvx2ijd5uxydk5yuguo7vofn9',
                    'Authorization' => 'Bearer 9duwqah8hth0fsfj2h9w11749ugvrz'
                ],
                'body' => "
                    fields name, first_release_date, cover.*;
                    where hypes >= 2
                    & first_release_date >= {$now}
                    & first_release_date < {$after};
                    sort hypes desc;
                    limit 4;
                ",
            ]);

            $response = new Response($response);

            return collect($response->json());
        });
    }
    
    public function render()
    {
        return view('livewire.most-anticipated', [
            'mostAnticipated' => $this->mostAnticipated
        ]);
    }
}
