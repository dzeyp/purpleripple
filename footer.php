<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>

<div class="row footer no-gutter">

</div>

</div><!-- container-fluid -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script>
	jQuery('#main-nav-button').click(function(e) {
		if(jQuery(this).closest('.main-nav').find('#mobile-menu').hasClass('collapsing')) {
			e.preventDefault();
		} else {
			if (jQuery(this).hasClass('collapsed')) {
				jQuery(this).closest('.main-nav').addClass('with-background');
			} else {
				jQuery(this).closest('.main-nav').removeClass('with-background');
			}
		}
	});

	var mySwiper = new Swiper ('.swiper-container', {
		loop: true,
		effect: 'fade',
		speed: 800,
		autoplay: true,
		delay: 4000,
	})

	jQuery(window).scroll(function(){
		console.log(1);
        if (jQuery(this).scrollTop() >= 1) {
        	console.log(1);
            jQuery('.main-nav').addClass('main-nav-with-background');
        }

        if (jQuery(this).scrollTop() < 1) {
        	console.log(1);
            jQuery('.main-nav').removeClass('main-nav-with-background');
        }
    });
</script>

</body>

</html>

