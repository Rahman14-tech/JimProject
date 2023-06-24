<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Part;
use Illuminate\Support\Facades\File;

class partController extends Controller
{
    public function create()
    {
        return view('admin.other.part.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'image_url' => 'required|image',
        ]);

        $alldata = Part::all();

        foreach($alldata as $data){
            if(strtoupper($request->Name) == strtoupper($data->Name)){

                return redirect()->route('admin.other');
            };
        }

        $imagePath = $request->file('image_url')->store('img/part_image', ['disk' => 'public']);

        $newPart = new Part();
        $newPart->Name = $request->Name;
        $newPart->image_url = '/storage/' . $imagePath;
        $newPart->save();

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
        $data = Part::findOrFail($id);

        return view('admin.other.part.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Name' => 'required',
            'image_url' => 'required|image',
        ]);

        $editPart = Part::findOrFail($id);
        $editPart->Name = $request->Name;
        if ($request->hasFile('image_url')) {
            // delete old image
            File::delete($editPart->image_url);

            // and store new image
            $imagePath = $request->file('image_url')->store('img/part_image', ['disk' => 'public']);
            $editPart->image_url = '/storage/' . $imagePath;
        }
        $editPart->save();

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
