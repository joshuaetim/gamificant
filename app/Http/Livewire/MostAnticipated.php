<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Livewire\Component;
use Illuminate\Support\Str;
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
                    'Client-ID' => env('IGDB_CLIENT_ID'),
                    'Authorization' => 'Bearer '.env('IGDB_ACCESS_TOKEN'),
                ],
                'body' => "
                    fields name, first_release_date, cover.*, slug;
                    where hypes >= 2
                    & first_release_date >= {$now}
                    & first_release_date < {$after}
                    & cover != null;
                    sort hypes desc;
                    limit 4;
                ",
            ]);

            $response = new Response($response);

            return collect($response->json());
        });
        $this->mostAnticipated = $this->viewFormat($this->mostAnticipated);
    }

    public function viewFormat($games)
    {
        $games = collect($games);
        
        return $games->map(function($game){
            return collect($game)->merge([
                'imageCover' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
                'first_release_date' => Carbon::parse($game['first_release_date'])->toFormattedDateString(),
            ]);
        });
    }
    
    public function render()
    {
        return view('livewire.most-anticipated', [
            'mostAnticipated' => $this->mostAnticipated
        ]);
    }
}
