@extends('layouts.Userlay')

@section('content')
    <div class="tubuhHitam">
        <h1 style="text-align: center;margin-top:4rem;margin-bottom:2rem;" class="whiteText">Choose your exercises</h1>
        <section class="categories row m-5">
            @if ($DifficultiesID != null)
                @foreach ($Datum as $d)
                    @if ($DifficultiesID == $d->Difficulty)
                        <div class="col-md-4 mb-3 mb-lg-0">
                            <div class="hover hover-1 text-white rounded"><img
                                    src="{{ asset('storage') }}/{{ $d->ThumbnailImage }}" alt="">
                                <div class="hover-overlay"></div>
                                <div class="hover-1-content px-5">
                                    <h3 class="hover-1-title text-uppercase font-weight-bold mb-2"> <span
                                            class="font-weight-light">{{ $d->Name }}</h3>
                                    <p class="hover-1-description font-weight-light mb-0">
                                        Choose your exercise and i'm sure that you can master this exercise in no time with
                                        our
                                        help. The help that we mention provide instruction, related youtube video, and tool
                                        that
                                        needed for the exercise.
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                @foreach ($Datum as $d)
                    @if ($PartsID == $d->Part)
                        <div class="col-md-4 mb-3 mb-lg-0">
                            <div class="hover hover-1 text-white rounded"><img
                                    src="{{ asset('storage') }}/{{ $d->ThumbnailImage }}" alt="">
                                <div class="hover-overlay"></div>
                                <div class="hover-1-content px-5">
                                    <h3 class="hover-1-title text-uppercase font-weight-bold mb-2"> <span
                                            class="font-weight-light">{{ $d->Name }}</h3>
                                    <p class="hover-1-description font-weight-light mb-0">
                                        Choose your exercise and i'm sure that you can master this exercise in no time
                                        with
                                        our
                                        help. The help that we mention provide instruction, related youtube video, and
                                        tool
                                        that
                                        needed for the exercise.
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
    </div>
    </section>
@endsection
