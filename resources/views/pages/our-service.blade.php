@extends('welcome')

@section('content')
<div class="top-content">
    <div class="top-headings">
        <h5>Our Services</h5>
    </div>
</div>

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
                    <h4>Geotechnical investigation</h4>
                    <p>Geotechnical investigation (Surface and Subsurface explorations) services to architects,
                        developers, consultants and contractors. These investigations are performed to guide the
                        consultants and the designers in designing the suitable type of the foundations or to provide
                        general information regarding the subsurface conditions. The surface exploration includes
                        geologic mapping, geophysical methods and photogrammetry. Subsurface exploration usually
                        involves drilling of boreholes up to the required depth and collecting samples for further
                        laboratory tests.
                    </p>
                    <p>Vast experience developing subsurface investigations and geotechnical laboratory testing
                        programs tailored to meet our customer’s requirements. Our professional team of geotechnical
                        engineers and geologists have diversified experience in monitoring investigations as well as
                        classifying the materials. Site specific laboratory testing based on the end use of the data are
                        designed to determine soil and rock parameters required for geotechnical analysis and design.
                        The inconsistency and composition of the land requires the use of suitable drilling technique
                        and machine. Extensive experience in the field of Geotechnical Investigations ensures to provide
                        the right kind of the machine for the right applications. Geotechnical scope mainly covers the
                        following activities;
                    </p>
                    <ul>
                        <li>Drilling, Sampling in Soil and Rock</li>
                        <li>Standard Penetration Test</li>
                        <li>Cone Penetration Test</li>
                        <li>Ground Water Monitoring</li>
                        <li>Permeability Tests</li>
                        <li>Trial pits excavation and logging </li>
                        <li>In-situ Density Tes</li>
                        <li>Plate Bearing Test</li>
                        <li>Plate Bearing Test</li>
                        <li>Thermal Resistivity Test</li>
                    </ul>
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
    </div>
</div>


        @endsection