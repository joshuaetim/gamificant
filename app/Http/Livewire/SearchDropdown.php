<?php

namespace App\Http\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;
use Illuminate\Http\Client\Response;

class SearchDropdown extends Component
{
    public $search = '';
    public $searchResults = [];

    public function updatedSearch()
    {
        $client = new Client();
        $response = $client->post('https://api.igdb.com/v4/games', [
            'headers' => [
                'Client-ID' => env('IGDB_CLIENT_ID'),
                'Authorization' => 'Bearer '.env('IGDB_ACCESS_TOKEN'),
            ],
            'body' => "
                search \"{$this->search}\";
                fields name, slug, cover.url;
                limit 7;
            ",
        ]);

        $response = new Response($response);

        $this->searchResults = $response->json();

        // dump($this->searchResults);
    }

    public function render()
    {
        return view('livewire.search-dropdown', [
            'searchResults' => $this->searchResults
        ]);
    }
}
