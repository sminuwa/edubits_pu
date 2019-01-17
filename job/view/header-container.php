<header id="header-container" class="fullwidth">

    <!-- Header -->
    <div id="header">
        <div class="container">

            <!-- Left Side Content -->
            <div class="left-side">

                <!-- Logo -->
                <div id="logo">
                    <a href="<?php echo path(); ?>"><img src="<?php echo imgPATH; ?>logo.png" alt=""></a>
                </div>

                <!-- Main Navigation -->
                <nav id="navigation">
                    <ul id="responsive">

                        <li><a href="<?php echo path(); ?>" <?php if($URL[0]==""){echo "class=\"current\"";}else{} ?> ><i class="icon-feather-home"></i> Home</a></li>
                        <li><a href="<?php echo path() ?>how-to-apply" <?php if($URL[0]=="how-to-apply"){echo "class=\"current\"";}else{} ?> ><i class="icon-feather-help-circle"></i> How To Apply</a></li>
                        <li><a href="<?php echo path() ?>#" <?php if($URL[0]=="faqs"){echo "class=\"current\"";}else{} ?> ><i class="icon-feather-message-square"></i> FAQs</a></li>
                        <li><a href="<?php echo path() ?>contact" <?php if($URL[0]=="contact"){echo "class=\"current\"";}else{} ?> ><i class="icon-feather-phone"></i> Contact</a></li>
                        <li><a href="<?php echo path() ?>myaccount" <?php if($URL[0]=="myaccount"){echo "class=\"current\"";}else{} ?> ><i class="icon-feather-user"></i> My Account</a></li>

                    </ul>
                </nav>
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->

            </div>
            <!-- Left Side Content / End -->
            
            <!-- Right Side Content / End -->
            <div class="right-side">

                <!-- User Menu -->
                <div class="header-widget">

                    <!-- Notifications -->
                    <div class="header-notifications">

                        <!-- Trigger -->
                        <div class="header-notifications-trigger">
                            <a href="#"><i class="icon-feather-bell"></i><span>3</span></a>
                        </div>

                        <!-- Dropdown -->
                        <div class="header-notifications-dropdown">

                            <div class="header-notifications-headline">
                                <h4>General Public Notice (GPN)</h4>
                                <button class="mark-as-read ripple-effect-dark" title="Mark all as read"
                                        data-tippy-placement="left">
                                    <i class="icon-feather-check-square"></i>
                                </button>
                            </div>

                            <div class="header-notifications-content">
                                <div class="header-notifications-scroll" data-simplebar>
                                    <ul>
                                        <!-- Notification -->
                                        <li class="notifications-not-read">
                                            <a href="dashboard-manage-candidates.php">
                                                    <span class="notification-icon"><i
                                                                class="icon-material-outline-group"></i></span>
                                                <span class="notification-text">
													<strong>Michael Shannah</strong> applied for a job <span
                                                            class="color">Full Stack Software Engineer</span>
												</span>
                                            </a>
                                        </li>

                                        <!-- Notification -->
                                        <li>
                                            <a href="dashboard-manage-bidders.php">
                                                    <span class="notification-icon"><i
                                                                class=" icon-material-outline-gavel"></i></span>
                                                <span class="notification-text">
													<strong>Gilbert Allanis</strong> placed a bid on your <span
                                                            class="color">iOS App Development</span> project
												</span>
                                            </a>
                                        </li>

                                        <!-- Notification -->
                                        <li>
                                            <a href="dashboard-manage-jobs.php">
                                                    <span class="notification-icon"><i
                                                                class="icon-material-outline-autorenew"></i></span>
                                                <span class="notification-text">
													Your job listing <span class="color">Full Stack PHP Developer</span> is expiring.
												</span>
                                            </a>
                                        </li>

                                        <!-- Notification -->
                                        <li>
                                            <a href="dashboard-manage-candidates.php">
                                                    <span class="notification-icon"><i
                                                                class="icon-material-outline-group"></i></span>
                                                <span class="notification-text">
													<strong>Sindy Forrest</strong> applied for a job <span
                                                            class="color">Full Stack Software Engineer</span>
												</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- User Menu / End -->

                <!-- Mobile Navigation Button -->
                <span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

            </div>
            <!-- Right Side Content / End -->

        </div>
    </div>
    <!-- Header / End -->

</header>
<div class="clearfix"></div>