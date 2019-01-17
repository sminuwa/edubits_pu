<?php
	$tot_position = sizeof($job->jobs);
	require "header-script.php";
?>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header Container
		  ================================================== -->
		 <?php include "header-container.php"; ?>
        <!-- Header Container / End -->


        <!-- Intro Banner
		  ================================================== -->
		 <?php require "intro-banner.php"; ?>


        <!-- Content
		  ================================================== -->


        <!-- Features Jobs -->
        <div class="section gray margin-top-0 padding-top-65 padding-bottom-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">

                        <!-- Section Headline -->
                        <div class="section-headline margin-top-0 margin-bottom-35">
                            <h3>JOB POSITIONS </h3>
                            <a href="<?php echo path(); ?>all-jobs" class="headline-link">Browse All</a>
                        </div>

                        <!-- Jobs Container -->
                        <div class="listings-container compact-list-layout margin-top-35">

                            <!-- Job Listing -->
                           <?php
                           
                            $jobsArr = $job->jobs;
                            //display only five list in the record
	                        $subJobsArr = array_slice($jobsArr, 0,5, true);
                            foreach($subJobsArr as $job){
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


        <!-- Testimonials -->
        <div class="section gray padding-top-65 padding-bottom-55">

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Headline -->
                        <div class="section-headline centered margin-top-0 margin-bottom-5">
                            <h3>Testimonials</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categories Carousel -->
            <div class="fullwidth-carousel-container margin-top-20">
                <div class="testimonial-carousel testimonials">

                    <!-- Item -->
                    <div class="fw-carousel-review">
                        <div class="testimonial-box">
                            <div class="testimonial-avatar">
                                <img src="<?php echo imgPATH; ?>user-avatar-small-02.jpg" alt="">
                            </div>
                            <div class="testimonial-author">
                                <h4>Sindy Forest</h4>
                                <span>Freelancer</span>
                            </div>
                            <div class="testimonial">Efficiently unleash cross-media information without cross-media value.
                                Quickly maximize timely deliverables for real-time schemas. Dramatically maintain
                                clicks-and-mortar solutions without functional solutions.
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="fw-carousel-review">
                        <div class="testimonial-box">
                            <div class="testimonial-avatar">
                                <img src="<?php echo imgPATH; ?>user-avatar-placeholder.png" alt="">
                            </div>
                            <div class="testimonial-author">
                                <h4>Marcin Kowalski</h4>
                                <span>Freelancer</span>
                            </div>
                            <div class="testimonial">Efficiently unleash cross-media information without cross-media value.
                                Quickly maximize timely deliverables for real-time schemas. Dramatically maintain
                                clicks-and-mortar solutions without functional solutions.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Categories Carousel / End -->

        </div>
        <!-- Testimonials / End -->


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
                                    <h3><span class="counter">
                                        <?php echo $tot_position; ?>
                                        </span></h3>
                                    <span class="counter-title">Job Positions</span>
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