@extends('layouts.Userlay')

@section('content')
<div class="tubuh">
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <div id="carouselExampleDark" class="carousel carousel-light slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item c-item active" data-bs-interval="10000">
            <img src="{{ asset('img/gym4.jpg') }}" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption top-50 mb-5">
              <h5>ACU CUKA K4M0E</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item c-item" data-bs-interval="2000">
            <img src="{{ asset('img/gym5.jpg') }}" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption top-50 ">
              <h5>ACU RINDYU KAMOE</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item c-item">
            <img src="{{ asset('img/gym6.jpg') }}" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption top-50 ">
              <h5>ATU CAYANG K4M0E</h5>
              <p>Some representative placeholder content for the third slide.</p>
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
      
      <section class="categories row m-5">
        <div class="col-md-4 mb-3 mb-lg-0">
          <div class="hover hover-1 text-white rounded"><img src="{{ asset('img/bang maldikin.jpg') }}" alt="">
            <div class="hover-overlay"></div>
            <div class="hover-1-content px-5">
              <h3 class="hover-1-title text-uppercase font-weight-bold mb-2"> <span class="font-weight-light">Image </span>Caption</h3>
              <p class="hover-1-description font-weight-light mb-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit sed diam non pro id urna par iac ullamcorper lore vest id met nulla par.
                dolor sit amet, consectetur adipisicing elit sed diam non pro id urna par iac ullamcorper lore vest id met nulla par.
            </p>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 mb-3 mb-lg-0">
          <div class="hover hover-1 text-white rounded"><img src="{{ asset('img/bang maldikin.jpg') }}" alt="">
            <div class="hover-overlay"></div>
            <div class="hover-1-content px-5">
              <h3 class="hover-1-title text-uppercase font-weight-bold mb-2"> <span class="font-weight-light">Image </span>Caption</h3>
              <p class="hover-1-description font-weight-light mb-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit sed diam non pro id urna par iac ullamcorper lore vest id met nulla par.
                dolor sit amet, consectetur adipisicing elit sed diam non pro id urna par iac ullamcorper lore vest id met nulla par.
            </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-lg-0">
          <div class="hover hover-1 text-white rounded"><img src="{{ asset('img/bang maldikin.jpg') }}" alt="">
            <div class="hover-overlay"></div>
            <div class="hover-1-content px-5">
              <h3 class="hover-1-title text-uppercase font-weight-bold mb-2"> <span class="font-weight-light">Image </span>Caption</h3>
              <p class="hover-1-description font-weight-light mb-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit sed diam non pro id urna par iac ullamcorper lore vest id met nulla par.
                dolor sit amet, consectetur adipisicing elit sed diam non pro id urna par iac ullamcorper lore vest id met nulla par.
            </p>
            </div>
          </div>
        </div>

      </section>


</div>
@endsection
