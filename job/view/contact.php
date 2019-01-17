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
					
					<h2>Contact</h2>
					
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs" class="dark">
						<ul>
							<li><a href="#">Home</a></li>
							<li>Contact</li>
						</ul>
					</nav>
				
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- Content
	================================================== -->
	
	
	<!-- Container -->
	<div class="container">
		<div class="row">
			
			<div class="col-xl-12">
				<div class="contact-location-info margin-bottom-50">
					<div class="contact-address">
						<ul>
							<li class="contact-address-headline">Our Office</li>
							<li>Address: <?php echo $client->address; ?></li>
							<li>Phone: <?php echo $client->phone_primary; ?></li>
							<li>Email: <a href="#"><span class="__cf_email__" data-cfemail="6e030f07022e0b160f031e020b400d0103"><?php echo $client->email; ?></span></a></li>
							<li>
								<div class="freelancer-socials">
									<ul>
										<li><a href="#" title="Dribbble" data-tippy-placement="top"><i class="icon-brand-dribbble"></i></a></li>
										<li><a href="#" title="Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
										<li><a href="#" title="Behance" data-tippy-placement="top"><i class="icon-brand-behance"></i></a></li>
										<li><a href="#" title="GitHub" data-tippy-placement="top"><i class="icon-brand-github"></i></a></li>
									</ul>
								</div>
							</li>
						</ul>
					
					</div>
					<div id="single-job-map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1996402.1269370974!2d6.825607828329658!3d12.233181126543672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11b0308370c6f02b%3A0x93375f234278b836!2sKatsina!5e0!3m2!1sen!2sng!4v1542829911297" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			
			<div class="col-xl-8 col-lg-8 offset-xl-2 offset-lg-2">
				
				<section id="contact" class="margin-bottom-60">
					<h3 class="headline margin-top-15 margin-bottom-35">Any questions? Feel free to contact us!</h3>
					
					<form method="post" name="contactform" id="contactform" autocomplete="on">
						<div class="row">
							<div class="col-md-6">
								<div class="input-with-icon-left">
									<input class="with-border" name="name" type="text" id="name" placeholder="Your Name" required="required" />
									<i class="icon-material-outline-account-circle"></i>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="input-with-icon-left">
									<input class="with-border" name="email" type="email" id="email" placeholder="Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
									<i class="icon-material-outline-email"></i>
								</div>
							</div>
						</div>
						
						<div class="input-with-icon-left">
							<input class="with-border" name="subject" type="text" id="subject" placeholder="Subject" required="required" />
							<i class="icon-material-outline-assignment"></i>
						</div>
						
						<div>
							<textarea class="with-border" name="comments" cols="40" rows="5" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
						</div>
						
						<input type="submit" class="submit button margin-top-15" id="submit" value="Submit Message" />
					
					</form>
				</section>
			
			</div>
		
		</div>
	</div>
	<!-- Container / End -->
	
	<!-- Footer
		  ================================================== -->
	<?php require "footer.php"; ?>
	<!-- Footer / End -->

</div>
<!-- Wrapper / End -->


<?php require "footer-script.php"; ?>