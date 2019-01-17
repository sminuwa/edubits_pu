
<?php

    $query_job_applications = $conn->query("select * from job_applications where job_id = '1' ")->fetchAll();
    

?>

<!-- add class "disable-gradient" to enable consistent background overlay -->
<div class="intro-banner" data-background-image="<?php echo imgPATH; ?>home-background.jpg">
    <div class="container">

        <!-- Intro Headline -->
        <div class="row">
            <div class="col-md-12">
                <div class="banner-headline">
                    <h3>
                        <strong>If it scares you, it might be a good thing</strong>
                        <br>
                        <span>Give the <strong class="color">opportunity</strong> a try and <strong class="color">discover</strong> the potential in you.</span>
                    </h3>
                </div>
            </div>
        </div>

        <!-- Search Bar -->

        <!-- Stats -->
        <div class="row">
            <div class="col-md-12">
                <ul class="intro-stats margin-top-45 hide-under-992px">
	                <li>
                        <strong class="counter"><?php echo $tot_position; ?></strong>
                        <span>Job Positions</span>
                    </li>
                    <li>
                        <strong class="counter"><?php echo sizeof($query_job_applications);?></strong>
                        <span>Application Received</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>