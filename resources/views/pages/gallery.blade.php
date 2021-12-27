@extends('welcome')

@section('content')
<div class="top-content">
    <div class="top-headings">
        <h5>Gallery</h5>
    </div>
</div>
<div class="gallery-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="gallery">
                    <a target="_top" href="{{('images/service1.jpg')}}">
                        <img src="{{('images/service1.jpg')}}" alt="Cinque Terre" height="400">
                    </a>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery">
                    <a target="_top" href="{{('images/service1.jpg')}}">
                        <img src="{{('images/service2.jpg')}}" alt="gallary-images" height="400">
                    </a>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery">
                    <a target="_top" href="{{('images/service1.jpg')}}">
                        <img src="{{('images/service2.jpg')}}" alt="gallery-images" height="400">
                    </a>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery">
                    <a target="_top" href="{{('images/service1.jpg')}}">
                        <img src="{{('images/service3.jpg')}}" alt="gallery-images" height="400">
                    </a>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="gallery">
                    <a target="_top" href="{{('images/service1.jpg')}}">
                        <img src="{{('images/service1.jpg')}}" alt="Cinque Terre" height="400">
                    </a>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery">
                    <a target="_top" href="{{('images/service1.jpg')}}">
                        <img src="{{('images/service2.jpg')}}" alt="gallary-images" height="400">
                    </a>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery">
                    <a target="_top" href="{{('images/service1.jpg')}}">
                        <img src="{{('images/service3.jpg')}}" alt="gallery-images" height="400">
                    </a>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery">
                    <a target="_top" href="{{('images/service1.jpg')}}">
                        <img src="{{('images/service3.jpg')}}" alt="gallery-images" height="400">
                    </a>

                </div>
            </div>
        </div>

        <div class="gallery-carousel">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{url('images/service1.jpg')}}" class="d-block w-100" alt="gallery">
                    </div>
                    <div class="carousel-item">
                        <img src="{{url('images/service3.jpg')}}" class="d-block w-100" alt="gallery">
                       
                    </div>
                    <div class="carousel-item">
                        <img src="{{url('images/review1.jpg')}}" class="d-block w-100" alt="gallery">
                        
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>



@endsection