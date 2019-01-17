<?php
	
	require "header-script.php";
?>
	
	<!-- Wrapper -->
	<div id="wrapper">
		
		<!-- Header Container
		================================================== -->
		<?php include "header-container.php"; ?>
		<!-- Header Container / End -->
		
		
		<!-- Titlebar
		================================================== -->
		<div id="titlebar" class="gradient">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<h2>How To Apply</h2>
						
						<!-- Breadcrumbs -->
						<nav id="breadcrumbs" class="dark">
							<ul>
								<li><a href="#">Home</a></li>
								<li>How To Apply</li>
							</ul>
						</nav>
					
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- Content
		================================================== -->
		
		
		<!-- Icon Boxes -->
		<div class="section padding-top-65 padding-bottom-65">
			<div class="container">
				<div class="row">
					
					<div class="col-xl-4 col-md-4">
						<!-- Icon Box -->
						<div class="icon-box with-line">
							<!-- Icon -->
							<div class="icon-box-circle">
								<div class="icon-box-circle-inner">
									<i class="icon-line-awesome-lock"></i>
									<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
								</div>
							</div>
							<h3>Create an Account</h3>
							<p>All applicants are required to <a href="#" >create an account</a> before applying any of the available position.</p>
						</div>
					</div>
					
					<div class="col-xl-4 col-md-4">
						<!-- Icon Box -->
						<div class="icon-box with-line">
							<!-- Icon -->
							<div class="icon-box-circle">
								<div class="icon-box-circle-inner">
									<i class="icon-material-outline-credit-card"></i>
									<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
								</div>
							</div>
							<h3>Make Payment</h3>
							<p>After creating account the applicant should the amount of <span style="color: #ff3a22;"><?php echo $setting->amount; ?></span>. </p>
						</div>
					</div>
					
					<div class="col-xl-4 col-md-4">
						<!-- Icon Box -->
						<div class="icon-box">
							<!-- Icon -->
							<div class="icon-box-circle">
								<div class="icon-box-circle-inner">
									<i class="icon-feather-check-circle"></i>
									<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
								</div>
							</div>
							<h3>Start Application</h3>
							<p>Nanotechnology immersion along the information highway will close the loop on focusing
								solely.</p>
						</div>
					</div>
				
				</div>
			</div>
		</div>
		<!-- Icon Boxes / End -->
		
		<!-- Footer
			  ================================================== -->
		<?php require "footer.php"; ?>
		<!-- Footer / End -->
	
	</div>
	<!-- Wrapper / End -->


<?php require "footer-script.php"; ?>