<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Difficulty;
use SebastianBergmann\Diff\Diff;

class diffController extends Controller
{
    public function checkDuplicate(Request $request)
    {
        $input = $request->input('input');
        $duplicate = Difficulty::where('Level', $input)->exists();
        return response()->json(['duplicate' => $duplicate]);
    }

    public function create()
    {
        return view('admin.other.diff.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'Level' => 'required',
        ]);

        $alldata = Difficulty::all();

        foreach($alldata as $data){
            if(strtoupper($request->Level) == strtoupper($data->Level)){
                return redirect()->route('admin.other');

            };

        }

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
        $deleteDifficulty = Difficulty::findOrFail($id);
        $deleteDifficulty->delete();

        return redirect()->route('admin.other');
    }
}
