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
            <a href="{{ route('login') }}" class="btn btn-s2 btn-lg mt-3">Get Started</a>
        </div>
    </section>

    <section class="features">
        <div class="container mt-5">
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

        <div class="container mt-5">
            <div class="row about-us">
                <div class="col text-center">
                    <img src="{{ asset('img/gym3.jpg') }}" style="width:70%;" alt="">
                </div>
                <div class="col ">
                    <div class="text-center mt-5">
                        <h3><b>About Us</b></h3>
                        <p>Welcome to our gym, where fitness and wellness come together. We are dedicated to helping individuals achieve their health goals and lead an active lifestyle.</p>
                        <p>At our gym, we offer state-of-the-art facilities equipped with the latest fitness equipment, spacious workout areas, and a supportive environment.</p>
                        <p>Our team of experienced trainers is committed to providing personalized training programs tailored to each individual's needs and fitness levels. Whether you are a beginner or an experienced athlete, we have something for everyone.</p>
                    </div>
                    <a href="{{ route('login') }}" class="btn btn-s3 btn-lg mt-3">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    
    <footer class="footer text-center bg-dark p-5 mt-5">
        <blockquote class="blockquote">
          <h3 class="mb-4">Obstacles can't stop you. Problems can't stop you. People can't stop you. Only you can stop you.</h3>
          <footer class="blockquote-footer">Jeffrey Gitomer</footer>
        </blockquote>
      </footer>
      
    

    
</html>



<!-- JS -->
