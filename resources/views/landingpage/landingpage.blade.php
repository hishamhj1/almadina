@extends('welcome')


@section('content')
<div class="landing-page">
    <div class="landing-top-content">
        <div class="logo">
            <img src="{{url('images/blog1.jpg')}}" alt="logo">
        </div>
        <div class="landing-title">
            <h4>Title</h4>
        </div>
    </div>
    <div class="landing-middle-content">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3"></div>
                <div class="col-lg-3">
                    <div class="landing-des">
                        <div class="landing-images">
                            <img src="{{url('images/lamding1.jpg')}}" alt="images">
                        </div>
                        <a href="{{url('home')}}"> <button class="btn btn-primary" type="submit">view</button></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="landing-des">
                        <div class="landing-images">
                            <img src="{{url('images/landing2.jpg')}}" alt="images">
                        </div>
                        
                        <a href="#"></a><button class="btn btn-primary" type="submit">view</button>
                    </div>
                </div>
                <div class="offset-lg-3"></div>
            </div>
        </div>
    </div>
</div>
@endsection