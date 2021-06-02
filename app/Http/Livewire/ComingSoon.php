<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Livewire\Component;
use Illuminate\Support\Str;
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
                    fields name, first_release_date, cover.*, slug;
                    where first_release_date >= {$now}
                    & first_release_date < {$after}
                    & cover != null;
                    sort first_release_date desc;
                    limit 3;
                ",
            ]);

            $response = new Response($response);

            return collect($response->json());
        });

        $this->comingSoon = $this->viewFormat($this->comingSoon);
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
        return view('livewire.coming-soon', [
            'comingSoon' => $this->comingSoon
        ]);
    }
}
