<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Classes\PopularGames;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use MarcReichel\IGDBLaravel\Models\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function fetchPopularGames()
    {
        $popularGames = PopularGames::getGames();

        return view('popular-games', [
            'popularGames' => $popularGames,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $client = new Client();
        $response = $client->post('https://api.igdb.com/v4/games', [
            'headers' => [
                'Client-ID' => env('IGDB_CLIENT_ID'),
                'Authorization' => 'Bearer '.env('IGDB_ACCESS_TOKEN'),
            ],
            'body' => "
                fields *, cover.url, genres.name, involved_companies.company.name, platforms.*, rating, aggregated_rating, summary, videos.*, screenshots.*, similar_games.*, similar_games.cover.*, similar_games.platforms.*;
                where slug=\"{$slug}\";
            ",
        ]);

        $response = new Response($response);

        $game = $response->json();

        abort_if(!$game, 404);

        $game = $this->viewFormat($game[0]);

        // dump($game);

        return view('show', [
            'game' => $game
        ]);
    }

    public function viewFormat($game)
    {
        $game = collect($game);

        return $game->merge([
            'imageCover' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
            'rating' => isset($game['rating']) ? round($game['rating']).'%' : null,
            'aggregated_rating' => isset($game['aggregated_rating']) ? round($game['aggregated_rating']).'%' : null,
            'abbreviations' => collect($game['platforms'])->pluck('abbreviation')->implode(', '),
            'company' => isset($game['involved_companies']) ? $game['involved_companies'][0]['company']['name'] : null,
            'genres' => isset($game['genres']) ? collect($game['genres'])->pluck('name')->implode(', ') : null,
            'similar_games' => collect($game['similar_games'])->map(function($game){
                return [
                    'slug' => $game['slug'],
                    'coverImage' => isset($game['cover']['url']) ? Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) : null,
                    'name' => $game['name'],
                    'platforms' => isset($game['platforms']) ? collect($game['platforms'])->pluck('abbreviation')->implode(', ') : null,
                    'rating' => isset($game['rating']) ? round($game['rating']).'%' : null,
                ];
            })->take(6)
        ]);
    }
}
