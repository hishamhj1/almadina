@extends('welcome')

@section('content')
<div class="top-content">
    <div class="top-headings">
        <h5>Our Services</h5>
    </div>
</div>

<div class="service-page">
    <div class="row">
        <div class="col-lg-10">
            <a href="{{url('geotechnical-investigation')}}">
                <div class="service clearfix">
                    <div class="service-img">
                        <img src="{{url('images/service5.jpg')}}" alt="service-image">
                    </div>
                    <div class="services-desc">
                        <div class="service-title">
                            <h4>Geotechnical Investigation</h4>
                            <p></p>
                        </div>Geotechnical investigation (Surface and Subsurface explorations) services to architects,
                        developers, consultants and contractors. These investigations are performed to guide the
                        consultants and the designers in designing the suitable type of the foundations or to provide
                        general information regarding the subsurface conditions.....
                    </div>

                    <a href="{{url('geotechnical-investigation')}}"><button type="submit" class="btn btn-primary">More</button></a>

                </div>
            </a>
            <a href="{{url('material-testing')}}">
                <div class="service clearfix">
                    <div class="service-img">
                        <img src="{{url('images/service4.jpg')}}" alt="service-image">
                    </div>
                    <div class="services-desc">
                        <div class="service-title">
                            <h4>Material Testing</h4>
                            <p></p>
                        </div>Madeena Lab offers Physical, mechanical and chemical analysis of wide range of materials used
                        by the construction and its allied industry. The testing is carried out as per the International
                        Standards and specifications as defined in BS, ASTM, BS EN, AASHTO, CIRIA, DIN, ISO etc.The core services offered by the material division includes testing of soil, Rock, concrete,
                        steel, water etc......
                    </div>
                    <a href="{{url('material-testing')}}"><button type="submit" class="btn btn-primary">More</button></a>

                </div>
            </a>

            <a href="{{url('laboratory-testing')}}">
                <div class="service clearfix">
                    <div class="service-img">
                        <img src="{{url('images/service2.jpg')}}" alt="service-image">
                    </div>
                    <div class="services-desc">
                        <div class="service-title">
                            <h4>Laboratory Testing</h4>
                            <p></p>
                        </div>The core offered by the material division includes testing of soil, Rock, concrete,
                        steel, water etc......
                    </div>
                    <a href="{{url('laboratory-testing')}}"><button type="submit" class="btn btn-primary">More</button></a>

                </div>
            </a>
        </div>
        <div class="col-lg-2">
            <div class="other-services">
                <div class="service-listing-heading">
                    <h5>Other Services</h5>
                </div>
                <div class="service-listing">
                    <div class="service-listing-image">
                        <a href="#"><img src="{{url('images/service2.jpg')}}" alt="service image"></a>
                    </div>
                    <div class="service-listing-desc">
                        <a href="#">
                            <h6>Testing</h6>
                        </a>
                    </div>

                </div>
                <div class="service-listing">
                    <div class="service-listing-image">
                        <a href="#"><img src="{{url('images/service2.jpg')}}" alt="service image"></a>
                    </div>
                    <div class="service-listing-desc">
                        <a href="#">
                            <h6>Testing</h6>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="booking-form-heading">
            <h3>Book us Now</h3>
        </div>
    <div class="booking-form">
        
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName4">First Name</label>
                        <input type="Text" class="form-control" id="inputName4" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputName4">Last Name</label>
                        <input type="Text" class="form-control" id="inputName4">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <button type="submit" class="btn btn-primary">submit</button>
            </form>
        </div>
    </div>
</div>
</div>


@endsection