<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Part;

class partController extends Controller
{
    public function create()
    {
        $data = Part::all();

        return view('admin.other.part.create', compact('data'));
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
        //
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
