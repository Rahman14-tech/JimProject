<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;

class typeController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.other.type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
        ]);

        $alldata = Type::all();

        foreach($alldata as $data){
            if(strtoupper($request->Name) == strtoupper($data->Name)){
                return redirect()->route('admin.other');
            };

        }

        $newType = new Type();
        $newType->Name = $request->Name;
        $newType->save();

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
        $data = Type::findOrFail($id);

        return view('admin.other.type.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Name' => 'required',
        ]);


        $editType = Type::findOrFail($id);
        $editType->Name = $request->Name;
        $editType->save();

        return redirect()->route('admin.other');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteType = Type::findOrFail($id);
        $deleteType->delete();

        return redirect()->route('admin.other');
    }
}
