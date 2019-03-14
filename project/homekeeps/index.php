
		<!-- banner -->
<?php include('components/top.php'); ?>
<?php include('components/navs/main.php'); ?>


<div class="banner">
	<div class="container">
		<div class="banner-text-agile">
			<div class="row">
				<div class="col-md-8">
					<!-- Carousel -->
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<h3 class="b-w3ltxt text-capitalize mt-md-4">
									<span>this is</span> salient</h3>
								<p class="mt-2">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper.</p>
								<a class="btn btn-banner mt-md-3 mt-2 text-capitalize scroll" href="#services" role="button">explore services</a>
							</div>
							<!-- slider text -->
							<div class="carousel-item">
								<h3 class="b-w3ltxt text-capitalize mt-md-4">
									<span>successful </span>careers</h3>
								<p class="mt-2">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper.</p>
								<a class="btn btn-banner mt-md-3 mt-2 text-capitalize scroll" href="#services" role="button">explore services</a>
							</div>
							<!-- slider text -->
							<div class="carousel-item text-white">
								<h3 class="b-w3ltxt  text-capitalize mt-md-4">
									<span>expert</span> consultants</h3>
								<p class="mt-2">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper.</p>
								<a class="btn btn-banner mt-md-3 mt-2 text-capitalize scroll" href="#services" role="button">explore services</a>
							</div>
							<!-- slider text -->
						</div>
					</div>
					<!-- Carousel -->
				</div>
				<div class="col-md-4">
					<!-- registration -->
				<div class="container" id="registration">					
					<form action="data/login.php" method="post">
						<div class="form-group">
							<!-- <label for="exampleInputEmail1">Email address</label> -->
							<input name="user" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" <?php if (isset($_SESSION['r_email'])) {
																																																																																																																																											echo 'value="' . $_SESSION['r_email'] . '"';
																																																																																																																																										} ?> required>
							<small id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<!-- <label for="exampleInputPassword1">Password</label> -->
							<input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
						</div>
						    <button type="submit" name="submit" class="btn btn-primary px-5" value="login">Login</button>
						<!--<a href="" class="btn btn-success float-right px-5">Sign Up</a>!-->
					</form>
				</div>
				<!-- registration-end -->
				</div>
			</div>
		
		</div>
	</div>
</div>
	

<?php include('components/end.php'); ?>