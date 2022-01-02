@extends('welcome')

@section('content')
<div class="top-content">
    <div class="top-headings">
        <h5>Our Services</h5>
    </div>
</div>

<div class="service-page container">
    <div class="row">
        <div class="col-lg-4">
            <!-- <a href="{{url('geotechnical-investigation')}}"> -->
                <div class="service clearfix">
                    <div class="service-img">
                        <img src="{{url('images/service5.jpg')}}" alt="service-image">
                    </div>
                    <div class="services-desc">
                        <div class="service-title">
                            <h4>Geotechnical Investigation</h4>
                            <p></p>
                        </div>Geotechnical investigation (Surface and Subsurface explorations) services to architects,
                        developers, consultants......
                    </div>

                    <a href="{{url('geotechnical-investigation')}}"><button type="submit" class="btn btn-primary">More</button></a>

                </div>
            <!-- </a> -->
        </div>
        <div class="col-lg-4">
            <!-- <a href="{{url('material-testing')}}"> -->
                <div class="service clearfix">
                    <div class="service-img">
                        <img src="{{url('images/service4.jpg')}}" alt="service-image">
                    </div>
                    <div class="services-desc">
                        <div class="service-title">
                            <h4>Material Testing</h4>
                            <p></p>
                        </div>Madeena Lab offers Physical, mechanical and chemical analysis of wide range of materials used
                        by the construction and its allied industry.......
                    </div>
                    <a href="{{url('material-testing')}}"><button type="submit" class="btn btn-primary">More</button></a>

                </div>
            <!-- </a> -->
        </div>
        <div class="col-lg-4">

            <!-- <a href="{{url('laboratory-testing')}}"> -->
                <div class="service clearfix">
                    <div class="service-img">
                        <img src="{{url('images/service2.jpg')}}" alt="service-image">
                    </div>
                    <div class="services-desc">
                        <div class="service-title">
                            <h4>Laboratory Testing</h4>
                            <p></p>
                        </div>The core offered by the material division includes testing of soil, Rock, concrete,
                        steel, water etc The core offered by the material......
                    </div>
                    <a href="{{url('laboratory-testing')}}"><button type="submit" class="btn btn-primary">More</button></a>

                </div>
            <!-- </a> -->

        </div>

    </div>
    <!-- <div class="container">
        <div class="booking-form-heading">
            <h3>Book us Now</h3>
        </div>
        <div class="booking-form">

            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName4">First Name</label>
                        <input type="Text" class="form-control" id="inputName4">
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
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <button type="submit" class="btn btn-primary">Book</button>
            </form>
        </div>
    </div> -->
</div>
</div>


@endsection