<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        // $before = now()->subYears(1);
        // $recent = now()->subMonths(3);
        // $after = now()->addYears(1);

        // // fetch popular games
        // $popularGames = Game::select(['name', 'rating'])
        //     ->with(['cover' => ['url', 'image_id'], 'platforms'])
        //     ->where([
        //     ['hypes', '>=', 10],
        //     ])
        //     ->whereBetween('first_release_date', $before, $after)
        //     ->orderBy('hypes', 'desc')
        //     ->limit(10)
        //     ->get();

        // // fetch recently reviewed games (sort by date, ratings)
        // $recentlyReviewed = Game::select(['name', 'rating', 'summary'])
        //     ->with(['cover' => ['url', 'image_id'], 'platforms'])
        //     ->where([
        //     ['rating_count', '>=', 3],
        //     ])
        //     ->whereBetween('first_release_date', $recent, now())
        //     ->orderBy('first_release_date', 'desc')
        //     ->limit(3)
        //     ->get();

        // // fetch most anticipated (sort by hype, not yet released)
        // $mostAnticipated = Game::select(['name', 'first_release_date'])
        //     ->with(['cover' => ['url', 'image_id']])
        //     ->where([
        //     ['hypes', '>=', 2],
        //     ])
        //     ->whereBetween('first_release_date', now(), now()->addMonths(4))
        //     ->orderBy('hypes', 'desc')
        //     ->limit(3)
        //     ->get();
        
        // // fetch coming soon (not released, sort by date)
        // $comingSoon = Game::select(['name', 'first_release_date'])
        //     ->with(['cover' => ['url', 'image_id']])
        //     ->whereBetween('first_release_date', now(), now()->addMonths(4))
        //     ->orderBy('first_release_date', 'desc')
        //     ->limit(3)
        //     ->get();

        // return results and
        return view('index', [
            // 'popularGames' => $popularGames,
            // 'recentlyReviewed' => $recentlyReviewed,
            // 'mostAnticipated' => $mostAnticipated,
            // 'comingSoon' => $comingSoon,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
