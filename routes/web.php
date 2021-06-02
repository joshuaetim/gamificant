<?php

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use MarcReichel\IGDBLaravel\Models\Platform;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('show', function() {
    return view('show');
});

Route::get('clear', function(){
    
    Cache::flush();
    return 123;
});
Route::get('/', [GameController::class, 'index']);

Route::get('games/{slug}', [GameController::class, 'show'])->name('games.show');

Route::get('/partials/popular-games', [GameController::class, 'fetchPopularGames']);

Route::get('test', function(){
    
    $after = Carbon::now()->addMonths(5)->timestamp;
    $now = Carbon::now()->timestamp;
    $before = Carbon::now()->subYears(1)->timestamp;

    $client = new Client();

    $games = Cache::remember('test', 1, function() use($now, $after, $client, $before){

        $response = $client->request('POST', 'https://api.igdb.com/v4/games', [
        'headers' => [
            'Client-ID' => 'ilkptgvx2ijd5uxydk5yuguo7vofn9',
            'Authorization' => 'Bearer 9duwqah8hth0fsfj2h9w11749ugvrz'
        ],
        'body' => "
            fields name, rating, cover.*, platforms.*, slug;
            where hypes >= 10
            & first_release_date >= {$before}
            & first_release_date < {$after}
            & cover != null;
            sort hypes desc;
            limit 10;
            "
            ]);

        $response = new Response($response);

        return collect($response->json());

    });

    $final = $games->map(function($game){
        return collect($game)->merge([
            'imageCover' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
            'rating' => isset($game['rating']) ? round($game['rating']).'%' : null,
            'abbreviations' => collect($game['platforms'])->pluck('abbreviation')->implode(', ')
        ]);
    });

    dd($final);
});
