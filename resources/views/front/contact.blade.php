<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/assets/front/styles/bootstrap4/bootstrap.min.css">
<link href="/assets/front/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/assets/front/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/assets/front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="/assets/front/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="/assets/front/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css">
<link rel="stylesheet" type="text/css" href="/assets/front/styles/contact.css">
<link rel="stylesheet" type="text/css" href="/assets/front/styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->
	@include('layouts.front.header')
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="/assets/front/images/regular.jpg" data-speed="0.8"></div>
		<div class="home_content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<!-- Post Comment -->
						<div class="post_comment">
							<div class="contact_form_container">
								<form action="#">
									<input type="text" class="contact_input contact_input_name" placeholder="Your Name" required="required">
									<input type="email" class="contact_input contact_input_email" placeholder="Your Email" required="required">
									<textarea class="contact_text" placeholder="Your Message" required="required"></textarea>
									<button type="submit" class="contact_button">Send Message</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</div>

	<!-- Footer -->

	@include('layouts.front.footer')
</div>

<script src="/assets/front/js/jquery-3.2.1.min.js"></script>
<script src="/assets/front/styles/bootstrap4/popper.js"></script>
<script src="/assets/front/styles/bootstrap4/bootstrap.min.js"></script>
<script src="/assets/front/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="/assets/front/plugins/easing/easing.js"></script>
<script src="/assets/front/plugins/masonry/masonry.js"></script>
<script src="/assets/front/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/assets/front/js/contact.js"></script>
</body>
</html>