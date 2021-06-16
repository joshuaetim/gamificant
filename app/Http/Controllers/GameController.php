<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Classes\PopularGames;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

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
                fields name, cover.url, genres.name, involved_companies.company.name, platforms.*, rating, aggregated_rating, summary, videos.*, screenshots.*, similar_games.*, similar_games.cover.*, similar_games.platforms.*, websites.*;
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
            'imageCover' => isset($game['cover']) ? Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) : null,
            'rating' => isset($game['rating']) ? round($game['rating']) : null,
            'aggregated_rating' => isset($game['aggregated_rating']) ? round($game['aggregated_rating']) : null,
            'abbreviations' => isset($game['platforms']) ? collect($game['platforms'])->pluck('abbreviation')->implode(', ') : null,
            'company' => isset($game['involved_companies']) ? $game['involved_companies'][0]['company']['name'] : null,
            'genres' => isset($game['genres']) ? collect($game['genres'])->pluck('name')->implode(', ') : null,
            'trailer' => "https://youtube.com/embed/".$game['videos'][0]['video_id'],
            'similar_games' => isset($game['similar_games']) ? collect($game['similar_games'])->map(function($game){
                return [
                    'slug' => $game['slug'],
                    'coverImage' => isset($game['cover']['url']) ? Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) : null,
                    'name' => $game['name'],
                    'platforms' => isset($game['platforms']) ? collect($game['platforms'])->pluck('abbreviation')->implode(', ') : null,
                    'rating' => isset($game['rating']) ? round($game['rating']) : null,
                ];
            })->take(6) : [],
            'socials' => isset($game['websites']) ? [
                'website' => collect($game['websites'])->first(),
                'facebook' => collect($game['websites'])->filter(function($website){
                    return Str::contains($website['url'], 'facebook');
                })->first(),
                'twitter' => collect($game['websites'])->filter(function($website){
                    return Str::contains($website['url'], 'twitter');
                })->first(),
                'instagram' => collect($game['websites'])->filter(function($website){
                    return Str::contains($website['url'], 'instagram');
                })->first(),
            ] : [
                'website' => null,
                'facebook' => null,
                'twitter' => null,
                'instagram' => null,
            ],
        ]);
    }
}
