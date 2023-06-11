<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register Now !!!</title>
</head>

<body id="registerPart">
    <section class="vh-100">
        <div class="container py-3 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ asset('img/register.jpg') }}" alt="login form"
                                    class="img-fluid registrationImage"
                                    style="border-radius: 1rem 0 0 1rem; height: 45rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <h1>Registration </h1>
                                    <h6 class="name">Come exercise to become future daddy Noel !!!</h6>
                                    @if ($errors->any())
                                        <div class="alert alert-danger" role="alert">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-outline mb-1">
                                            <h6 class="name">Name</h6>
                                            <input type="text" class="form-control registForm w-125"
                                                placeholder="Name" aria-label="Username"name="name">
                                        </div>
                                        <div class="form-outline mb-1">
                                            <h6 class="name">Email</h6>
                                            <input type="email" class="form-control registForm w-125"
                                                placeholder="Name" aria-label="email"name="email">
                                        </div>
                                        <div class="form-outline mb-1">
                                            <h6>Age</h6>
                                            <input type="number" class="form-control" placeholder="Age"
                                                aria-label="Age"class="registForm"name="age">
                                        </div>
                                        <div class="form-outline mb-1">
                                            <h6>Password</h6>
                                            <input type="password" class="form-control registForm"
                                                placeholder="Password" aria-label="Password"name="password">
                                        </div>
                                        <div class="form-outline mb-1">
                                            <h6>Confirmation</h6>
                                            <input type="password" class="form-control registForm"
                                                placeholder="Confirmation Password" aria-label="confirmation"
                                                name="password_confirmation">
                                        </div>
                                        <div class="form-outline mb-1">
                                            <h6>What you considered as?</h6>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="LevelConsideration"
                                                    id="flexRadioDefault1" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Beginner
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="LevelConsideration"
                                                    id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Intermediate
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="LevelConsideration"
                                                    id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Expert
                                                </label>
                                            </div>
                                        </div>
                                        <div class="pt-1 mb-1">
                                            <button type="Submit"
                                                class="btn btn-outline-dark"style="margin-top:2rem;">Register</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
