<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Difficulty;
use App\Models\Exercise;
use App\Models\Part;
use App\Models\Tool;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class exerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type = Type::all();
        $tool = Tool::all();
        $diff = Difficulty::all();
        $part = Part::all();

        return view('admin.exercises.create', [
            'typedata' => $type,
            'tooldata' => $tool,
            'diffdata' => $diff,
            'partdata' => $part,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            // 'Type' => 'required',
            // 'Part' => 'required',
            // 'Tool' => 'required',
            // 'Difficulty' => 'required',
            'Instruction' => 'required',
            'VideoUrl' => 'required',
        ]);

        $alldata = Exercise::all();

        foreach($alldata as $data){
            if(strtoupper($request->Name) == strtoupper($data->Name) && strtoupper($request->VideoUrl) == strtoupper($data->VideoUrl)){

                return redirect('/');
            };

        }

        // $imagePath = $request->file('image_url')->store('img/exercises_thumbnail', ['disk' => 'public']);

        $newExercise = new Exercise();
        $newExercise->Name = $request->Name;
        $newExercise->Type = $request->Type;
        $newExercise->Part = $request->Part;
        $newExercise->Tool = $request->Tool;
        $newExercise->Difficulty = $request->Difficulty;
        $newExercise->Instruction = $request->Instruction;
        $newExercise->VideoUrl = $request->VideoUrl;

        $video_id = explode("?v=", $request->VideoUrl);
        $video_id = $video_id[1];
        $Thumbnail_url="http://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";

        $newExercise->ThumbnailImage = $Thumbnail_url;

        // $newExercise->image_url = '/storage/' . $imagePath;
        $newExercise->save();

        return redirect()->route('admin.home');
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
        $exercise = Exercise::findOrFail($id);
        $type = Type::all();
        $tool = Tool::all();
        $diff = Difficulty::all();
        $part = Part::all();

        return view('admin.exercises.edit', [
            'exercisedata' => $exercise,
            'typedata' => $type,
            'tooldata' => $tool,
            'diffdata' => $diff,
            'partdata' => $part,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Name' => 'required',
            // 'Type' => 'required',
            // 'Part' => 'required',
            // 'Tool' => 'required',
            // 'Difficulty' => 'required',
            'Instruction' => 'required',
            'VideoUrl' => 'required',
        ]);

        // $imagePath = $request->file('image_url')->store('img/exercises_thumbnail', ['disk' => 'public']);

        $editExercise = Exercise::findOrFail($id);
        $editExercise->Name = $request->Name;
        $editExercise->Type = $request->Type;
        $editExercise->Part = $request->Part;
        $editExercise->Tool = $request->Tool;
        $editExercise->Difficulty = $request->Difficulty;
        $editExercise->Instruction = $request->Instruction;
        $editExercise->VideoUrl = $request->VideoUrl;

        $video_id = explode("?v=", $request->VideoUrl);
        $video_id = $video_id[1];
        $Thumbnail_url="http://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";

        $editExercise->ThumbnailImage = $Thumbnail_url;

        // $newExercise->image_url = '/storage/' . $imagePath;
        $editExercise->save();

        return redirect()->route('admin.home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
