<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    <title>Landing Page</title>
</head>
<body>
    <section class="hero">
        <div class="container">
            <h1>Welcome to Our Gym</h1>
            <p>Get in shape and stay healthy</p>
            <a href="{{ route('register') }}" class="btn btn-s2 btn-lg mt-3">Register</a>
            <a href="{{ route('login') }}" class="btn btn-s btn-lg mt-3">Login</a> <!-- Added login button -->
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature">
                        <img src="{{ asset('img/menu.jpg') }}" alt="">
                        <div>
                            <h3>Provide Exercises</h3>
                            <p>We provide training menus that are suitable for you on different body parts that you want to train.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <img src="{{ asset('img/gym2.jpg') }}" alt="">
                        <div>
                            <h3>Friendly Gym Users</h3>
                            <p>There are several different levels of exercise that you can choose according to your gym experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <img src="{{ asset('img/dumbel.jpg') }}" alt="">
                        <div>
                            <h3>Let's Get Started</h3>
                            <p>Just click Register or Login button on the top and let's get to the Exercises section and be part of us.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    
</html>



<!-- JS -->
