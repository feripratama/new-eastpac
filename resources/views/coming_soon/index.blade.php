
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
	<link rel="shortcut icon" href="images/favicon.ico">
	<title>EASTPAC - Coming Soon</title>
	<!-- set your website meta description and keywords -->
	<meta name="description" content="Add your website description here">
	<meta name="keywords" content="Add your website keywords here">
	<!-- set your website favicon icon -->
	<link href="favicon.ico" rel="icon">

	<!-- Bootstrap Stylesheets -->
	<link rel="stylesheet" href="{{asset('coming_soon/css/bootstrap.min.css')}}">
	<!-- Font Awesome Stylesheets -->
	<link rel="stylesheet" href="{{asset('coming_soon/css/font-awesome.min.css')}}">
	<!-- vegas Stylesheets -->
	<link rel="stylesheet" href="{{asset('coming_soon/css/vegas.min.css')}}">

	<!-- Template Main Stylesheets -->
	<link rel="stylesheet" href="{{asset('/coming_soon/css/bgslide-2.css')}}" type="text/css">
</head>
<style>
.fliplogo{ animation: fliplogo 3s;}
        @keyframes fliplogo{
            0%{
                transform: rotateY(0deg);
            }
            100%{
                transform: rotateY(360deg);
            }
        }
		@media only screen and (max-width: 400px){
			.about-section{
				margin-top:70px;
			}
		}


</style>

<body>
	<section id="Main" class="overlay">
		<div id="particles-js"></div>
		<div class="overlay-content">
			<div class="content">
				<div class="container">
						<img class="logo logo-light fliplogo" src="{{asset('coming_soon/images/logo-full-white.png')}}">
					<!-- coming-soon header text start -->
					<div class="coming-soon-text">
						<h4>We are</h4>
						<h3>coming soon</h3>
					</div>
					<!-- coming-soon header text end -->

					<!-- countdown Box start -->
					<div class="coming-soon-count">
						<div id="defaultCountdown"></div>
					</div>
					<!-- countdown Box end -->

					<h3>Revolutionizing Blockchain Ecosystem</h3><br>
					<!-- Buttons start -->
					<div class="btn-holder">
						<a href="javascript:void(0)" class="btn btn-custom btn-transparent" onclick="openAboutStyle()">About</a>
						<a href="javascript:void(0)" class="btn btn-custom btn-transparent" onclick="openContactStyle()">Contact</a>
					</div>
					<!-- Buttons end -->

					<!-- Start Social media -->
					<div class="social-holder">
						<p>Get in touch with us!</p>
						<ul class="list-inline list-social clearfix">
							<li>
								<a href="#" class="social-icon social-icon-facebook" target="_blank">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="#" class="social-icon social-icon-twitter" target="_blank">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#" class="social-icon social-icon-linkedin" target="_blank">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="#" class="social-icon social-icon-youtube" target="_blank">
									<i class="fa fa-youtube"></i>
								</a>
							</li>
							<li>
								<a href="#" class="social-icon social-icon-vimeo" target="_blank">
									<i class="fa fa-vimeo"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- End Social media -->
				</div><!-- End container -->
			</div>
		</div><!-- End of overlay-content -->
	</section><!-- End of #Main -->

	<!-- Start About Section -->
	<section id="About" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeAboutStyle()">&times;</a>
		<div class="overlay-content">
			<div class="content">
				<div class="container">
					<div class="title-box">
						<h2>About Us</h2>
					</div>

					<!-- Start About box -->
					<div class="about-box">
						<div class="row">

							<div class="col-sm-12">
								<div class="row">
									<div class="col-md-4">
										<div class="about-wrap">
											<div class="icon-holder">
												<i class="fa fa-question"></i>
											</div><!-- end icon-holder -->
											<div class="text-box">
												<div class="title-box">
													<h3>Why <strong>EASTPAC?</strong></h3>
												</div>
												<p>We combines innovative technologies - smart contracts, blockchain, and big data. Data is uploaded to blockchain using smart contracts and then migrated to big data. This design enables businesses to maximize the use of valuable information.</p>
											</div><!-- end text-box -->
										</div><!-- end about-wrap -->
									</div><!-- end col -->
									<div class="col-md-4">
										<div class="about-wrap">
											<div class="icon-holder">
												<i class="fa fa-book"></i>
											</div><!-- end icon-holder -->
											<div class="text-box">
												<div class="title-box">
													<h3>Our <strong>Story</strong></h3>
												</div>
												<p>EASTPAC is part of EASTERN PACIFIC CAPITAL.PTE.LTD based in Singapore. EASTPAC is present by providing a renewal and reformation of the world of blockchain and cryptocurrency.</p>
											</div><!-- end text-box -->
										</div><!-- end about-wrap -->
									</div><!-- end col -->
									<div class="col-md-4">
										<div class="about-wrap">
											<div class="icon-holder">
												<i class="fa fa-bullseye"></i>
											</div><!-- end icon-holder -->
											<div class="text-box">
												<div class="title-box">
													<h3>Our <strong>Goal</strong></h3>
												</div>
												<p>Vision</p>
												<p>Eastpac has  developed into a strong ecosystem with mutual benefit wsithout any influences  from global pressures such as economics, politics, and regulatory from any country.</p>
												<p>Mission</p>
												<p>Build a network of communities of users around the world in a massive structured and focused environment.</p>
												<p>Establish and develop the entire infrastructure supporting platform and ecosystem.</p>
												<p>Develop business lines and merchants from the Eastpac worldwide presence. Our initial  target is 2 million merchant and 150 million users worldwide.</p>
											</div><!-- end text-box -->
										</div><!-- end about-wrap -->
									</div><!-- end col -->
								</div><!-- end row -->
							</div><!-- end col-sm-12 -->




						</div><!-- end row -->
					</div>
					<!-- end About box -->
				</div><!-- container -->
			</div><!-- content -->
		</div><!-- End of overlay-content -->
	</section>
	<!-- End of #About -->

	<!-- Start Contact Section -->
	<section id="myContact" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeContactStyle()">&times;</a>
		<div class="overlay-content">
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="title-box">
								<h2>Contact Info</h2>
							</div>
							<div class="contact-details">
								<p>Any question? Reach out to us and we’ll get back to you shortly.</p>								</p>
								<ul class="list-unstyled">
									<li><i class="fa fa-fw fa-map-marker"></i> International Plaza
										Singapore 079903</li>
									<li><i class="fa fa-fw fa-phone"></i><a href="tel:000-0000-0000">+65 6521 6815</a></li>
									<li><i class="fa fa-fw fa-envelope-o"></i><a href="mailto:sales@yourwebsite.com">
										info@eastpac.io

										</a></li>
									<li><i class="fa fa-fw fa-globe"></i><a href="#">www.eastpac.io</a></li>
								</ul>
							</div>
						</div><!-- End of col-sm-6 -->

						<div class="col-sm-6">
							<div class="title-box">
								<h2>Write Us</h2>
							</div>
							<!-- Start contact form -->
							<form id="contactForm" name="contactform" data-toggle="validator" class="contact-form">
								<div id="msgSubmit" class="hidden"></div>
								<div class="form-group">
									<div class="help-block with-errors hidden"></div>
									<input name="fname" id="fname" placeholder="Your Name*" class="form-control" type="text" required data-error="Please enter Name">
									<div class="input-group-icon"><i class="fa fa-user"></i></div>
								</div>
								<div class="form-group">
									<div class="help-block with-errors hidden"></div>
									<input name="email" id="email" placeholder="Your Email*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" type="email" required data-error="Please enter Email">
									<div class="input-group-icon"><i class="fa fa-envelope"></i></div>
								</div>
								<div class="form-group">
									<div class="help-block with-errors hidden"></div>
									<input name="phone" id="phone" placeholder="Phone*" pattern="^\+?\d{6,16}" class="form-control" type="text" required data-error="Please enter Phone">
									<div class="input-group-icon"><i class="fa fa-phone"></i></div>
								</div>
								<div class="form-group">
									<div class="help-block with-errors hidden"></div>
									<textarea rows="3" name="message" id="message" placeholder="Write comment here*" class="form-control" required data-error="Please enter message"></textarea>
									<div class="input-group-icon"><i class="fa fa-pencil"></i></div>
								</div>
								<div class="form-group">
									<button type="submit" id="submit" class="btn btn-custom btn-transparent">Send Message</button>
									<span class="sub-text">* Required fields</span>
								</div>
							</form>
							<!-- end contact form -->
						</div><!-- End of col-sm-6 -->
					</div><!-- End row -->
				</div><!-- container -->
			</div><!-- content -->
		</div><!-- End of overlay-content -->
	</section>
	<!-- End of #myContact -->

	<!-- jQuery Library -->
	<script src="{{asset('coming_soon/js/jquery-3.1.1.min.js')}}"></script>
	<!-- vide Js -->
	<script src="{{asset('coming_soon/js/vegas.min.js')}}"></script>
	<!-- PARTICLES JS -->
	<script src="{{asset('coming_soon/js/particles.min.js')}}"></script>
	<script src="{{asset('coming_soon/js/app.js')}}"></script>
	<!-- countdown Js -->
	<script src="{{asset('coming_soon/js/jquery.plugin.min.js')}}"></script>
	<script src="{{asset('coming_soon/js/jquery.countdown.js')}}"></script>
	<!-- ajaxchimp Js -->
	<script src="{{asset('coming_soon/js/jquery.ajaxchimp.min.js')}}"></script>
	<!-- Form validator Js -->

	<!-- Template main Js -->
    <script src="{{asset('coming_soon/js/main.js')}}"></script>
    <script src="{{asset('coming_soon/js/bg-slider.js')}}"></script>




</body>
</html>
