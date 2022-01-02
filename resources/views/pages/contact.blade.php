@extends('welcome')

@section('content')
<div class="top-content">
    <div class="top-headings">
        <h5>Contact Us</h5>
    </div>
</div>
<div class="map">
	<div class="map-image">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.0145060772165!2d85.34289621453782!3d27.685946533040116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190fc042d399%3A0x6064967133397f28!2sCreatu%20Developers!5e0!3m2!1sen!2snp!4v1640253262014!5m2!1sen!2snp" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	
</div>
<div class="contact container">
	<div class="row">
		<div class="col-lg-4 col-md-4">
			<span>
				<div class="contact-info-section">				
				<div class="phone-no-icon">
					<i class="fas fa-phone-square fa-lg"></i>
					<div class="v-stack gap-3">
						<h6>+977-9850000000</h6>
						<h6>+977-9860101010</h6>	
					</div>
				</div>
				<div class="phone-no-icon">
					<i class="fas fa-envelope-square"></i>
					<div class="v-stack gap-3 ">
						<a href="#"><h6>hello@gmail.com</h6></a>
						<a href="#"><h6>almadina.com</h6></a>						
					</div>
				</div>
				<div class="phone-no-icon">
					<i class="fas fa-map-marker-alt"></i>
					<div class="v-stack gap-3">
						<h6>Kathmandu ,Nepal</h6>	
					</div>
				</div>
				<div class="follow-us">
					<div class="follow-us-heading">
						<span>Follow Us</span>
					</div>
					<div class="social-icons">
						
						<a href="#"><i class="fab fa-facebook"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
					</div>
				</div>		
			</div>
			</span>	
		</div>
		<div class="col-lg-8 col-md-8">
			<div class="contact-info-section">
				<div class="contact-info-section-heading">
					<h5>GET IN TOUCH</h5>
				</div>
				<form>
					<div class="form-row ">
						<div class="col">							
							<input type="text" class="form-control" placeholder="First name">
						</div>
						<div class="col">
							<input type="text" class="form-control" placeholder="Last name">
						</div>
					</div>
					<div class="form-group">
					<input type="Email" class="form-control" placeholder="Email">
					</div>
					<div class="form-group">
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Message"></textarea>
					</div>

					<a href="#"><button type="button" class="btn btn-primary">Submit</button></a>
				</form>
			</div>
		</div>
	</div>
</div>


@endsection