<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Part;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $DatumSizeProto = Exercise::all();
        $DatumSize = count($DatumSizeProto);
        if ($DatumSize < 3) {
            $randomDatum = Exercise::all()->random($DatumSize)->values();
        } else {
            $randomDatum = Exercise::all()->random(3)->values();
        }
        return view('User.home', [
            'Datum' => $randomDatum,
        ]);
    }
    public function selection()
    {
        $allParts = Part::all();
        return view('User.selection', [
            'Parts' => $allParts,
        ]);
    }
    public function AllExercises(Request $request, string $type)
    {
        $allParts = DB::table('parts')->where('Name', $type)->first();
        $allDifficulties = DB::table('difficulties')->where('Level', $type)->first();
        if ($allDifficulties != null) {
            $Datum = Exercise::all();
            return view('Exercise.allExercise', [
                'Datum' => $Datum,
                'DifficultiesID' => (int) $allDifficulties->id,
                'PartsID' => null,
            ]);
        }
        $Datum = Exercise::all();
        return view('Exercise.allExercise', [
            'Datum' => $Datum,
            'PartsID' => (int) $allParts->id,
            'DifficultiesID' => null,
        ]);
    }

}