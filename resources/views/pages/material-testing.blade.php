@extends('welcome')

@section('content')
<div class="testing">
    <div class=container>
        <div class="testing-image">
            <img src="{{url('images/service5.jpg')}}" alt="detail-image">
        </div>
        <div class="testing-desc">
            <div class="testing-title">
                <h3>Material testing</h3>
            </div>
            <div class="testing-content">
                <p>
                    Madeena Lab offers Physical, mechanical and chemical analysis of wide range of materials used
                    by the construction and its allied industry. The testing is carried out as per the International
                    Standards and specifications as defined in BS, ASTM, BS EN, AASHTO, CIRIA, DIN, ISO etc. In
                    certain cases, the tests can also be performed in accordance with the customer specified test
                    methods or procedure.
                </p>
                <p>
                    The core services offered by the material division includes testing of soil, Rock, concrete,
                    steel, water etc.
                </p>
                <p>
                    With the vast years of experience in the market and industry, the laboratory is capable to set up
                    on-site testing laboratory meeting the requirements of the client, consultant and the contractor.
                    On-site laboratory can vary from having the facility to undertake only the site testing to a
                    complete fully fledged laboratory dedicated to the particular project. These will enable all the
                    interested parties of the project to have direct access to the laboratory and also allow them to
                    witness the complete testing process.
                </p>
            </div>
        </div>
        <div class="otherservice-cards">
            <div class="otherservice-title">
                <h3>Other Services</h3>
            </div>
            <div class="otherservice-content">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="{{url('geotechnical-investigation')}}">
                            <div class="other">
                                <div class="other-image">
                                    <img src="{{url('images/service5.jpg')}}" alt="card-image">
                                </div>
                                <div class="other-title">
                                    <h4>geotechnical Investigation</h4>
                                </div>
                                <div class="other-desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In impedit quod maxime repellat voluptatum sapiente eius tenetur neque ipsam, vel nulla sint harum minus illum? Iure corporis error porro illum.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{url('laboratory-testing')}}">
                            <div class="other">
                                <div class="other-image">
                                    <img src="{{url('images/service3.jpg')}}" alt="card-image">
                                </div>
                                <div class="other-title">
                                    <h4>Laboratory Testing</h4>
                                </div>
                                <div class="other-desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In impedit quod maxime repellat voluptatum sapiente eius tenetur neque ipsam, vel nulla sint harum minus illum? Iure corporis error porro illum.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{url('geotechnical-investigation')}}">
                            <div class="other">
                                <div class="other-image">
                                    <img src="{{url('images/service5.jpg')}}" alt="card-image">
                                </div>
                                <div class="other-title">
                                    <h4>geotechnical Investigation</h4>
                                </div>
                                <div class="other-desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In impedit quod maxime repellat voluptatum sapiente eius tenetur neque ipsam, vel nulla sint harum minus illum? Iure corporis error porro illum.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="booking-form-heading">
            <h3>Book Now</h3>
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

@endsection