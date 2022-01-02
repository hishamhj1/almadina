@extends('welcome')

@section('content')
<div class="top-content">
    <div class="top-headings">
        <h5>Gallery</h5>
    </div>
</div>
<!-- <div class="gallery-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                
                <div class="gallery">
                    <a target="_top" href="{{('images/service1.jpg')}}">
                        <img src="{{('images/service1.jpg')}}" alt="image" height="400">
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
                        <img src="{{('images/service1.jpg')}}" alt="image" height="400">
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

        
    </div>
</div> -->
<!-- Images used to open the lightbox -->
<div class="gallery-images">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="gallery">
                    <img src="{{url('images/img1.jpg')}}" onclick="openModal();currentSlide(1)" class="hover-shadow">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery">
                    <img src="{{url('images/img2.jpg')}}" onclick="openModal();currentSlide(2)" class="hover-shadow">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery">
                    <img src="{{url('images/img3.jpg')}}" onclick="openModal();currentSlide(3)" class="hover-shadow">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery">
                    <img src="{{url('images/img4.jpg')}}" onclick="openModal();currentSlide(4)" class="hover-shadow">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

        <div class="mySlides">
            <div class="numbertext">1 / 4</div>
            <img src="{{url('images/img1_wide.jpg')}}" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 4</div>
            <img src="{{url('images/img2_wide.jpg')}}" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 4</div>
            <img src="{{url('images/img3_wide.jpg')}}" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 4</div>
            <img src="{{url('images/img4_wide.jpg')}}" style="width:100%">
        </div>

        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Caption text -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <!-- Thumbnail image controls -->
        <div class="row">
            <div class="col-md-3">
                <div class="gallery1">
                    <img class="demo" src="{{url('images/img1.jpg')}}" onclick="currentSlide(1)" alt="Nature">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="gallery1">
                    <img class="demo" src="{{url('images/img2.jpg')}}" onclick="currentSlide(2)" alt="Snow">
                </div>
            </div>
            <div class="col-lg-3">

                <div class="gallery1">
                    <img class="demo" src="{{url('images/img3.jpg')}}" onclick="currentSlide(3)" alt="Mountains">
                </div>
            </div>
            <div class="col-lg-3">

                <div class="gallery1">
                    <img class="demo" src="{{url('images/img4.jpg')}}" onclick="currentSlide(4)" alt="Lights">
                </div>
            </div>
        </div>
    </div>
</div>



@endsection