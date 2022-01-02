@extends('welcome')
@section('content')
<div class="client-contents">
    <div class="container">
    <div class="row">
        <div class="offset-lg-1"></div>
        <div class="col-lg-5 col-md-5 col-sm-5">
            <div class="client">
                <div class="client-info">
                <div class="client-img">
                    <img src="{{url('images/client.jpg')}}" alt="client-image">
                </div>
                <div class="client-desc">
                    <h5>Name</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, illum possimus? Nesciunt nobis officiis ut, voluptatum hic blanditiis corrupti ipsam, odio qui, placeat iure optio? Atque fugiat pariatur earum distinctio?</p>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5">
            <div class="client">
                <div class="client-info">
                <div class="client-img">
                    <img src="{{url('images/client.jpg')}}" alt="client-image">
                </div>
                <div class="client-desc">
                    <h5>Name</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, illum possimus? Nesciunt nobis officiis ut, voluptatum hic blanditiis corrupti ipsam, odio qui, placeat iure optio? Atque fugiat pariatur earum distinctio?</p>
                </div>
                </div>
            </div>
        </div>
       <div class="offset-lg-1"></div>
    </div>
    </div>
</div>
@endsection