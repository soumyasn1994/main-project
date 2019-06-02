<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->

<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="user_home.php"><i class="fa fa-tachometer"></i> <span>HOME PAGE</span><div class="clearfix"></div></a></li>
									
										<li id="menu-academico" ><a href="../webs/about.php"><i class="fa fa-map-marker"></i>  
										<span>About</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix">

										</div></a>
										 
									 </li>
							
	
							
							
				     <div class="clearfix"> </div>	
				
										<li id="menu-academico" ><a href="../webs/services.php"><i class="fa fa-map-marker"></i>  <span>Services</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 
									 </li>
									 <li id="menu-academico" ><a href="../webs/sersearch.php"><i class="fa fa-map-marker"></i>  <span>Service Search</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 
									 </li>
									 <li id="menu-academico" ><a href="userchangepass.php"><i class="fa fa-map-marker"></i>  <span>Changes Password</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 
									 </li>
									 <li id="menu-academico" ><a href="../webs/userrating.php"><i class="fa fa-map-marker"></i>  <span>Employee Rating</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 
										 </li>
										 
										 
										 
										 <li id="menu-academico" ><a href="../webs/gallery.php"><i class="fa fa-map-marker fa-file-text-o"></i>  <span>Gallery</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 
									 </li>
										 
										  <li id="menu-academico" ><a href="../webs/contact.php"><i class="fa fa-map-marker fa-file-text-o" ></i>  <span>Contact</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										
									
							        <li id="menu-academico" ><a href="userprofile.php"><i class="fa fa-file-text-o"></i>  <span>View Profile</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 
									 </li>
											
								<!--	<li><a href="view5.php"><i class="fa fa-gears nav_icon"></i><span>View Notifications</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
									  
									</li>
									<li><a href="Apply.php"><i class="fa fa-gears nav_icon"></i><span>Apply For Application</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
									  </li>
									<li><a href="paymentrequest.php"><i class="fa fa-gears nav_icon"></i><span>Apply For Payment</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
									  
									</li> -->
									
									</li>
									
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
   <div  style="color: red; margin-top: 25rem; padding-bottom:5px; border-top: 2px solid #24c8a6;
    background: #000; padding-top: 1rem; text-align: center">
         <h2 style="margin-top: 1rem;"><a href="user_home.php">MANSION</a></h1>
        <b> <p> 
            © 2018 Mansion. All Rights Reserved 
         </p></b>
      </div>
</body>
</html>