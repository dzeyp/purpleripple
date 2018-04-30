<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header(); ?>

<div class="row main-row slider no-gutter">
	<div class="col-12 no-gutter">
		<!-- Slider main container -->
		<div class="swiper-container">
		    <!-- Additional required wrapper -->
		    <div class="swiper-wrapper">
		        <!-- Slides -->
		        <div class="swiper-slide" style="background-image:url('http://partymaker.ancorathemes.com/wp-content/uploads/2018/01/home1_slide3.jpg')">
		        	<div class="row">
		        		<div class="col-12 col-sm-10 text-center">
		        			<h1>It's time to celebrate!</h1>
	        			</div>
	        		</div>
		        </div>
		        <div class="swiper-slide" style="background-image:url('http://partymaker.ancorathemes.com/wp-content/uploads/2018/01/home1_slide2.jpg')">
		        	<div class="row">
		        		<div class="col-12 col-sm-10 text-center">
		        			<h1>We plan the best events</h1>
	        			</div>
	        		</div>
		        </div>
		        <div class="swiper-slide" style="background-image:url('http://partymaker.ancorathemes.com/wp-content/uploads/2018/01/home1_slide1.jpg')">
		        	<div class="row">
		        		<div class="col-12 col-sm-10 text-center">
		        			<h1>Enjoy your celebration!</h1>
	        			</div>
	        		</div>
		        </div>
		    </div>
		</div>
	</div>
</div>

<div class="row main-row services no-gutter">
	<div class="col-12 no-gutter">
		<div class="row no-gutter">
			<div class="col-12 no-gutter text-center">
				<h6>Hello There!</h6>
			</div>
			<div class="col-12 offset-sm-1 offset-md-2 offset-lg-3 col-sm-10 col-md-8 col-lg-6 text-center">
				<h2>We’ll make your next celebration very special!</h2>
			</div>
		</div>
	</div>
	<div class="col-12 offset-md-1 col-md-10">
		<div class="row no-gutter">
			<div class="col-12 col-sm-6 col-lg-3 text-center">
				<div class="service" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/birthday.jpg')">
					<h6><a href="">Birthdays</a></h6>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 text-center">
				<div class="service" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/wedding.jpg')">
					<h6><a href="">Weddings</a></h6>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 text-center">
				<div class="service" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/corporate.jpg')">
					<h6><a href="">Corporate</a></h6>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 text-center">
				<div class="service" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/engagement.jpg')">
					<h6><a href="">Engagement</a></h6>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 text-center">
		<button type="button" class="btn btn-main btn-primary btn m-3">And more</button>
	</div>
</div>

<div class="row main-row offers no-gutter">
	<div class="col-12 offset-md-1 col-md-5">
		<h1>What we offer</h1>
		<p>Each event and client is unique, and we believe our services should be as well. We know what hiring a planner is all about!</p>
	</div>
	<div class="col-12 col-md-5">
		<div class="row no-gutter">
			<div class="col-4 text-center">
				<i class="fas fa-birthday-cake" style="color:#FFAAAA"></i>
				<h6>Food catering</h6>
			</div>
			<div class="col-4 text-center">
				<i class="fas fa-gift" style="color:#A66FA6"></i>
				<h6>Decor</h6>
			</div>
			<div class="col-4 text-center">
				<i class="fas fa-building" style="color:#8080B3"></i>
				<h6>Venue</h6>
			</div>
			<div class="col-4 text-center">
				<i class="fas fa-magic" style="color:#75AF96"></i>
				<h6>Fun</h6>
			</div>
			<div class="col-4 text-center">
				<i class="fas fa-camera-retro" style="color:#E8F6A4"></i>
				<h6>Photo &amp; Video</h6>
			</div>
			<div class="col-4 text-center">
				<i class="fas fa-music" style="color:#FFEAAA"></i>
				<h6>Lights &amp; Sounds</h6>
			</div>
		</div>
	</div>
	<div class="col-12 text-center">
		<button type="button" class="btn btn-main btn-primary btn m-3">Check our services</button>
	</div>
</div>

<div class="row main-row how-it-works no-gutter" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/party.jpg')">
	<div class="background">
		<div class="col-12 offset-md-1 col-md-10 offset-lg-3 col-lg-6 text-center">
			<h6 class="title">How it works</h6>
			<h2>It’s simple. We will assist you in your events all through out, and we let you have all the fun.</h2>
		</div>
		<div class="col-12 offset-md-1 col-md-10 text-center">
			<div class="row no-gutter">
				<div class="col-12 col-md-4">
					<i class="far fa-hand-rock"></i>
					<h6 class="desc">Search for a perfect venue</h6>
				</div>
				<div class="col-12 col-md-4">
					<i class="far fa-hand-paper"></i>
					<h6 class="desc">Supply party needs</h6>
				</div>
				<div class="col-12 col-md-4">
					<i class="far fa-hand-scissors"></i>
					<h6 class="desc">We'll help you with the event</h6>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 offset-md-1 col-md-10 offset-lg-3 col-lg-6 text-center">
		<h6 class="title">How it works</h6>
		<h2>It’s simple. We will assist you in your events all through out, and we let you have all the fun.</h2>
	</div>
	<div class="col-12 offset-md-1 col-md-10 text-center">
		<div class="row no-gutter">
			<div class="col-12 col-md-4">
				<i class="far fa-hand-rock"></i>
				<h6 class="desc">Search for a perfect venue</h6>
			</div>
			<div class="col-12 col-md-4">
				<i class="far fa-hand-paper"></i>
				<h6 class="desc">Supply party needs</h6>
			</div>
			<div class="col-12 col-md-4">
				<i class="far fa-hand-scissors"></i>
				<h6 class="desc">We'll help you with the event</h6>
			</div>
		</div>
	</div>
</div>

<div class="row main-row packages no-gutter">
	<div class="col-12 offset-md-1 col-md-10 text-center">
		<h6 class="title">Choose your party</h6>
		<h2>Our Events Packages</h2>
	</div>
	<div class="offset-1 col-10 offset-sm-2 col-sm-8 offset-md-1 col-md-10">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-3 text-center">
				<div class="package">
					<div class="head" style="background-color:#9775AA">
						<h3>Birthday Parties</h3>
					</div>
					<h4>from <span>AED 150</span></h4>
					<ul>
						<li>4 hours</li>
						<li>Up to 50 persons</li>
						<li>Decorations</li>
						<li>Catering</li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 text-center">
				<div class="package">
					<div class="head" style="background-color:#D4D46A">
						<h3>Weddings Celebrations</h3>
					</div>
					<h4>from <span>AED 150</span></h4>
					<ul>
						<li>4 hours</li>
						<li>Up to 50 persons</li>
						<li>Decorations</li>
						<li>Catering</li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 text-center">
				<div class="package">
					<div class="head" style="background-color:#669999">
						<h3>Corporate Events</h3>
					</div>
					<h4>from <span>AED 150</span></h4>
					<ul>
						<li>4 hours</li>
						<li>Up to 50 persons</li>
						<li>Decorations</li>
						<li>Catering</li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 text-center">
				<div class="package">
					<div class="head" style="background-color:#D49A6A">
						<h3>Kid's Parties</h3>
					</div>
					<h4>from <span>AED 150</span></h4>
					<ul>
						<li>4 hours</li>
						<li>Up to 50 persons</li>
						<li>Decorations</li>
						<li>Catering</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 text-center">
		<button type="button" class="btn btn-main btn-primary btn m-3">Customized Package</button>
	</div>
</div>

<?php get_footer();
