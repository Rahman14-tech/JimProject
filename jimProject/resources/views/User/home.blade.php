@extends('layouts.Userlay')

@section('content')
    <div class="tubuhHitam">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div id="carouselExampleDark" class="carousel carousel-light slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item c-item active" data-bs-interval="10000">
                    <img src="{{ asset('img/gym4.jpg') }}" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption top-50 mb-5">
                        <h5>Learn</h5>
                        <p>Learn some exercises from beginner to expert level.</p>
                    </div>
                </div>
                <div class="carousel-item c-item" data-bs-interval="2000">
                    <img src="{{ asset('img/gym5.jpg') }}" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption top-50 ">
                        <h5>Adapt</h5>
                        <p>Make your body adapts to the pain that you received from your exercise.</p>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="{{ asset('img/gym6.jpg') }}" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption top-50 ">
                        <h5>Teach/Share</h5>
                        <p>Teach or share your knowledge to the others with respectfull.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h1 style="text-align: center;margin-top:4rem;margin-bottom:2rem;" class="whiteText">Recommendation of the day</h1>
        <section class="categories row m-5">
            @foreach ($Datum as $D)
                <div class="col-md-4 mb-3 mb-lg-0">
                    <a href="{{ url('Exercise', $D->id) }}">
                        <div class="hover hover-1 text-white rounded"><img src="{{ $D->ThumbnailImage }}" alt="">
                            <div class="hover-overlay"></div>
                            <div class="hover-1-content px-5">
                                <h3 class="hover-1-title text-uppercase font-weight-bold mb-2"> {{ $D->Name }}</h3>
                                <p class="hover-1-description font-weight-light mb-0">
                                    Choose your exercise and i'm sure that you can master this exercise in no time with
                                    our
                                    help. The help that we mention provide instruction, related youtube video, and tool
                                    that
                                    needed for the exercise.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </section>


    </div>
@endsection
