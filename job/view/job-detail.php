<?php
   $job_id = $URL[1];
   
    /*object declaration*/
	$jobDetails = new JobDetails($conn, $client_id);
    if(!empty($jobDetail = $jobDetails->singleJobDetails($conn, $job_id))){
    
    }
	
	
	
	if (empty($jobDetail)) {
		header("location: " . path() . "404.php");
	}
	/*if (empty($jobTags)) {
		header("location: " . path() . "404.php");
	}*/
	
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

        <!-- Titlebar
================================================== -->
        <div class="single-page-header" data-background-image="<?php echo imgPATH; ?>single-job.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-page-header-inner">
                            <div class="left-side">
                                <div class="header-image"><a href="javascript(void);"><img
                                                src="<?php echo imgPATH; ?>company-logo-05.png" alt=""></a></div>
                                <div class="header-details">
                                    <h3><?php echo $jobDetail['job_position']; ?></h3>
                                    <h5><?php echo $client->name; ?></h5>
                                    <ul>
                                        <li>
                                            <i class="icon-material-outline-business"></i> <?php echo $jobDetail['job_location']; ?>
                                        </li>
                                        <li>
                                            <div class="star-rating" data-rating="4.9"></div>
                                        </li>
                                        <li><img class="flag" src="<?php echo imgPATH; ?>flags/ng.svg"
                                                 alt=""> <?php echo $jobDetail['job_country']; ?></li>
                                        <li>
                                            <div class="verified-badge-with-title">Verified</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="right-side">
                                <div class="salary-box">
                                    <div class="salary-type">Annual Salary</div>
                                    <div class="salary-amount">&#x20A6;<?php echo $jobDetail['job_salary']; ?>+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Page Content
		================================================== -->
        <div class="container">
            <div class="row">

                <!-- Content -->
                <div class="col-xl-8 col-lg-8 content-right-offset">

                    <div class="single-page-section">
                        <h3 class="margin-bottom-25">Description</h3>
                        <p><?php echo $jobDetail['job_description']; ?></p>
                    </div>

                    <div class="single-page-section">
                        <h3 class="margin-bottom-25">Requirements and Skills</h3>
                        <div class="list-2 ">
                            <ol>
	                            <?php
		                            
                                    
                                    if(!empty($jobRequrements = $jobDetails->jobRequirements($conn, $job_id))) {
	                                    foreach ($jobRequrements as $requirement) {
		                                    echo "<li>${requirement['requirement_details']}</li>";
	                                    }
                                    }
	                            ?>
                            </ol>
                        </div>
                    </div>

                    


                    <div class="single-page-section">
                        <h3 class="margin-bottom-30">Location</h3>
                        <div id="single-job-map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1996402.1269370974!2d6.825607828329658!3d12.233181126543672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11b0308370c6f02b%3A0x93375f234278b836!2sKatsina!5e0!3m2!1sen!2sng!4v1542829911297"
                                    width="100%" height="100%" frameborder="0" style="border:0"
                                    allowfullscreen></iframe>
                        </div>
                    </div>

                    
                    
                </div>


                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-4">
                    <div class="sidebar-container">

                        <a href="#small-dialog" class="apply-now-button popup-with-zoom-anim">Apply Now <i
                                    class="icon-material-outline-arrow-right-alt"></i></a>

                        <!-- Sidebar Widget -->
                        <div class="sidebar-widget">
                            <div class="job-overview">
                                <div class="job-overview-headline">Job Summary</div>
                                <div class="job-overview-inner">
                                    <ul>
                                        <li>
                                            <i class="icon-material-outline-location-on"></i>
                                            <span>Location</span>
                                            <h5><?php echo $jobDetail['job_location']; ?></h5>
                                        </li>
                                        <li>
                                            <i class="icon-material-outline-business-center"></i>
                                            <span>Job Type</span>
                                            <h5><?php echo $jobDetail['type_details']; ?></h5>
                                        </li>
                                        <li>
                                            <i class="icon-material-outline-local-atm"></i>
                                            <span>Salary</span>
                                            <h5>&#x20A6;<?php echo $jobDetail['job_salary']; ?>+</h5>
                                        </li>
                                        <li>
                                            <i class="icon-material-outline-access-time"></i>
                                            <span>Date Posted</span>
                                            <h5><?php echo time_elapsed_string($jobDetail['job_date_posted']); ?></h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar Widget -->
                        <div class="sidebar-widget">
                            <h3>Share</h3>

                            <!-- Bookmark Button -->
                            <!--<button class="bookmark-button margin-bottom-25">
								<span class="bookmark-icon"></span>
								<span class="bookmark-text">Bookmark</span>
								<span class="bookmarked-text">Bookmarked</span>
							</button>-->


                            <!-- Share Buttons -->
                            <div class="share-buttons margin-top-25">
                                <div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
                                <div class="share-buttons-content">
                                    <span>Interesting? <strong>Share It!</strong></span>
                                    <ul class="share-buttons-icons">
                                        <li><a href="#" data-button-color="#3b5998" title="Share on Facebook"
                                               data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
                                        <li><a href="#" data-button-color="#1da1f2" title="Share on Twitter"
                                               data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
                                        <li><a href="#" data-button-color="#dd4b39" title="Share on Google Plus"
                                               data-tippy-placement="top"><i class="icon-brand-google-plus-g"></i></a>
                                        </li>
                                        <li><a href="#" data-button-color="#0077b5" title="Share on LinkedIn"
                                               data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Copy URL -->
                            <div class="copy-url">
                                <input id="copy-url" type="text" value="" class="with-border">
                                <button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url"
                                        title="Copy to Clipboard" data-tippy-placement="top"><i
                                            class="icon-material-outline-file-copy"></i></button>
                            </div>

                        </div>

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

    <!-- Apply for a job popup
 ================================================== -->
    <div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

        <!--Tabs -->
        <div class="sign-in-form">

            <ul class="popup-tabs-nav">
                <li><a href="#tab">Apply Now</a></li>
            </ul>

            <div class="popup-tabs-container">

                <!-- Tab -->
                <div class="popup-tab-content" id="tab">

                    <!-- Welcome Text -->
                    <div class="welcome-text">
                        <h3>Attach File With CV</h3>
                    </div>

                    <!-- Form -->
                    <form method="post" id="apply-now-form">

                        <div class="input-with-icon-left">
                            <i class="icon-material-outline-account-circle"></i>
                            <input type="text" class="input-text with-border" name="name" id="name" placeholder="First and Last Name" required/>
                        </div>

                        <div class="input-with-icon-left">
                            <i class="icon-material-baseline-mail-outline"></i>
                            <input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Email Address" required/>
                        </div>

                        <div class="uploadButton">
                            <input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload-cv" />
                            <label class="uploadButton-button ripple-effect" for="upload-cv">Select File</label>
                            <span class="uploadButton-file-name">Upload your CV / resume relevant file. <br> Max. file size: 50 MB.</span>
                        </div>

                    </form>

                    <!-- Button -->
                    <button class="button margin-top-35 full-width button-sliding-icon ripple-effect" type="submit" form="apply-now-form">Apply Now <i class="icon-material-outline-arrow-right-alt"></i></button>

                </div>

            </div>
        </div>
    </div>
    <!-- Apply for a job popup / End -->

<?php require "footer-script.php"; ?>