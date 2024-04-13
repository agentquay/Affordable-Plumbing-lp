<?php 
/**
 * Template Name: Landing Page
 */

// get_header();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-P24RBQN');
	</script>
	<!-- End Google Tag Manager -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
	<title>All Affordable Plumbing Inc.</title>

	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/favicon-16x16.png" sizes="16x16">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@700;900&display=swap" rel="stylesheet">
	<!-- Add Following Select2 Style if you're using select2 selector; This is a basic style please use sass to add your own css for select2 -->
	<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/css/select2.min.css"> -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/aplp/vendor/datetimepicker/jquery.datetimepicker.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/aplp/vendor/slick/slick.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/css/style.css">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P24RBQN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="site-wrapper">
		<header id="header" class="site-header">
			<div class="container">
				<div class="site-header__inner">
					<div class="site-logo ">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/logo.png" alt="Header logo" width="204" height="80" loading="lazy">
					</div> <!-- / .site-logo -->

					<nav class="site-nav order-2 order-lg-1">
						<nav>
							<ul class="list-default">
								<li><a href="#about" class="js-has-smooth">About</a></li>
								<li><a href="#service" class="js-has-smooth">Repipe</a></li>
								<li><a href="#testimonial" class="js-has-smooth">Reviews</a></li>
								<li><a href="#formSection" class="js-has-smooth">Estimate Request</a></li>
							</ul>
						</nav>
						<div class="navbar-icon">
							<span></span>
						</div>
					</nav>
					<!-- / .site-nav -->

					<div class="phone-number order-1 order-lg-2">
						<a href="tel:8474741880" class="btn btn-primary btn-icon__mobile"><i class="icon-call"></i>Contact Us</a>
					</div> <!-- / .phone-number -->
				</div>
			</div>
		</header> <!-- / .site-header -->

		<main id="main" class="site-content">

			<section class="banner bg-cover">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/banner-img.jpg" alt="About image" width="1440" height="596" loading="lazy">
				<div class="container">
					<div class="banner-content">
						<h1>A Healthy Life <br> Needs <span class="text-primary mb-0">Clean Pipes!</span> </h1>
						<span class="text-uppercase">LICENSED TECHNICIANS, 100% CUSTOMER SATISFACTION, COMPETITIVE HONEST AND FAIR PRICING FOR RELIABLE WORK.</span>
						<p>Where we specialize in serving our customers repiping needs!</p>
						<div class="btn-wrap mt-2 mt-lg-3 mt-xl-4">
							<a href="tel:8474741880" class="btn btn-primary btn-alt text-uppercase"><i class="icon-call"></i>Get A Free Estimate</a>
						</div>
					</div> <!-- /.banner-content -->
				</div>
			</section> <!-- /.banner -->

			<section id="formSection" class="form-section">
				<div class="container">
					<div class="form-primary block-width-1050xxl mx-auto">

						<form method="POST" action="<?php echo get_stylesheet_directory_uri(); ?>/aplp/mailer/index.php" id="form-id-0" class="validate form">
							<div class="form-header text-center mb-lg-2">
								<h2 class="h3">Contact me</h2>
								<p>We will get back to you!</p>
							</div>

							<div class="form-section-0 form-row">
								<div class="form-group col-md-6">
									<input class="form-control" placeholder="First Name" name="first-name" type="text" value="">
									<div class="messages"></div>
								</div>
								<div class="form-group col-md-6">
									<input class="form-control" placeholder="Last Name" name="last-name" type="text" value="">
									<div class="messages"></div>
								</div>
								<div class="form-group col-md-6">
									<input class="form-control" placeholder="Your Email" name="email" type="email" value="">
									<div class="messages"></div>
								</div>
								<div class="form-group col-md-6">
									<input class="form-control" placeholder="Email Subject" name="email-subject" type="text" value="">
									<div class="messages"></div>
								</div>
								<div class="form-group col-md-4">
									<input id="datePicker" class="form-control" placeholder="Date field" name="date-field" type="text" value="">
									<div class="messages"></div>
								</div>
								<div class="form-group col-md-4">
									<input class="form-control" placeholder="Phone" name="phone" type="text" value="">
									<div class="messages"></div>
								</div>
								<div class="form-group col-md-4">
									<input class="form-control" placeholder="Your Address" name="your-address" type="text" value="">
									<div class="messages"></div>
								</div>
								<div class="form-group col-12">
									<textarea class="form-control" placeholder="Your Message" name="your-message" cols="50" rows="10"></textarea>
									<div class="messages"></div>
								</div>
								<div class="form-group checkbox-element">
									<input id="checkboxElelment" name="checkbox" type="checkbox" value="By checking this box and submitting your information, you are granting us permission to email you. You may unsubscribe at any time.">
									<label for="checkboxElelment" class="checkbox-element-label">By checking this box and submitting your information, you are granting us permission to email you. You may unsubscribe at any time.</label>
									<!-- Add more checkbox input if needed -->
									<div class="messages"></div>
								</div>
							</div>
							<div class="form-footer text-center">
								<button type="submit" class="submitButton btn btn-primary text-uppercase">
									<span class="spinner-border spinner-border loader" aria-hidden="true" style="display: none"></span>
									Submit
								</button>
							</div>
						</form>
						<?php /*
						<form method="POST" action="mailer/index.php" id="form-id-0" class="validate form">
							<div class="form-header text-center text-lg-left">
								<h2 class="h3">Get In Touch With Us</h2>
							</div>

							<div class="row align-items-end justify-content-center form-xl-inline">
								<div class="col-auto">
									<div class="form-section-0 row">
										<div class="form-group col-sm-6 col-lg-3">
											<input class="form-control" placeholder="Full Name" name="full-name" type="text" value="">
											<div class="messages"></div>
										</div>
										<div class="form-group col-sm-6 col-lg-3">
											<input class="form-control" placeholder="Email" name="email" type="email" value="">
											<div class="messages"></div>
										</div>
										<div class="form-group col-sm-6 col-lg-3">
											<input class="form-control" placeholder="Phone" name="phone" type="text" value="">
											<div class="messages"></div>
										</div>
										<div class="form-group col-sm-6 col-lg-3">
											<textarea class="form-control" placeholder="Message" name="message" cols="50" rows="10"></textarea>
											<div class="messages"></div>
										</div>
									</div>
								</div>
								<div class="col-auto">
									<div class="form-footer">
										<button type="submit" class="submitButton btn btn-primary text-uppercase">
											<span class="spinner-border spinner-border loader" aria-hidden="true" style="display: none"></span>
											Submit
										</button>
									</div>
								</div>
							</div>
						</form> 
						*/ ?>
						<!-- /.form -->
					</div>
				</div>
			</section> <!-- /.form-section -->

			<section id="about" class="about py-2 py-sm-3 py-lg-4 py-xl-5">
				<span class="heading text-uppercase font-bold">About</span>
				<div class="container">
					<div class="row">
						<div class="col-lg-6 pr-xl-2 pr-xxl-3">
							<picture class="mb-1 mb-lg-0 w-full">
								<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/about-img.webp" type="image/webp">
								<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/about-img.jpg" type="image/jpg">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/about-img.jpg" alt="About image" width="592" height="611" loading="lazy">
							</picture>
						</div>
						<div class="col-lg-6 pr-xl-3 pr-xxl-5">
							<div class="about-content text-center text-lg-left">
								<div class="header">
									<h2>
										<small class="text-uppercase has-border">Who We Are</small>
										Welcome to All Affordable Plumbing Inc.
									</h2>
								</div>
								<p>Where we specialize in serving our customers repiping needs! learn more about what we do ! click on each type of service to learn more.</p>
								<ul class="list-default list">
									<li>Originally based in Lake Zurich, that’s where we lived</li>
									<li>Started out with one old van manned by my dad Cornel and Me (Horatio)</li>
									<li>Had mostly local word to mouth advertising, clients liked our work and professionalism . After a few years we started doing small remodeling jobs including repiping.</li>
									<li>At one point for a few years we even offered complete kitchen and bathroom remodeling. We have stopped doing that as we couldn't focus on plumbing specifically and we didn't like the quality meter going down.</li>
								</ul>
								<div class="btn-wrap mt-2">
									<a href="tel:8474741880" class="btn btn-primary btn-alt text-uppercase"><i class="icon-call"></i>Get A Free Estimate</a>
								</div>
							</div> <!-- /.about-content -->
						</div>
					</div>
				</div>
			</section> <!-- /.about -->

			<section id="service" class="services bg-gray pt-2 pt-sm-3 pt-lg-6 pt-xl-7 pb-2">
				<div class="container">
					<div class="block-width-99 mx-auto">
						<span class="heading text-uppercase">Services</span>
						<div class="header text-center">
							<h2>
								<small class="text-uppercase">Who We Are</small>
								Our Services
							</h2>
						</div>
						<div class="row gutter-52">
							<div class="col-md-6 mb-1">
								<div class="card-media text-center ">
									<div class="card-media__content">
										<h3 class="h4">Drain Line Repiping</h3>
										<p>Nothing can fix these pipes, they need to be replaced.</p>
									</div>
									<picture class="w-full">
										<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/service-img01.webp" type="image/webp">
										<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/service-img01.jpg" type="image/jpg">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/service-img01.jpg" alt="Service image" width="465" height="236" loading="lazy">
									</picture>
								</div> <!-- /.card-media -->
							</div>
							<div class="col-md-6 mb-1">
								<div class="card-media text-center ">
									<div class="card-media__content">
										<h3 class="h4">Water Line Repiping</h3>
										<p>PEX /copper pipes</p>
									</div>
									<picture class="w-full">
										<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/service-img02.webp" type="image/webp">
										<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/service-img02.jpg" type="image/jpg">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/service-img02.jpg" alt="Service image" width="465" height="236" loading="lazy">
									</picture>
								</div> <!-- /.card-media -->
							</div>
						</div>
					</div>
				</div>
			</section> <!-- /.services -->

			<section class="info bg-cover pb-2 pb-sm-3 pb-lg-4 pb-xl-5">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/bg-shape.jpg" alt="Service image" width="1440" height="538" loading="lazy">
				<div class="container">
					<div class="bg-cover overlay py-2 px-2 pl-lg-3 pl-xl-5 mt-n88">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/bg-img.jpg" alt="Service image" width="1280" height="547" loading="lazy">
						<div class="row align-items-end">
							<div class="col-lg-6 pr-xxl-3">
								<div class="left-content">
									<div class="header text-white mb-1">
										<h2><span> Our credentials</span>, and what to expect next</h2>
									</div>
									<ul class="list-default list list-lg">
										<li>In business for over 15 years</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-6 pl-xxl-5">
								<div class="bg-black right-content">
									<ul class="list-default list-icon">
										<li>Locally owned and family operated.</li>
										<li>We've repiped 3-5 homes a week for over 15 years.</li>
										<li>We have repiping occupied homes down to a science</li>
										<li>Most homes done in 1-3 days patching included</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- /.info -->

			<section id="testimonial" class="testimonial pt-xxl-8 pt-xl-6 pt-lg-4 pt-sm-3 pt-2 pb-xl-6 pb-lg-4 pb-sm-3 pb-2">
				<div class="container">
					<span class="heading text-uppercase">Reviews</span>
					<div class="header text-center">
						<h2>
							<small class="text-uppercase">Testimonials</small>
							Our Testimonials
						</h2>
					</div>
					<div class="testimonial-slider slick-same-height">
						<div class="item">
							<blockquote class="blockquote-card">
								<q>All Affordable Plumbing did a fantastic job on a while house re-piping job. So glad we hired them. I got multiple estimates, but I felt best about them and I was absolutely right. Hire this company - you won't be dissappointed.</q>
								<address class="author">
									<!-- <picture class="author-img">
										<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/machal-wincent.webp" type="image/webp">
										<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/machal-wincent.jpg" type="image/jpg">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/machal-wincent.jpg" alt="Author image" width="101" height="151" loading="lazy">
									</picture> -->
									<cite class="author-info">
										<strong>Aimee Schneider</strong>
										<!-- <span>Customer</span> -->
									</cite>
								</address>
							</blockquote> <!-- /.blockquote-card -->
						</div> <!-- /.item -->
						<div class="item">
							<blockquote class="blockquote-card">
								<q>We hired these plumbers to do a whole house re-piping. What set them apart from the start was they did it all: demo drywell to get to pipes and replace them on day 1; put deywall back up on day 2. We got 4 estimates and the bill was very fair. My husband liked their efficiency, I loved that Horatio (owner) and the men he briught into my home were perfect gentlemen. We recommend them without reservation.</q>
								<address class="author">
									<!-- <picture class="author-img">
										<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/author-img.webp" type="image/webp">
										<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/author-img.jpg" type="image/jpg">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/author-img.jpg" alt="Author image" width="63" height="94" loading="lazy">
									</picture> -->
									<cite class="author-info">
										<strong>Elizabeth K</strong>
										<!-- <span>Customer</span> -->
									</cite>
								</address>
							</blockquote> <!-- /.blockquote-card -->
						</div> <!-- /.item -->
						<div class="item">
							<blockquote class="blockquote-card">
								<q>Horatio and company completed a whole house <strong>repipe</strong> and bathroom demo and rebuild. They came in day one like a well oiled machine and changed out all the pipes. The walls were patched the next day and other than now needing to be painted, the walls are perect.</q>
								<q>The bathroom remodel is gorgeous! It is better than I could have ever imagined. The tile work is beautiful. Horatio and his tile team had great advice for product selection and design. The estimate I was given was spot on and extremely reasonable. I couln't be happier. It look about two weeks start to finish, including working a full Saturday. No short cuts, all high quality work.</q>
								<address class="author">
									<!-- <picture class="author-img">
										<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/author-img.webp" type="image/webp">
										<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/author-img.jpg" type="image/jpg">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/author-img.jpg" alt="Author image" width="63" height="94" loading="lazy">
									</picture> -->
									<cite class="author-info">
										<strong>Traci Hulback</strong>
										<!-- <span>Customer</span> -->
									</cite>
								</address>
							</blockquote> <!-- /.blockquote-card -->
						</div> <!-- /.item -->						
					</div>
				</div>
			</section> <!-- /.testimonial -->
		</main> <!-- / .site-content -->

		<footer id="footer" class="site-footer">
			<div class="container">
				<div class="footer-top">
					<div class="row align-items-center">
						<div class="col-lg-5 text-white text-center text-lg-left order-1 order-lg-0 my-1 my-lg-0">
							<div class="has-underline">
								<h3 class="mb-0">Get A Free Estimate</h3>
							</div>
						</div>
						<div class="col-lg-2 text-center order-0 order-lg-1">
							<div class="call-icon">
								<a href="tel:8474741880"><i class="icon-call"></i></a>
							</div>
						</div>
						<div class="col-lg-5 text-center text-lg-right text-white order-2">
							<h3 class="mb-0">Just Call Us At <a href="tel:8474741880">(847) 474-1880</a></h3>
						</div>
					</div>
				</div> <!-- /.footer-top -->
				<div class="footer-bottom">
					<div class="row">
						<div class="col-sm-6 col-lg-4 pr-xl-3 mb-1">
							<figure class="logo-wrapper mb-1 mb-xl-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/images/footer-logo.png" alt="All Affordable Plumbing Logo" width="191" height="68" loading="lazy">
							</figure>
							<p>Local family owned and operated plumbing contractor who is dedicated to providing the highest quality services available.</p>
						</div>
						<div class="col-sm-6 col-lg-3 mb-1">
							<div class="footer-item text-white">
								<h4 class="h5">Navigations</h4>
								<ul class="list-default">
									<li><a href="#service" class="js-has-smooth">Repipe</a></li>
									<li><a href="#formSection" class="js-has-smooth">Estimate Request</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6 col-lg-2 mb-1">
							<div class="footer-item text-white">
								<h4 class="h5">Company</h4>
								<ul class="list-default">
									<li><a href="#about" class="js-has-smooth">About</a></li>
									<li><a href="#testimonial" class="js-has-smooth">Reviews</a></li>
									<li><a href="#formSection" class="js-has-smooth">Estimate Request</a></li>
									<li><a href="http://allaffordable.org/sitemap.xml" target="_blank">Sitemap</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3 pl-xl-3 mb-1">
							<div class="footer-address text-white">
								<h4 class="h5">Address</h4>
								<span class="address">22099 N Bertha Ln <br> Barrington, IL, 60010, US</span>
								<ul class="list-default info-list">
									<li><i class="icon-call"></i><a href="tel:8474741880">(847) 474-1880</a></li>
									<li><i class="icon-mail"></i><a href="mailto:all_affordable@hotmail.com"> all_affordable@hotmail.com</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div> <!-- /.footer-bottom -->
			</div>
			<span class="copyright text-center">Copyright @ All Affordable Plumbing</span>
		</footer> <!-- / .site-footer -->

		<div class="sticky-footer">
			<a href="tel:8474741880">
				<i class="icon-call"></i>
				<span class="call-text">Call Now :</span>(847) 474-1880
			</a>
		</div> <!-- /.sticy-footer -->

	</div> <!-- /.site-wrapper -->

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/js/jquery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/js/underscore-min.js"></script>
	<!-- Add Following Select2 Style if you're using select2 selector; -->
	<!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/js/select2.min.js"></script> -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/js/validate.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/js/builder.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/vendor/datetimepicker/jquery.datetimepicker.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/vendor/slick/slick.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/aplp/assets/js/main.js"></script>


	<!-- Add Following Script If reCaptcha V2 is Enabled; Otherwise remove the whole block -->
	<!-- <script src="https://www.google.com/recaptcha/api.js?onload=onReCaptchaLoadCallback&render=explicit" async defer></script> -->
</body>

</html>