<?php
	
	require "header-script.php";
?>
	
	<!-- Wrapper -->
	<div id="wrapper">
		
		<!-- Header Container
		================================================== -->
		<?php include "header-container.php"; ?>
		<!-- Header Container / End -->
		
		
		<!-- Content
		================================================== -->
		
		
		<!-- Features Jobs -->
		<div class="section gray margin-top-0 padding-top-65 padding-bottom-75">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						
						<!-- Section Headline -->
						<div class="section-headline margin-top-0 margin-bottom-35">
							<h3>ALL AVAILABLE POSITIONS </h3>
							<!--<a href="jobs-list-layout-full-page-map.php" class="headline-link">Browse All Jobs</a>-->
						</div>
						
						<!-- Jobs Container -->
						<div class="listings-container compact-list-layout margin-top-35">
							
							<!-- Job Listing -->
							<?php
								
								$jobs = $job->jobs;
								foreach($jobs as $job){
									$date = time_elapsed_string($job['job_date_posted']);
									print("
                                
                                <a href=\"". path()."job-detail/${job["job_id"]}\" class=\"job-listing with-apply-button\">

                                    <!-- Job Listing Details -->
                                    <div class=\"job-listing-details\">
    
                                        <!-- Logo -->
                                        <div class=\"job-listing-company-logo\">
                                            <img src=\"".imgPATH."company-logo-05.png\" alt=\"\">
                                        </div>
    
                                        <!-- Details -->
                                        <div class=\"job-listing-description\">
                                            <h3 class=\"job-listing-title\">${job["job_position"]}</h3>
    
                                            <!-- Job Listing Footer -->
                                            <div class=\"job-listing-footer\">
                                                <ul>
                                                    <li><i class=\"icon-material-outline-location-on\"></i> ${job["job_location"]}
                                                        <div class=\"verified-badge\" title=\"Verified Employer\"
                                                             data-tippy-placement=\"top\"></div>
                                                    </li>
                                                    <li><i class=\"icon-feather-briefcase\"></i> ${job['type_details']}</li>
                                                    <li><i class=\"icon-material-outline-access-time\"></i> ${date}</li>
                                                </ul>
                                            </div>
                                        </div>
    
                                        <!-- Apply Button -->
                                        <span class=\"list-apply-button ripple-effect\">Apply Now</span>
                                    </div>
                                </a>
                                
                                ");
								}
							
							
							?>
						
						
						
						
						</div>
						<!-- Jobs Container / End -->
					
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- Counters -->
		<div class="section padding-top-70 padding-bottom-75">
			<div class="container">
				<div class="row">
					
					<div class="col-xl-12">
						<div class="counters-container">
							
							<!-- Counter -->
							<div class="single-counter">
								<i class="icon-line-awesome-suitcase"></i>
								<div class="counter-inner">
									<h3><span class="counter"><?php echo sizeof($job->jobs); ?></span></h3>
									<span class="counter-title">Jobs Positions</span>
								</div>
							</div>
							
							<!-- Counter -->
							<div class="single-counter">
								<i class="icon-line-awesome-legal"></i>
								<div class="counter-inner">
									<h3><span class="counter">0</span></h3>
									<span class="counter-title">Tasks Posted</span>
								</div>
							</div>
							
							<!-- Counter -->
							<div class="single-counter">
								<i class="icon-line-awesome-user"></i>
								<div class="counter-inner">
									<h3><span class="counter">0</span></h3>
									<span class="counter-title">Applicants</span>
								</div>
							</div>
							
							<!-- Counter -->
							<div class="single-counter">
								<i class="icon-line-awesome-trophy"></i>
								<div class="counter-inner">
									<h3><span class="counter">0</span>%</h3>
									<span class="counter-title">Satisfaction Rate</span>
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Counters / End -->
		
		
		<!-- Footer
		================================================== -->
		<?php require "footer.php"; ?>
		<!-- Footer / End -->
	
	</div>
	<!-- Wrapper / End -->

<?php require "footer-script.php"; ?>