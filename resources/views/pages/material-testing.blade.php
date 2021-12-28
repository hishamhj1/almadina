<!-- <div class="testing">
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
</div> -->
@extends('welcome')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500&family=Libre+Baskerville&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,800;1,200;1,300;1,400;1,700&family=Pushster&family=Vesper+Libre:wght@400;500;700;900&display=swap');
</style>
<div class="bottom-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 ">
                <div class="middle-content">
                    <div class="service-images">
                        <img src="{{url('images/service2.jpg')}}" alt="service-image">
                    </div>
                </div>
                <div class="service-title">
                    <h4>Material Testing</h4>
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
            <div class="col-lg-2">
                <div class="middle-content">
                    <div class="other-service-heading">
                        <h5>Other Services</h5>
                    </div>
                    <div class="other-service">
                        <a href="#"> <img src="{{url('images/service1.jpg')}}" alt="service-image"></a>
                        <div class="other-service-desc">
                            <a href="#">
                                <h5>material Testing</h5>
                            </a>
                            <a href="#">
                                <p>Madeena Lab offers Physical, mechanical and chemical analysis of wide range of materials.....</p>
                            </a>
                        </div>
                    </div>
                    <div class="other-service">
                        <a href="#"> <img src="{{url('images/service4.jpg')}}" alt="service-image"></a>
                        <div class="other-service-desc">
                            <a href="#">
                                <h5>material Testing</h5>
                            </a>
                            <a href="#">
                                <p>Madeena Lab offers Physical, mechanical and chemical analysis of wide range of materials.....</p>
                            </a>
                        </div>
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