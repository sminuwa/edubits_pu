<?php require "header-script.php"; ?>
    <!-- End head-->
    <!-- //////////////////////////////////////////////////////////////////////////// -->


    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!--body-->

    <body>

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Efnify body-->
<div class="ui-app">

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!--Efnify body page wrapper -->
    <div class="ui-app__wrapper" id="app-layout-control">

        <!-- ////////////////s//////////////////////////////////////////////////////////// -->
        <!--prepage loader-->
        <div id="prepage-loader">
            <div class="ui-app__prepage-loader spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!-- End prepage loader-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- /////////////////////////////////////////////////////////////////// -->
        <!--navbar/header-->
        <div class="navbar-fixed">
            <nav class="ui-app__wrapper__navbar">
                <div class="nav-wrapper">

                    <!-- //////////////////////////////////////////////////////// -->
                    <!-- navbar left side  -->
                    <div class="ui-app__wrapper__navbar__leftside--icons">

                        <!-- left sidenav toggle button(show and hide sidenav) -->
                        <div class="left ui-app__wrapper__navbar__leftside--icons__sidenav--toggle ui-app__wrapper__navbar__leftside--icon__item"
                             data-target="ui-app__left-sidenav-slide-out" id="left-sidenav-toggle">
                            <i class="material-icons">menu</i>
                        </div>

                        <!-- Efnify app/brand title -->
                        <a href="dashboard" class="brand-logo ui-app__wrapper__navbar__leftside--icon__item">Efnify</a>

                        <!-- left sidenav toggle button(small and large sidenav) -->
                        <div class="ui-app__wrapper__navbar__leftside--icons__sidenav-small--toggle hide-on-med-and-down ui-app__wrapper__navbar__leftside--icon__item"
                             id="left-sidenav-small-toggle">
                            <i class="material-icons">radio_button_checked</i>
                        </div>
                    </div>
                    <!-- End navbar left side  -->
                    <!-- ///////////////////////////////////////////////////////////////// -->

                    <!--Search box-->
                    <!-- ////////////////////////////////////////////////////////////// -->
                    <div class="ui-app__wrapper__navbar__leftside__search hide-on-med-and-down">
                        <!-- Search form -->
                        <form action="#">
                            <div class="input-field">
                                <!--Search input-->
                                <input id="search" type="search" autocomplete="off" placeholder="Search pages here!">
                                <!--End Search input-->
                                <!--Search icon-->
                                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                <!--End Search icon-->


                            </div>
                        </form>
                        <!-- End Search form -->
                    </div>
                    <!--End Search box-->
                    <!-- ////////////////////////////////////////////////////////////////// -->

                    <!-- ////////////////////////////////////////////////////////////////// -->
                    <!-- navbar right side  -->
                    <div class="ui-app__wrapper__navbar__rightside--icons right">
                        <!-- navbar menu list -->
                        <ul>
                            <!-- full menu demo -->
                            <li class="ui-app__wrapper__navbar__rightside--icons__item hide-on-small-only"><a
                                        class="btn btn-depressed dropdown-trigger dropdown-fixed-width" href="#!"
                                        data-target="dropdown-full-menu-target"><i
                                            class="material-icons white-text right">arrow_drop_down</i> full menu </a>
                            </li>
                            <!-- End full menu demo -->
                            <!-- refresh/reload page button -->
                            <li class="ui-app__wrapper__navbar__rightside--icons__item hide-on-small-only"
                                id="app-page-refresh"><i class="material-icons">refresh</i></li>

                            <!-- notification list -->
                            <li class="ui-app__wrapper__navbar__rightside--icons__item ui-app__wrapper__navbar__rightside--notifications notification-badge"
                                data-target='dropdown-notifications-target' data-notifications="4"><i
                                        class="material-icons">notifications</i></li>


                            <!-- User profile -->
                            <li class="ui-app__wrapper__navbar__rightside--users ui-app__wrapper__navbar__rightside--icons__item"
                                data-target="dropdown-user-profile-target">
                                M
                            </li>

                        </ul>
                        <!-- full menu dropdown structure -->
                        <div id="dropdown-full-menu-target"
                             class="dropdown-content dropdown-full-width ui-app__wrapper__navbar__rightside--full-menu__dropdown ">
                            <div class="row p-a-15">
                                <div class="col s6 m3 l2">
                                    <div class="title">Material UI</div>
                                    <ul>
                                        <li><a href="#!">Buttons</a></li>
                                        <li><a href="#!">Badges</a></li>
                                        <li><a href="#!">Breadcrumbs</a></li>
                                        <li><a href="#!">Collections</a></li>
                                        <li><a href="#!">Collapsibles</a></li>
                                    </ul>
                                </div>
                                <div class="col s6 m3 l2">
                                    <div class="title">CSS</div>
                                    <ul>
                                        <li><a href="#!">Typography</a></li>
                                        <li><a href="#!">Icons</a></li>
                                        <li><a href="#!">Animations</a></li>
                                        <li><a href="#!">Shadow</a></li>
                                        <li><a href="#!">Media</a></li>
                                    </ul>
                                </div>
                                <div class="col s6 m3 l2">
                                    <div class="title">Advanced UI</div>
                                    <ul>
                                        <li><a href="#!">Carousel</a></li>
                                        <li><a href="#!">Range Slider</a></li>
                                        <li><a href="#!">SweetAlert</a></li>
                                        <li><a href="#!">Highlight</a></li>
                                        <li><a href="#!">Cards</a></li>
                                    </ul>
                                </div>
                                <div class="col s6 m3 l2">
                                    <div class="title">Forms</div>
                                    <ul>
                                        <li><a href="#!">Form Layouts</a></li>
                                        <li><a href="#!">Form Validations</a></li>
                                        <li><a href="#!">Form Masks</a></li>
                                        <li><a href="#!">Text Editor</a></li>
                                        <li><a href="#!">Form Elements</a></li>
                                    </ul>
                                </div>
                                <div class="col s6 m3 l2">
                                    <div class="title">Home</div>
                                    <ul>
                                        <li><a href="#!">Signup</a></li>
                                        <li><a href="#!">Change Password</a></li>
                                        <li><a href="#!">Contactus</a></li>
                                        <li><a href="#!">Blank Page</a></li>
                                        <li><a href="#!">Reset</a></li>
                                    </ul>
                                </div>
                                <div class="col s6 m3 l2">
                                    <div class="title">Elements</div>
                                    <ul>
                                        <li><a href="#!">Grid</a></li>
                                        <li><a href="#!">Color</a></li>
                                        <li><a href="#!">widgets</a></li>
                                        <li><a href="#!">Helpers</a></li>
                                        <li><a href="#!">Search Page</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End full menu dropdown structure -->

                        <!-- User profile dropdown structure -->
                        <div id="dropdown-user-profile-target"
                             class="ui-app__wrapper__navbar__rightside--users__dropdown dropdown-content">
                            <ul>
                                <li><a href="#!"><i class="material-icons">perm_identity</i>My Profile</a></li>
                                <li><a href="javascript:void(0)" class="toggle-right-sidenav"><i class="material-icons">settings</i>Page
                                        Customizer</a></li>
                                <li class="divider"></li>
                                <li><a href="lock"><i class="material-icons">lock</i>Lock</a></li>
                                <li><a href="signup"><i class="material-icons">power_settings_new</i>Logout</a></li>
                            </ul>
                        </div>
                        <!-- End user profile dropdown structure -->
                        <!-- Notifications dropdown structure -->
                        <div id="dropdown-notifications-target"
                             class="ui-app__wrapper__navbar__rightside--notifications__dropdown dropdown-content">
                            <ul class="collection">
                                <li class="collection-item avatar"><img src="<?php echo imgPATH; ?>user1.jpg"
                                                                        alt="user profile picture" class="circle"> <span
                                            class="title">Brunch this weekend?</span>
                                    <p>Ali Connors <span class="body-1">&mdash; I'll be in your neighborhood doing errands this weekend.</span>
                                    </p>
                                </li>
                                <li class="collection-item avatar"><img src="<?php echo imgPATH; ?>user2.jpg"
                                                                        alt="user profile picture" class="circle"> <span
                                            class="title">Oui oui</span>
                                    <p>Sandra Adams <span class="body-1">&mdash; Do you have Paris recommendations? Have you ever been?</span>
                                    </p>
                                </li>
                                <li class="collection-item avatar"><img src="<?php echo imgPATH; ?>user3.jpg"
                                                                        alt="user profile picture" class="circle"> <span
                                            class="title">Birthday gift</span>
                                    <p>Trevor Hansen <span class="body-1">&mdash; Have any ideas about what we should get Heidi for her birthday?</span>
                                    </p>
                                </li>
                                <li class="collection-item avatar"><img src="<?php echo imgPATH; ?>user4.jpg"
                                                                        alt="user profile picture" class="circle"> <span
                                            class="title">Recipe to try</span>
                                    <p>Britta Holt <span class="body-1">&mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos.</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!-- End notifications dropdown structure -->

                    </div>
                    <!-- End navbar left side  -->
                    <!-- ////////////////////////////////////////////////////////// -->
                </div>

            </nav>
        </div>
        <!--End navbar/header-->
        <!-- //////////////////////////////////////////////////////////////////// -->


        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!--Left sidenav/sidebar-->
		 <?php require "left-sidebar.php"; ?>
        <!--End Left sidenav/sidebar-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!--Right sidenav/sidebar-->
		 <?php require "right-sidebar.php"; ?>

        <!-- Right sidenav toggle (show and hide right sidenav on click button) -->
        <a href="#" data-target="ui-app__right-sidenav-slide-out"
           class="ui-app__right-sidenav-toggle sidenav-trigger btn-floating waves-effect waves-light"
           id="right-sidenav-toggle"><i class="material-icons ">settings</i></a>

        <!--End Right sidenav/sidebar-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!--Page Body-->
        <main>

            <!-- Page content -->
            <div class="row">
                <!-- Analytics Header -->

                <div class="col s12 m6 l3">
                    <div class="card ui-app__page-content">
                        <div class="card-content ui-app__page-content__analytics">

                            <div class="card-body">
                                <div class="ui-app__page-content__analytics--data">
                                    <div class="right"><i class="material-icons ">supervised_user_circle</i>
                                    </div>
                                    <h3 class="headline">678450</h3>
                                    <div class="text-muted">Visitors online</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="card ui-app__page-content">
                        <div class="card-content ui-app__page-content__analytics">

                            <div class="card-body">
                                <div class="ui-app__page-content__analytics--data">
                                    <div class="right"><i class="material-icons ">monetization_on</i>
                                    </div>
                                    <h3 class="headline">5698</h3>
                                    <div class="text-muted">Total Sales</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="card ui-app__page-content">
                        <div class="card-content ui-app__page-content__analytics ">

                            <div class="card-body">
                                <div class="ui-app__page-content__analytics--data">
                                    <div class="right"><i class="material-icons ">library_books</i>
                                    </div>
                                    <h3 class="headline">560</h3>
                                    <div class="text-muted">Total Projects</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="card ui-app__page-content">
                        <div class="card-content ui-app__page-content__analytics">

                            <div class="card-body">
                                <div class="ui-app__page-content__analytics--data">
                                    <div class="right"><i class="material-icons ">attach_money</i>
                                    </div>
                                    <h3 class="headline">56980</h3>
                                    <div class="text-muted">Today Income</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Analytics Header -->

                <!-- sales chart -->
                <div class="col s12">

                    <div class="card ui-app__page-content">
                        <div class="card-content">
                            <!-- title -->
                            <div class="card-title headline">Analytics report</div>

                            <div class="card-body">
                                <div style="min-height: 375px">
                                    <canvas id="dashboard-analytics-report-chart"></canvas>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- sales chart -->

                <!-- Report Table -->
                <div class="col s12 m12 l6">

                    <div class="card ui-app__page-content">
                        <div class="card-content">
                            <!-- title -->
                            <div class="card-title headline">Users report</div>

                            <div class="card-body">
                                <table class="responsive-table">
                                    <thead>
                                    <tr>
                                        <th><i class="material-icons">people</i></th>
                                        <th>User</th>
                                        <th>Items</th>
                                        <th>Activity</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><img src="<?php echo imgPATH; ?>user1.jpg" alt="user profile picture"
                                                 class="circle responsive-img" style="width: 2rem;height: 2rem;"></td>
                                        <td>
                                            <div>Audrey Gill</div>
                                            <div class="text-muted">Registered: May 23, 2018</div>
                                        </td>

                                        <td>03</td>
                                        <td>
                                            <div class="text-muted">Last login</div>
                                            <div>10 minutes ago</div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><img src="<?php echo imgPATH; ?>user2.jpg" alt="user profile picture"
                                                 class="circle responsive-img" style="width: 2rem;height: 2rem;"></td>
                                        <td>
                                            <div>Bernadette Arnold</div>
                                            <div class="text-muted">Registered: June 22, 2018</div>
                                        </td>

                                        <td>01</td>
                                        <td>
                                            <div class="text-muted">Last login</div>
                                            <div>12 hours ago</div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td><img src="<?php echo imgPATH; ?>user3.jpg" alt="user profile picture"
                                                 class="circle responsive-img" style="width: 2rem;height: 2rem;"></td>
                                        <td>
                                            <div>Chloe Claire</div>
                                            <div class="text-muted">Registered: May 22, 2018</div>
                                        </td>

                                        <td>07</td>
                                        <td>
                                            <div class="text-muted">Last login</div>
                                            <div>Just Now</div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><img src="<?php echo imgPATH; ?>user4.jpg" alt="user profile picture"
                                                 class="circle responsive-img" style="width: 2rem;height: 2rem;"></td>
                                        <td>
                                            <div>Dorothy Elizabeth</div>
                                            <div class="text-muted">Registered: June 20, 2018</div>
                                        </td>

                                        <td>09</td>
                                        <td>
                                            <div class="text-muted">Last login</div>
                                            <div>30 min ago</div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><img src="<?php echo imgPATH; ?>user5.jpg" alt="user profile picture"
                                                 class="circle responsive-img" style="width: 2rem;height: 2rem;"></td>
                                        <td>
                                            <div>Carolyn Emma</div>
                                            <div class="text-muted">Registered: June 12, 2018</div>
                                        </td>

                                        <td>06</td>
                                        <td>
                                            <div class="text-muted">Last login</div>
                                            <div>5 hours ago</div>
                                        </td>
                                    </tr>
                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- Report Table -->

                <!-- Notification report -->

                <div class="col s12 m12 l6">

                    <div class="card ui-app__page-content">
                        <div class="card-content">
                            <!-- title -->
                            <div class="card-title headline">Recent notifications</div>

                            <div class="card-body">
                                <ul class="collection" style="border:0px">
                                    <li class="collection-item avatar"><img src="<?php echo imgPATH; ?>user1.jpg"
                                                                            alt="user profile picture" class="circle">
                                        <span class="title">Brunch this weekend?</span>
                                        <p>Ali Connors <span class="body-1">&mdash; I'll be in your neighborhood doing errands this weekend.</span>
                                        </p>
                                    </li>
                                    <li class="collection-item avatar"><img src="<?php echo imgPATH; ?>user2.jpg"
                                                                            alt="user profile picture" class="circle">
                                        <span class="title">Oui oui</span>
                                        <p>Sandra Adams <span class="body-1">&mdash; Do you have Paris recommendations? Have you ever been?</span>
                                        </p>
                                    </li>
                                    <li class="collection-item avatar"><img src="<?php echo imgPATH; ?>user3.jpg"
                                                                            alt="user profile picture" class="circle">
                                        <span class="title">Birthday gift</span>
                                        <p>Trevor Hansen <span class="body-1">&mdash; Have any ideas about what we should get Heidi for her birthday?</span>
                                        </p>
                                    </li>
                                    <li class="collection-item avatar"><img src="<?php echo imgPATH; ?>user4.jpg"
                                                                            alt="user profile picture" class="circle">
                                        <span class="title">Recipe to try</span>
                                        <p>Britta Holt <span class="body-1">&mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos.</span>
                                        </p>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- Notification report -->


            </div>
            <!--End Page content -->

        </main>
        <!--End page body-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->


        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!--Footer-->
		 <?php require "footer.php"; ?>
        <!--End footer-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->

    </div>
    <!-- End body page wrapper -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
</div>

<!-- End body -->
<!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--  Scripts-->

<?php require "footer-script.php"; ?>