<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Difficulty;
use SebastianBergmann\Diff\Diff;

class diffController extends Controller
{
    public function create()
    {
        $data = Difficulty::all();

        return view('admin.other.diff.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Level' => 'required',
        ]);

        $newDiff = new Difficulty();
        $newDiff->Level = $request->Level;
        $newDiff->save();

        return redirect()->route('admin.other');
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
    public function edit(string $id)
    {
        $data = Difficulty::findOrFail($id);

        return view('admin.other.diff.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Level' => 'required',
        ]);


        $editType = Difficulty::findOrFail($id);
        $editType->Level = $request->Level;
        $editType->save();

        return redirect()->route('admin.other');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
