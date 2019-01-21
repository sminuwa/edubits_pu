<?php
	/**
	 * Created by PhpStorm.
	 * User: Engr
	 * Date: 12/20/2018
	 * Time: 11:55 AM
	 */

?>

<aside class="ui-app__left-sidenav sidenav sidenav-fixed" id="ui-app__left-sidenav-slide-out">

    <!-- sidenav menu list -->
    <ul class="no-margin">
        <!-- dashboard menu -->
        <li>
            <a href="dashboard" class="waves-effect waves-light btn btn-rounded btn-dashboard"><i
                        class="material-icons left">dashboard</i>Dashboard</a>
        </li>
        <!--end  dashboard menu -->

        <!-- sidenav main menu list -->
        <li>
            <ul class="ui-app__left-sidenav__menu collapsible collapsible-accordion ui-app__scrollbar">

                <li>
                    <a class="collapsible-header"><i class="material-icons left">account_circle</i>Profile<i
                                class="material-icons right">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="javascript:void();" class="waves-effect waves-default">Biodata</a></li>
                            <li><a href="javascript:void();" class="waves-effect waves-default">Next of Kin</a></li>
                            <li><a href="javascript:void();" class="waves-effect waves-default">Guardian</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a class="collapsible-header"><i class="material-icons left">assignment</i>Subjects</a>
                </li>

                <li>
                    <a class="collapsible-header"><i class="material-icons left">assignment</i>Classes Records</a>
                </li>

                <li>
                    <a class="collapsible-header"><i class="material-icons left">local_atm</i>Finances<i
                                class="material-icons right">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="javascript:void();" class="waves-effect waves-default">Paid</a></li>
                            <li><a href="javascript:void();" class="waves-effect waves-default">Unpaid</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a class="collapsible-header"><i class="material-icons left">assignment</i>Assessments</a>
                </li>

                <li>
                    <a class="collapsible-header"><i class="material-icons left">perm_contact_calendar</i>Calendar</a>
                </li>
                
                <li>
                    <a class="collapsible-header"><i class="material-icons left">local_atm</i>Library<i
                                class="material-icons right">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="javascript:void();" class="waves-effect waves-default">My Books</a></li>
                            <li><a href="javascript:void();" class="waves-effect waves-default">EduLib</a></li>
                            <li><a href="javascript:void();" class="waves-effect waves-default">Documents</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a class="collapsible-header"><i class="material-icons left">report</i>Reports</a>
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
