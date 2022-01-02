@extends('welcome')


@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,800;1,200;1,300;1,400;1,700&family=Pushster&family=Vesper+Libre:wght@400;500;700;900&display=swap');
</style>
<div class="carousel-section">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{url('images/carousel1.jpg')}}" class="d-block w-100 carousel_img" alt="image">
                <div class="carousel-text">
                    <p>welcome to my websitewelcome to my websitewelcome to my website</p>
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
                        <x-service-card imageUrl="{{url('images/service1.jpg')}}" title="Title" description="we provide you the best meaurement facilty"></x-service-card>
                        <x-service-card imageUrl="{{url('images/service2.jpg')}}" title="title" description="Best learning facility from experienced guides."></x-service-card>
                        <x-service-card imageUrl="{{url('images/service3.jpg')}}" title="title" description="subtle environment."></x-service-card>

                    </div>
                </div>
                <div class="body-first-row">
                    <div class="row">
                    <x-service-card imageUrl="{{url('images/service2.jpg')}}" title="Title" description="we provide you the best meaurement facilty"></x-service-card>
                        <x-service-card imageUrl="{{url('images/service5.jpg')}}" title="title" description="Best learning facility from experienced guides."></x-service-card>
                        <x-service-card imageUrl="{{url('images/service4.jpg')}}" title="title" description="subtle environment."></x-service-card>

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
<div class="review-section">
    <div class="container">
        <div class="review-title">
            <h4>What Our Client Have To Say About Us</h4>
        </div>
        <div class="owl-carousel owl-theme reviews">
            <div class="item">
                <div class="review-images">
                    <img src="{{url('images/review1.jpg')}}" alt="reviwe-images">
                    <div class="review-content">
                        <blockquote class="blockquote mb-0">
                            <p>A well-known quote, contained in a blockquote element.</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="review-images">
                    <img src="{{url('images/review2.jpg')}}" alt="reviwe-images">
                    <div class="review-content">
                        <blockquote class="blockquote mb-0">
                            <p>A well-known quote, contained in a blockquote element.</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>

            </div>
            <div class="item">
                <div class="review-images">
                    <img src="{{url('images/review3.jpg')}}" alt="reviwe-images">
                    <div class="review-content">
                        <blockquote class="blockquote mb-0">
                            <p>A well-known quote, contained in a blockquote element.</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="review-images">
                    <img src="{{url('images/review1.jpg')}}" alt="reviwe-images">
                    <div class="review-content">
                        <blockquote class="blockquote mb-0">
                            <p>A well-known quote, contained in a blockquote element.</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<div class="subscription-section">
    <div class="container">
        <div class="subscribe-title">
            <h4> For Subscription</h4>
        </div>
        <form>
            <div class="form-row">
                <div class="offset-lg-4"></div>
            <div class="form-group col-md-4 col-lg-4 col-sm-4">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="hello@gmail.com" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="col-auto">
            <div class="subs-button" >
            <button type="submit" class="btn btn-primary">subscribe</button>
            </div>
            </div>
            </div>
        </form>
    </div>
</div>

@endsection