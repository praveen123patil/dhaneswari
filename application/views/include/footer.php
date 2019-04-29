<div class="footer_agile_w3ls">
	<div class="container">
		<center>
		<div class="agileits_w3layouts_footer_grids">
			<div class="col-md-4 footer-agileits">
					<h3>Contact</h3>
					<p style="color: #FFF">
Mahadev Road RamNagar Last Bus Stop Kangralli Belgaum,Karnataka 
<br>Email:- svtravel@asia.com
<br>Contact:- +91-8197676801</p><br>
<div class="agileits_w3layouts_logo logo2" align="center">
			<div class="agileits-social" align="center">
					<ul align='navbar-center'>
							<li><a class="whatsapp" href="https://api.whatsapp.com/send?phone=916363716384&text=Hello"><i class="fa fa-facebook fa fa-whatsapp" style="background-color:#25D366;"></i></a></li>
							<li><a href="https://www.facebook.com/stepsworth.ins" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/stepsworth1" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://twitter.com/stepsworth1" class="instagram" target="_blank"><i class="fa fa-facebook fa fa-instagram" style="background-color:brown;"></i></a></li>
						</ul>
				</div>

		</div>
					<!-- <div class="agileits_w3layouts_logo logo2">
			<div class="agileits-social">
					<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-whatsapp" style="color: green"></i></a></li>
						</ul>
				</div>

		</div> -->
		<!-- <img src="<?php base_url()?>assets/images/team/logo2.png" style="width:150px;height: 150px;"> -->
				</div>
				<div class="col-md-4 footer-wthree">
					<h3>Clients</h3>
					<ul>
						<li>SP Associates</li>
						<li>The Orchard Resort</li>
						<li>USM KLE</li>
						<li>Narayan Hrudayalaya</li>
						<li>Nimhans</li>
						<li>Bostik</li>

					</ul>
				</div>
	
				<div class="col-md-4 footer-agileits-w3layouts">
					<h3>Our Links</h3>
					<ul>
						<li><a href="<?php echo base_url()?>"><span data-hover="Home">Home</span></a></li>
						<li><a href="<?php echo base_url()?>about"><span data-hover="About">About</span></a></li>
						<li><a href="<?php echo base_url()?>vision"><span data-hover="Vision">Vision</span></a></li>
						<li><a href="<?php echo base_url()?>projects"><span data-hover="Project">Projects</span></a></li>
						<li><a href="<?php echo base_url()?>event"><span data-hover="Project">Events</span></a></li>
						<li><a href="<?php echo base_url()?>contact"><span data-hover="Project">Contact Us</span></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>

		</div>
	</center>
		
	</div>
</div>
<div class="wthree_copy_right">
	<div class="container">
		<p>© 2019-20 Dhaneshwari. All rights reserved | Design by <a href="http://webcreintors.com/">WebCreintors</a></p>
	</div>
</div>
<!-- //footer -->


<!-- //bootstrap-pop-up -->

<!-- js -->
<script type="text/javascript" src="<?php base_url()?>assets/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- Counter required files -->
		<script type="text/javascript" src="<?php base_url()?>assets/js/dscountdown.min.js"></script>
		<script src="<?php base_url()?>assets/js/demo-1.js"></script>
		<script>
			jQuery(document).ready(function($){						
				$('.demo2').dsCountDown({
					endDate: new Date("December 24, 2020 23:59:00"),
					theme: 'black'
					});								
			});
		</script>
	<!-- //Counter required files -->



<script src="<?php base_url()?>assets/js/mainScript.js"></script>
<script src="<?php base_url()?>assets/js/rgbSlide.min.js"></script>
<!-- carousal -->
	<script src="<?php base_url()?>assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(document).on('ready', function() {
		  $(".center").slick({
			dots: true,
			infinite: true,
			centerMode: true,
			slidesToShow:2,
			slidesToScroll:2,
			responsive: [
				{
				  breakpoint: 768,
				  settings: {
					arrows: true,
					centerMode: false,
					slidesToShow: 2
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					arrows: true,
					centerMode: false,
					centerPadding: '40px',
					slidesToShow: 1
				  }
				}
			 ]
		  });
		});
	</script>
<!-- //carousal -->
<!-- flexisel -->
		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 2
					}
				}
			});
			
		});
	</script>
	<script type="text/javascript" src="<?php base_url()?>assets/js/jquery.flexisel.js"></script>
<!-- //flexisel -->
<!-- gallery-pop-up -->
	<script src="<?php base_url()?>assets/js/lsb.min.js"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>
<!-- //gallery-pop-up -->
<!-- flexSlider -->
	<script defer src="<?php base_url()?>assets/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
<!-- //flexSlider -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="<?php base_url()?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php base_url()?>assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="<?php base_url()?>assets/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>