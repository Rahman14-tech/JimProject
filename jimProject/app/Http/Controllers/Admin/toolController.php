<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tool;

class toolController extends Controller
{
    public function create()
    {
        return view('admin.other.tool.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
        ]);

        $alldata = Tool::all();

        foreach($alldata as $data){
            if(strtoupper($request->Name) == strtoupper($data->Name));

            return redirect('/');
        }

        $newTool = new Tool();
        $newTool->Name = $request->Name;
        $newTool->save();

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
    public function edit(Request $request, string $id)
    {
        $data = Tool::findOrFail($id);

        return view('admin.other.tool.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Name' => 'required',
        ]);


        $editTool = Tool::findOrFail($id);
        $editTool->Name = $request->Name;
        $editTool->save();

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
