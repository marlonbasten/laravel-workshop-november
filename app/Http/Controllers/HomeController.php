<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /**

        \App\Models\Hospital::factory()
            ->has(
                \App\Models\Location::factory()
                    ->has(
                        \App\Models\Facility::factory()
                            ->count(random_int(2,10))
                    )->count(random_int(2,3))
            )
                ->count(10)
                ->create();

         */

        $hospitals = Hospital::with('locations.facilities')->orderBy('id', 'desc')->take(10)->get();

        return view('home')->with(compact('hospitals'));
    }
}
