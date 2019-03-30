<!-- js-->
	<script src="theme/js/jquery-2.2.3.min.js"></script>
	<!-- js-->
	<!-- Scrolling Nav JavaScript -->
	<script src="theme/js/scrolling-nav.js"></script>
	<!-- //fixed-scroll-nav-js -->
	<script>
		$(window).scroll(function () {
			if ($(document).scrollTop() > 70) {
				$('nav.pagescrollfix,nav.RWDpagescrollfix').addClass('shrink');
			} else {
				$('nav.pagescrollfix,nav.RWDpagescrollfix').removeClass('shrink');
			}
		});
	</script>
	<!-- Banner text Responsiveslides -->
	<script src="theme/js/responsiveslides.min.js"></script>
	<script>
		// You can also use"$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- //Banner text  Responsiveslides -->
	<!-- start-smooth-scrolling -->
	<script src="theme/js/move-top.js"></script>
	<script src="theme/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			 var defaults = {
				 containerID: 'toTop', // fading element id
				 containerHoverID: 'toTopHover', // fading element hover id
				 scrollSpeed: 1200,
				 easingType: 'linear' 
			 };
			 */

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script src="theme/js/SmoothScroll.min.js"></script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap Core JavaScript -->
	<script src="theme/js/bootstrap.js">
	</script>
	<!-- //Bootstrap Core JavaScript -->
	<!-- jquery date -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$( function() {
    		$( "#dob" ).datepicker({
				dateFormat: 'yy-mm-dd',
				yearRange: "1986:1998",
				defaultDate:new Date(1997,12,31),
				//minDate: "1d", 
				//maxDate: "1d"
				changeMonth:true,
				changeYear:true
			});
  		} );
	</script>
	 
</body>

</html>
