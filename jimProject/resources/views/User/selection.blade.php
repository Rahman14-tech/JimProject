@extends('layouts.Userlay')

@section('content')
    <div class="tubuhHitam">
        <h1 style="text-align: center;margin-top:4rem;margin-bottom:2rem;" class="whiteText">Level based exercise</h1>
        <section class="categories row m-5">
            <div class="col-md-4 mb-3 mb-lg-0">
                <div class="hover hover-1 text-white rounded"><img src="{{ asset('img/youngman.jpg') }}" alt="">
                    <div class="hover-overlay"></div>
                    <div class="hover-1-content px-5">
                        <h3 class="hover-1-title text-uppercase font-weight-bold mb-2"> <span
                                class="font-weight-light">Beginner</h3>
                        <p class="hover-1-description font-weight-light mb-0">
                            Jumpstart your fitness journey with our beginner exercise program. It's a good exercise for your
                            first time that has never into any exercises.Designed for all fitness
                            levels, it's the perfect way build strength, improve flexibility, and boost overall
                            fitness. Get started today!
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-lg-0">
                <div class="hover hover-1 text-white rounded"><img src="{{ asset('img/ronaldo.jpg') }}" alt="">
                    <div class="hover-overlay"></div>
                    <div class="hover-1-content px-5">
                        <h3 class="hover-1-title text-uppercase font-weight-bold mb-2"> <span
                                class="font-weight-light">Intermediate</h3>
                        <p class="hover-1-description font-weight-light mb-0">
                            Ready to level up? Our intermediate exercise program is designed to challenge and enhance your
                            fitness journey. With dynamic strength exercises, high-intensity cardio, and flexibility
                            training, you'll push your limits and achieve new heights. Get ready to elevate to
                            intermediatte.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-lg-0">
                <div class="hover hover-1 text-white rounded"><img src="{{ asset('img/tomplatz.jpg') }}" alt="">
                    <div class="hover-overlay"></div>
                    <div class="hover-1-content px-5">
                        <h3 class="hover-1-title text-uppercase font-weight-bold mb-2"> <span
                                class="font-weight-light">Expert</h3>
                        <p class="hover-1-description font-weight-light mb-0">
                            Are you ready to become a fitness pro? Our expert exercise program is designed for those seeking
                            the ultimate challenge. With advanced strength training, intense cardio workouts, and advanced
                            flexibility exercises, you'll push your limits like never before. Take your fitness to the
                            expert level. Join now!
                        </p>
                    </div>
                </div>
            </div>


        </section>
        <h1 style="text-align: center;margin-top:4rem;margin-bottom:2rem;" class="whiteText">Muscle based exercise</h1>
        <section class="categories row m-5">
            @foreach ($Parts as $p)
                <div class="col-md-4 mb-3 mb-lg-10">
                    <div class="hover hover-1 text-white rounded"><img src="{{ asset('img/') }}/{{ $p->Name }}.jpg"
                            alt="">
                        <div class="hover-overlay"></div>
                        <div class="hover-1-content px-5">
                            <h3 class="hover-1-title text-uppercase font-weight-bold mb-2"> <span
                                    class="font-weight-light">Beginner</h3>
                            <p class="hover-1-description font-weight-light mb-0">
                                Jumpstart your fitness journey with our beginner exercise program. It's a good exercise for
                                your
                                first time that has never into any exercises.Designed for all fitness
                                levels, it's the perfect way build strength, improve flexibility, and boost overall
                                fitness. Get started today!
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </section>

    </div>
@endsection
