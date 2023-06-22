<?php

namespace App\Http\Controllers;

use App\Models\Part;
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
        return view('User.home')->with('message', 'Succes!');
    }
    public function selection()
    {
        $allParts = Part::all();
        return view('User.selection', [
            'Parts' => $allParts,
        ]);
    }
}