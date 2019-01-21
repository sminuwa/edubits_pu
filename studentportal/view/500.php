<!--Design by designlayout-->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Start HTML document-->

<!DOCTYPE html>

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--HTML-->
<html lang="en">

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Head-->


<!-- Mirrored from vuelayout.com/efnify/html/500 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Nov 2018 15:19:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Page title-->
    <title>Internal Server Error! - Efnify</title>

    <!--Browser navbar color (#5c6bc0: indigo lighten-1) for mobile-->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#5c6bc0">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#5c6bc0">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#5c6bc0">
    <!--Favicon icon-->
    <link href="assets/images/favicon.png" type="image/png" rel="icon">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- ================================================
    CSS
    ================================================ -->

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo pluginPATH; ?>materialize-css/dist/css/materialize.min.css" />
    <!-- Import prismjs (syntex highlighter) -->
    <link type="text/css" rel="stylesheet" href="<?php echo pluginPATH; ?>prismjs/themes/prism.css" />
    <!-- Import Efnify app css -->
    <link type="text/css" rel="stylesheet" href="assets/css/app.css" />
    <!-- Import Efnify app helper class css -->
    <link type="text/css" rel="stylesheet" href="assets/css/helper.css" />
    <!-- Import Efnify app responsive css -->
    <link type="text/css" rel="stylesheet" href="assets/css/responsive.css" />
    <!-- Import Efnify app theme css -->
    <link type="text/css" rel="stylesheet" href="assets/css/theme/default.css" />


</head>
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
                            <div class="left ui-app__wrapper__navbar__leftside--icons__sidenav--toggle ui-app__wrapper__navbar__leftside--icon__item" data-target="ui-app__left-sidenav-slide-out" id="left-sidenav-toggle">
                                <i class="material-icons">menu</i>
                            </div>

                            <!-- Efnify app/brand title -->
                            <div class="brand-logo ui-app__wrapper__navbar__leftside--icon__item"><a href="dashboard">Efnify</a></div>


                            <!-- left sidenav toggle button(small and large sidenav) -->
                            <div class="ui-app__wrapper__navbar__leftside--icons__sidenav-small--toggle hide-on-med-and-down ui-app__wrapper__navbar__leftside--icon__item" id="left-sidenav-small-toggle">
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
                                <li class="ui-app__wrapper__navbar__rightside--icons__item hide-on-small-only"><a class="btn btn-depressed dropdown-trigger dropdown-fixed-width" href="#!" data-target="dropdown-full-menu-target"><i class="material-icons white-text right">arrow_drop_down</i> full menu </a></li>
                                <!-- End full menu demo -->

                                <!-- refresh/reload page button -->
                                <li class="ui-app__wrapper__navbar__rightside--icons__item hide-on-small-only" id="app-page-refresh"><i class="material-icons">refresh</i></li>

                                <!-- notification list -->
                                <li class="ui-app__wrapper__navbar__rightside--icons__item ui-app__wrapper__navbar__rightside--notifications notification-badge" data-target='dropdown-notifications-target' data-notifications="4"><i class="material-icons">notifications</i></li>

                                <!-- User profile -->
                                <li class="ui-app__wrapper__navbar__rightside--users ui-app__wrapper__navbar__rightside--icons__item" data-target="dropdown-user-profile-target">
                                    M
                                </li>

                            </ul>
                            <!-- full menu dropdown structure -->
                            <div id="dropdown-full-menu-target" class="dropdown-content dropdown-full-width ui-app__wrapper__navbar__rightside--full-menu__dropdown ">
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
                            <div id="dropdown-user-profile-target" class="ui-app__wrapper__navbar__rightside--users__dropdown dropdown-content">
                                <ul>
                                    <li><a href="#!"><i class="material-icons">perm_identity</i>My Profile</a></li>
                                    <li><a href="javascript:void(0)" class="toggle-right-sidenav"><i class="material-icons">settings</i>Page Customizer</a></li>
                                    <li class="divider"></li>
                                    <li><a href="lock"><i class="material-icons">lock</i>Lock</a></li>
                                    <li><a href="signup"><i class="material-icons">power_settings_new</i>Logout</a></li>
                                </ul>
                            </div>

                            <!-- End user profile dropdown structure -->

                            <!-- Notifications dropdown structure -->
                            <div id="dropdown-notifications-target" class="ui-app__wrapper__navbar__rightside--notifications__dropdown dropdown-content">
                                <ul class="collection">
                                    <li class="collection-item avatar">
                                        <img src="<?php echo imgPATH; ?>user1.jpg" alt="user profile picture" class="circle">
                                        <span class="title">Brunch this weekend?</span>
                                        <p>Ali Connors <span class="body-1">&mdash; I'll be in your neighborhood doing errands this weekend.</span></p>

                                    </li>
                                    <li class="collection-item avatar">
                                        <img src="<?php echo imgPATH; ?>user2.jpg" alt="user profile picture" class="circle">
                                        <span class="title">Oui oui</span>
                                        <p>Sandra Adams <span class="body-1">&mdash; Do you have Paris recommendations? Have you ever been?</span></p>

                                    </li>
                                    <li class="collection-item avatar">
                                        <img src="<?php echo imgPATH; ?>user3.jpg" alt="user profile picture" class="circle">
                                        <span class="title">Birthday gift</span>
                                        <p>Trevor Hansen <span class="body-1">&mdash; Have any ideas about what we should get Heidi for her birthday?</span></p>

                                    </li>
                                    <li class="collection-item avatar">
                                        <img src="<?php echo imgPATH; ?>user4.jpg" alt="user profile picture" class="circle">
                                        <span class="title">Recipe to try</span>
                                        <p>Britta Holt <span class="body-1">&mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos.</span></p>

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
            <aside class="ui-app__left-sidenav sidenav sidenav-fixed" id="ui-app__left-sidenav-slide-out">

                <!-- sidenav menu list -->
                <ul class="no-margin">
                    <!-- dashboard menu -->
                    <li>
                        <a href="dashboard" class="waves-effect waves-light btn btn-rounded btn-dashboard"><i class="material-icons left">dashboard</i>Dashboard</a>
                    </li>
                    <!--end  dashboard menu -->

                    <!-- sidenav main menu list -->
                    <li>
                        <ul class="ui-app__left-sidenav__menu collapsible collapsible-accordion ui-app__scrollbar">
                            <li>

                                <a class="collapsible-header waves-effect waves-default"><i class="material-icons left">build</i>Material UI<i class="material-icons right">arrow_drop_down</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="button" class="waves-effect waves-default">Button</a></li>
                                        <li><a href="floating-action-button" class="waves-effect waves-default">Floating Action Button</a></li>
                                        <li><a href="breadcrumbs" class="waves-effect waves-default">Breadcrumbs</a></li>
                                        <li><a href="collections" class="waves-effect waves-default">Collections</a></li>
                                        <li><a href="collapsibles" class="waves-effect waves-default">Collapsibles</a></li>
                                        <li><a href="dropdown" class="waves-effect waves-default">Dropdown</a></li>
                                        <li><a href="tabs" class="waves-effect waves-default">Tabs</a></li>
                                        <li><a href="pagination" class="waves-effect waves-default">Pagination</a></li>
                                        <li><a href="preloader" class="waves-effect waves-default">Preloader</a></li>
                                        <li><a href="toasts" class="waves-effect waves-default">Toasts</a></li>
                                        <li><a href="tooltip" class="waves-effect waves-default">Tooltip</a></li>
                                        <li><a href="waves" class="waves-effect waves-default">Waves</a></li>
                                        <li><a href="typography" class="waves-effect waves-default">Typography</a></li>
                                        <li><a href="icons" class="waves-effect waves-default">Icons</a></li>
                                        <li><a href="animations" class="waves-effect waves-default">Animations</a></li>
                                        <li><a href="shadow" class="waves-effect waves-default">Shadow</a></li>
                                        <li><a href="media" class="waves-effect waves-default">Media</a></li>
                                        <li><a href="css-transitions" class="waves-effect waves-default">CSS Transitions</a></li>
                                        <li><a href="pulse" class="waves-effect waves-default">Pulse</a></li>
                                        <li><a href="feature-discovery" class="waves-effect waves-default">FeatureDiscovery</a></li>
                                        <li><a href="media-js" class="waves-effect waves-default">Media JavaScript</a></li>

                                        <li><a href="cards" class="waves-effect waves-default">Cards</a></li>
                                        <li><a href="carousel" class="waves-effect waves-default">Carousel</a></li>
                                        <li><a href="modals" class="waves-effect waves-default">Modals</a></li>
                                        <li><a href="range-slider" class="waves-effect waves-default">Range Slider</a></li>
                                        <li><a href="sweetalert" class="waves-effect waves-default">SweetAlert</a></li>
                                        <li><a href="highlight" class="waves-effect waves-default">Highlight</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="collapsible-header"><i class="material-icons left">insert_chart</i>Charts<i class="material-icons right">arrow_drop_down</i></a>
                                <div class="collapsible-body">
                                    <ul>


                                        <li><a href="chartjs-charts" class="waves-effect waves-default">ChartJS</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="collapsible-header"><i class="material-icons left">message</i>Forms<i class="material-icons right">arrow_drop_down</i></a>
                                <div class="collapsible-body">
                                    <ul>

                                        <li><a href="autocomplete" class="waves-effect waves-default">Autocomplete</a></li>
                                        <li><a href="checkboxes" class="waves-effect waves-default">Checkboxes</a></li>
                                        <li><a href="chips" class="waves-effect waves-default">Chips</a></li>
                                        <li><a href="pickers" class="waves-effect waves-default">Pickers</a></li>
                                        <li><a href="radio-buttons" class="waves-effect waves-default">Radio Buttons</a></li>
                                        <li><a href="range" class="waves-effect waves-default">Range</a></li>
                                        <li><a href="select" class="waves-effect waves-default">Select</a></li>
                                        <li><a href="switches" class="waves-effect waves-default">Switches</a></li>
                                        <li><a href="text-inputs" class="waves-effect waves-default">Text Inputs</a></li>
                                        <li><a href="form-layouts" class="waves-effect waves-default">Form Layouts</a></li>


                                        <li><a href="text-editor" class="waves-effect waves-default">Text Editor</a></li>

                                    </ul>
                                </div>
                            </li>


                            <li>
                                <a class="collapsible-header"><i class="material-icons left">border_all</i>Tables<i class="material-icons right">arrow_drop_down</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="basic-table" class="waves-effect waves-default">Basic Tables</a></li>
                                        <li><a href="data-table" class="waves-effect waves-default">Data Tables</a></li>

                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a class="collapsible-header"><i class="material-icons left">terrain</i>Pages<i class="material-icons right">arrow_drop_down</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="login" class="waves-effect waves-default">Login</a></li>
                                        <li><a href="signup" class="waves-effect waves-default">Signup</a></li>
                                        <li><a href="reset" class="waves-effect waves-default">Reset</a></li>
                                        <li><a href="lock" class="waves-effect waves-default">Lock</a></li>
                                        <li><a href="change-password" class="waves-effect waves-default">Change Password</a></li>
                                        <li><a href="contactus" class="waves-effect waves-default">Contactus</a></li>
                                        <li><a href="blank" class="waves-effect waves-default">Blank Page</a></li>


                                        <li><a href="404" class="waves-effect waves-default">404</a></li>
                                        <li><a href="500" class="waves-effect waves-default">500</a></li>

                                    </ul>
                                </div>
                            </li>

                            <li class="no-menu-list">
                                <a href="grid" class="collapsible-header"><i class="material-icons left">grid_on</i>Grid</a>
                                <div class="collapsible-body">
                                </div>
                            </li>

                            <li class="no-menu-list">
                                <a href="color" class="collapsible-header"><i class="material-icons left">format_color_fill</i>Color</a>
                                <div class="collapsible-body">
                                </div>
                            </li>

                            <li class="no-menu-list">
                                <a href="helpers" class="collapsible-header"><i class="material-icons left">live_help</i>Helper class</a>
                                <div class="collapsible-body">
                                </div>
                            </li>

                        </ul>

                    </li>
                    <!--end sidenav main menu list -->

                    <!-- sidenav quick/sub main menu list -->
                    <li class="ui-app__left-sidenav__collapsible-quick-menu-name">
                        Quick Link
                    </li>
                    <li>
                        <ul class="ui-app__left-sidenav__collapsible-quick-menu ui-app__scrollbar">
                            <li><a href="#!"><i class="material-icons">help</i>Help</a></li>
                            <li><a href="#!"><i class="material-icons">phone</i>Contact Support</a></li>
                            <li><a href="#!"><i class="material-icons">email</i>Email Support</a></li>
                            <li><a href="#!"><i class="material-icons">code</i>API Documentation</a></li>
                        </ul>
                    </li>
                    <!-- end sidenav quick/sub main menu list -->
                </ul>
                <!-- end sidenav menu list -->
            </aside>
            <!--End Left sidenav/sidebar-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!--Right sidenav/sidebar-->
            <aside class="ui-app__right-sidenav sidenav ui-app__scrollbar" id="ui-app__right-sidenav-slide-out">

                <!-- Layout options -->
                <ul class="ui-app__right-sidenav__layout">
                    <li>
                        <h6 class="settings-content-title">Layout Options</h6>
                    </li>
                    <li>
                        <label>
                            <input class="with-gap" name="layout" type="radio" value="fixed-header-sidenav" checked />
                            <span>Fixed Header and sidenav(Default)</span>
                        </label>
                    </li>

                    <li>
                        <label>
                            <input class="with-gap" name="layout" type="radio" value="fixed-header-unfixed-sidenav"/>
                            <span>Fixed Header Unfixed sidenav</span>
                        </label>
                    </li>


                    <li>
                        <label>
                            <input class="with-gap" name="layout" type="radio" value="unfixed-header-sidenav"/>
                            <span>Unfixed Header and sidenav</span>
                        </label>
                    </li>
                </ul>
                <!-- End Layout options -->

                <!-- color options -->
                <ul class="ui-app__right-sidenav__layout">
                    <li>
                        <h6 class="settings-content-title">Color Options</h6>
                    </li>
                    <li>
                        <div class="ui-app__right-sidenav__layout__color-body active" data-color="default">
                            <div class="ui-app__right-sidenav__layout__color-body__header indigo">
                            </div>
                            <div class="ui-app__right-sidenav__layout__color-body__sidebar">
                            </div>
                        </div>

                        <div class="ui-app__right-sidenav__layout__color-body" data-color="pink">
                            <div class="ui-app__right-sidenav__layout__color-body__header pink">
                            </div>
                            <div class="ui-app__right-sidenav__layout__color-body__sidebar">
                            </div>
                        </div>

                        <div class="ui-app__right-sidenav__layout__color-body" data-color="purple">
                            <div class="ui-app__right-sidenav__layout__color-body__header purple">
                            </div>
                            <div class="ui-app__right-sidenav__layout__color-body__sidebar">
                            </div>
                        </div>


                        <div class="ui-app__right-sidenav__layout__color-body" data-color="blue">
                            <div class="ui-app__right-sidenav__layout__color-body__header blue">
                            </div>
                            <div class="ui-app__right-sidenav__layout__color-body__sidebar">
                            </div>
                        </div>

                        <div class="ui-app__right-sidenav__layout__color-body" data-color="cyan">
                            <div class="ui-app__right-sidenav__layout__color-body__header cyan">
                            </div>
                            <div class="ui-app__right-sidenav__layout__color-body__sidebar">
                            </div>
                        </div>

                        <div class="ui-app__right-sidenav__layout__color-body" data-color="teal">
                            <div class="ui-app__right-sidenav__layout__color-body__header teal">
                            </div>
                            <div class="ui-app__right-sidenav__layout__color-body__sidebar">
                            </div>
                        </div>



                </ul>
                <!--end  color options -->
            </aside>

            <!-- Right sidenav toggle (show and hide right sidenav on click button) -->
            <a href="#" data-target="ui-app__right-sidenav-slide-out" class="ui-app__right-sidenav-toggle sidenav-trigger btn-floating waves-effect waves-light" id="right-sidenav-toggle"><i class="material-icons ">settings</i></a>

            <!--End Right sidenav/sidebar-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!--Page Body-->
            <main>


                <!-- Page content -->
                <div class="row">
                    <!-- Page content body -->
                    <div class="col s12">
                        <div class="card ui-app__page-content">
                            <div class="card-content">
                                <!-- title -->
                                <div class="error-code">500</div>
                                <div class="card-title headline center-align">Internal Server Error!</div>


                                <div class="card-body center-align card-body-error">

                                    <div class="title">Sorry, the server encountered an internal error or misconfiguration and was unable to complete your request.</div>

                                    <p>
                                        You can <a href="dashboard">return to our front page</a>, or <a href="contactus">drop us a line</a>.
                                    </p>


                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Page content body -->


                </div>
                <!--End Page content -->

            </main>
            <!--End page body-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->


            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!--Footer-->
            <footer class="page-footer">
                <div class="footer-copyright white grey-text">
                    &copy; 2018 designlayout
                </div>
            </footer>
            <!--End footer-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->

        </div>
        <!-- End Efnify body page wrapper -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>

    <!-- End Efnify body -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->


    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!--  Scripts-->

    <!-- Import jquery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Import materialize js -->
    <script src="plugins/materialize-css/dist/js/materialize.min.js"></script>
    <!-- Import prismjs (syntex highlighter) -->
    <script src="plugins/prismjs/prism.js"></script>
    <!-- Import Efnify app js -->
    <script src="assets/js/app.js"></script>
    <!-- Import Efnify search js (Placed in navbar) -->
    <script src="assets/js/search.js"></script>

    <!--End scripts-->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
</body>
<!--End body-->
<!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- Mirrored from vuelayout.com/efnify/html/500 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Nov 2018 15:19:56 GMT -->
</html>
<!--End HTML-->
<!-- //////////////////////////////////////////////////////////////////////////// -->