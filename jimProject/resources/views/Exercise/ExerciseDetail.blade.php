@extends('layouts.Userlay')

@section('content')
    <div class="tubuhHitam container">
        <div class="contentExercise">
            <div class="row">
                <div class="col">
                    <iframe src="https://www.youtube.com/embed/{{ $Datum->VideoUrl }}"id="the_vid"
                        style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px"
                        marginwidth="0px" allowfullscreen></iframe>
                </div>
                <div class="col">
                    <h1 class="whiteText">{{ $Datum->Name }}</h1>
                    <h2 class="whiteText">Type: {{ $Datum->type->Name }}</h2>
                    <h2 class="whiteText">Equipment: {{ $Datum->tool->Name }}</h2>
                    <h2 class="whiteText">Muscle Part: {{ $Datum->part->Name }}</h2>
                    <h2 class="whiteText">Difficulty: {{ $Datum->difficulty->Level }}</h2>
                </div>
            </div>
        </div>
        <br>
        <h1 class="whiteText">Instruction</h1>
        <h3 class="whiteText">{{ $Datum->Instruction }}</h3>
    </div>
@endsection
