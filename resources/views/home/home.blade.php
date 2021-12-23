@extends('welcome')


@section('content')
<div class="carousel-section">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{url('images/carousel1.jpg')}}" class="d-block w-100 carousel_img" alt="image">
                <div class="carousel-text">
                    <p>welcome to my website</p>
                    <a href="#"><button type="submit" class="btn btn-primary">learn more</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('images/carousel2.jpg')}}" class="d-block w-100 carousel_img" alt="image">
                <div class="carousel-text">
                    <p>welcome to my website</p>
                    <a href="#"><button type="submit" class="btn btn-primary">learn more</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('images/carousel3.jpg')}}" class="d-block w-100 carousel_img" alt="image">
                <div class="carousel-text">
                    <p>welcome to my website</p>
                    <a href="#"><button type="submit" class="btn btn-primary">learn more</button></a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</div>
<div class="services">
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                Our Services
            </div>
            <div class="card-body">
                <div class="body-first-row">
                    <div class="row">
                        <x-service-card imageUrl="{{url('images/service1.jpg')}}" title="we provide you the best meaurement facilty"></x-service-card>
                        <x-service-card imageUrl="{{url('images/service2.jpg')}}" title="Best learning facility from experienced guides"></x-service-card>
                        <x-service-card imageUrl="{{url('images/service3.jpg')}}" title="subtle environment"></x-service-card>

                    </div>
                </div>
                <div class="body-first-row">
                    <div class="row">
                        <x-service-card imageUrl="{{url('images/service2.jpg')}}" title="Best learning facility from experienced guides"></x-service-card>
                        <x-service-card imageUrl="{{url('images/service5.jpg')}}" title="subtle environment"></x-service-card>
                        <x-service-card imageUrl="{{url('images/service4.jpg')}}" title="we provide you the best meaurement facilty"></x-service-card>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="why-us">
    <div class="container">
        <div class="why-us-title">
            <h4>Why us?</h4>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="first-reason">
                    <img src="{{url('images/whyus1.jpg')}}" alt="images">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="first-reason">
                    <img src="{{url('images/whyus2.jpg')}}" alt="images">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="first-reason">
                    <img src="{{url('images/whyus3.jpg')}}" alt="images">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="first-reason">
                    <img src="{{url('images/whyus2.jpg')}}" alt="images">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="review">
    <div class="container">
        <div class="review-title">
            <h4>What Our Client Have To Say About Us</h4>
        </div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('images/review1.jpg')}}" class="d-block w-100" alt="images">
    </div>
    <div class="carousel-item">
      <img src="{{url('images/review2.jpg')}}" class="d-block w-100" alt="images">
    </div>
    <div class="carousel-item">
      <img src="{{url('images/review3.jpg')}}" class="d-block w-100" alt="images">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
    </div>
</div>

@endsection