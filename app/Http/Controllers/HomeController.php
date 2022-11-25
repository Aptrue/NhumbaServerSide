<?php

namespace App\Http\Controllers;

use App\Models\Realstate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $realstate = Realstate::all()->count();
        return view('home', compact([
            'realstate'
        ]));
    }
}
