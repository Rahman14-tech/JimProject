<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Difficulty;
use App\Models\Exercise;
use App\Models\Part;
use App\Models\Tool;
use App\Models\Type;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Exercise::with('type', 'tool', 'part', 'difficulty')->get();
        return view('admin.index', compact('data'));
    }

    public function otherindex()
    {
        $type = Type::all();
        $tool = Tool::all();
        $diff = Difficulty::all();
        $part = Part::all();
        return view('admin.other', [
            'typedata' => $type,
            'tooldata' => $tool,
            'diffdata' => $diff,
            'partdata' => $part,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.exercises.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        // return view('admin.exercises.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
