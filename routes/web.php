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

Route::get('/', function () {
    return view('welcome');
});

Route::get('show', function() {
    return view('show');
});

Route::get('/games', [GameController::class, 'index']);

Route::get('clear', function(){
    
    Cache::pull('popular-games');
    Cache::pull('recently-reviewed');
    Cache::pull('most-anticipated');
    Cache::pull('coming-soon');

    return 123;
});

Route::get('test', function(){
    
    $after = Carbon::now()->addMonths(5)->timestamp;
    $now = Carbon::now()->timestamp;

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