@extends('welcome')

@section('content')
<div class="top-content">
    <div class="top-headings">
        <h5>About Us</h5>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">about</li>
        </ul>
    </div>
</div>
<div class="middle-section">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="middle-image">
                <img src="{{url('images/service2.jpg')}}" alt="about-image">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="middle-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure commodi quo dicta rem reprehenderit quos vero hic odit nihil, quisquam ab, facilis nostrum ipsum dolores aspernatur blanditiis eaque iste eius.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium facere eaque sapiente numquam est inventore qui dolor quod fugiat, architecto optio dignissimos sequi temporibus culpa reiciendis autem. Aperiam, tenetur nesciunt.
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, numquam ratione ab dolore laudantium tenetur. Ducimus dicta accusantium, consequuntur debitis esse, aspernatur sapiente nisi qui exercitationem sint, eligendi ipsam repellendus.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla perspiciatis sunt culpa laudantium veritatis commodi, rem porro architecto? Deleniti reiciendis cupiditate autem nihil esse incidunt ducimus quisquam sed commodi praesentium?
                </p>

            </div>
        </div>
    </div>
    </div>
</div>





@endsection