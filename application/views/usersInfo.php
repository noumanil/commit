<html lang="en"><!--<![endif]--><!-- BEGIN HEAD --><head>
        <meta charset="utf-8">
        <title>Metronic | Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css">
        <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
        <link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css">
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css">
        <link href="/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css">
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css">
        <link href="/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css">
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color">
        <link href="/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css">
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico"> <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="/assets/layouts/layout/img/logo.png" alt="logo" class="logo-default"> </a>
                    <div class="menu-toggler sidebar-toggler"> </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-bell"></i>
                                <span class="badge badge-default"> 7 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3>
                                        <span class="bold">12 pending</span> notifications</h3>
                                    <a href="page_user_profile_1.html">view all</a>
                                </li>
                                <li>
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><ul class="dropdown-menu-list scroller" style="height: 250px; overflow: hidden; width: auto;" data-handle-color="#637283" data-initialized="1">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span> New user registered. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Server #12 overloaded. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">10 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Server #2 not responding. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">14 hrs</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> Application error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">2 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Database overloaded 68%. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> A user IP blocked. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">4 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Storage Server #4 not responding dfdfdfd. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">5 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> System Error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">9 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Storage server failed. </span>
                                                </a>
                                            </li>
                                        </ul><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(99, 114, 131);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);"></div></div>
                                </li>
                            </ul>
                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-envelope-open"></i>
                                <span class="badge badge-default"> 4 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3>You have
                                        <span class="bold">7 New</span> Messages</h3>
                                    <a href="app_inbox.html">view all</a>
                                </li>
                                <li>
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 275px;"><ul class="dropdown-menu-list scroller" style="height: 275px; overflow: hidden; width: auto;" data-handle-color="#637283" data-initialized="1">
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="/assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Lisa Wong </span>
                                                        <span class="time">Just Now </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="/assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Richard Doe </span>
                                                        <span class="time">16 mins </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="/assets/layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Bob Nilson </span>
                                                        <span class="time">2 hrs </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="/assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Lisa Wong </span>
                                                        <span class="time">40 mins </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="/assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Richard Doe </span>
                                                        <span class="time">46 mins </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                        </ul><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(99, 114, 131);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);"></div></div>
                                </li>
                            </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN TODO DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-calendar"></i>
                                <span class="badge badge-default"> 3 </span>
                            </a>
                            <ul class="dropdown-menu extended tasks">
                                <li class="external">
                                    <h3>You have
                                        <span class="bold">12 pending</span> tasks</h3>
                                    <a href="app_todo.html">view all</a>
                                </li>
                                <li>
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 275px;"><ul class="dropdown-menu-list scroller" style="height: 275px; overflow: hidden; width: auto;" data-handle-color="#637283" data-initialized="1">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">New release v1.2 </span>
                                                        <span class="percent">30%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">40% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Application deployment</span>
                                                        <span class="percent">65%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">65% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Mobile app release</span>
                                                        <span class="percent">98%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">98% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Database migration</span>
                                                        <span class="percent">10%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">10% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Web server upgrade</span>
                                                        <span class="percent">58%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">58% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Mobile development</span>
                                                        <span class="percent">85%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">85% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">New UI release</span>
                                                        <span class="percent">38%</span>
                                                    </span>
                                                    <span class="progress progress-striped">
                                                        <span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">38% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(99, 114, 131);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);"></div></div>
                                </li>
                            </ul>
                        </li>
                        <!-- END TODO DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="/assets/layouts/layout/img/avatar3_small.jpg">
                                <span class="username username-hide-on-mobile"> Nick </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="page_user_profile_1.html">
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                                <li>
                                    <a href="app_calendar.html">
                                        <i class="icon-calendar"></i> My Calendar </a>
                                </li>
                                <li>
                                    <a href="app_inbox.html">
                                        <i class="icon-envelope-open"></i> My Inbox
                                        <span class="badge badge-danger"> 3 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="app_todo.html">
                                        <i class="icon-rocket"></i> My Tasks
                                        <span class="badge badge-success"> 7 </span>
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="page_user_lock_1.html">
                                        <i class="icon-lock"></i> Lock Screen </a>
                                </li>
                                <li>
                                    <a href="page_user_login_1.html">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                            <a href="javascript:;" class="dropdown-toggle">
                                <i class="icon-logout"></i>
                            </a>
                        </li>
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler"> </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <li class="sidebar-search-wrapper">
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                            <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                                <a href="javascript:;" class="remove">
                                    <i class="icon-close"></i>
                                </a>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                                </div>
                            </form>
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>
                        <li class="nav-item  ">
                            <a href="<?= site_url() ?>/vadminhomepage">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-user"></i>
                                <span class="title">Users</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu" style="display: block;">
                                <li class="nav-item">
                                    <a href="<?= site_url() ?>/createUser">
                                        <i class="icon-user"></i>
                                        <span class="title">Create New User</span>

                                    </a>
                                </li>
                                <li class="nav-item active open">
                                    <a href="<?= site_url() ?>/usersInfo">
                                        <i class="icon-users"></i>
                                        <span class="title">Edit or Delete User Information</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?= site_url() ?>/password">
                                <i class="icon-settings"></i>
                                <span class="title">Change Password</span>

                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?= site_url() ?>/temporary">
                                <i class="icon-paper-clip"></i>
                                <span class="title">Temporary Database</span>

                            </a>
                        </li>
                        <li class="nav-item  " >
                            <a href="<?= site_url() ?>/permanent">
                                <i class="icon-calendar"></i>
                                <span class="title">Permanent Database</span>

                            </a>
                        </li>
                        <li class="nav-item  " >
                            <a href="<?= site_url() ?>logout">
                                <i class="icon-logout"></i>
                                <span class="title">Logout</span>

                            </a>
                        </li>


                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content" style="min-height:1112px">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class="theme-panel hidden-xs hidden-sm">
                        <div class="toggler"> </div>
                        <div class="toggler-close"> </div>
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                    <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                                    <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                    <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                    <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                    <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                                </ul>
                            </div>
                            <div class="theme-option">
                                <span> Theme Style </span>
                                <select class="layout-style-option form-control input-sm">
                                    <option value="square" selected="selected">Square corners</option>
                                    <option value="rounded">Rounded corners</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Layout </span>
                                <select class="layout-option form-control input-sm">
                                    <option value="fluid" selected="selected">Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Header </span>
                                <select class="page-header-option form-control input-sm">
                                    <option value="fixed" selected="selected">Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Top Menu Dropdown</span>
                                <select class="page-header-top-dropdown-style-option form-control input-sm">
                                    <option value="light" selected="selected">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Mode</span>
                                <select class="sidebar-option form-control input-sm">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Menu </span>
                                <select class="sidebar-menu-option form-control input-sm">
                                    <option value="accordion" selected="selected">Accordion</option>
                                    <option value="hover">Hover</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Style </span>
                                <select class="sidebar-style-option form-control input-sm">
                                    <option value="default" selected="selected">Default</option>
                                    <option value="light">Light</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Position </span>
                                <select class="sidebar-pos-option form-control input-sm">
                                    <option value="left" selected="selected">Left</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Footer </span>
                                <select class="page-footer-option form-control input-sm">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <div class="content container">
                            <h2 class="page-title">Users Info.</h2>
                            <div class="row">
                                <div class="box col-md-12">
                                    <div class="box-inner">
                                        <div class="box-header well" data-original-title="">

                                            <div class="box-icon">
                                                <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
                                                <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                                <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
                                            </div>
                                        </div>
                                        <div class="box-content">
                                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div id="DataTables_Table_0_length" class="dataTables_length">
                                                            <label>
                                                                <select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
                                                                    <option style="color: black" value="10" selected="selected">Exam Managers and Staffs</option>
                                                                    <option style="color: black" value="25">Candidates</option>
                                                                    <option style="color: black" value="50">All</option>

                                                                </select> Users
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div id="DataTables_Table_0_length" class="dataTables_length">
                                                            <label>
                                                                <select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
                                                                    <option style="color: black" value="10" selected="selected">10</option>
                                                                    <option style="color: black" value="25">25</option>
                                                                    <option style="color: black" value="50">50</option>
                                                                    <option style="color: black" value="100">100</option>
                                                                </select> records per page
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="dataTables_filter" id="DataTables_Table_0_filter">
                                                            <label>Search: <input type="text" aria-controls="DataTables_Table_0"></label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 269px;">Username</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 226px;">Date registered</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 123px;">Role</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 493px;">Actions</th></tr>
                                                </thead>

                                                <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                                                        <td class=" sorting_1">Abdullah</td>
                                                        <td class="center ">2012/02/01</td>
                                                        <td class="center ">Staff</td>
                                                        <td class="center ">
                                                            <a class="btn btn-success" href="#">
                                                                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                                                View
                                                            </a>
                                                            <a class="btn btn-info" href="#">
                                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                                Edit
                                                            </a>
                                                            <a class="btn btn-danger" href="#">
                                                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                                                Delete
                                                            </a>
                                                        </td>
                                                    </tr><tr class="even">
                                                        <td class=" sorting_1">Abraham</td>
                                                        <td class="center ">2012/03/01</td>
                                                        <td class="center ">Staff</td>
                                                        <td class="center ">
                                                            <a class="btn btn-success" href="#">
                                                                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                                                View
                                                            </a>
                                                            <a class="btn btn-info" href="#">
                                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                                Edit
                                                            </a>
                                                            <a class="btn btn-danger" href="#">
                                                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                                                Delete
                                                            </a>
                                                        </td>
                                                    </tr><tr class="odd">
                                                        <td class=" sorting_1">Ahemd Saruar</td>
                                                        <td class="center ">2012/03/01</td>
                                                        <td class="center ">Staff</td>
                                                        <td class="center ">
                                                            <a class="btn btn-success" href="#">
                                                                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                                                View
                                                            </a>
                                                            <a class="btn btn-info" href="#">
                                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                                Edit
                                                            </a>
                                                            <a class="btn btn-danger" href="#">
                                                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                                                Delete
                                                            </a>
                                                        </td>
                                                    </tr><tr class="even">
                                                        <td class=" sorting_1">Amrin Sana</td>
                                                        <td class="center ">2012/08/23</td>
                                                        <td class="center ">Staff</td>
                                                        <td class="center ">
                                                            <a class="btn btn-success" href="#">
                                                                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                                                View
                                                            </a>
                                                            <a class="btn btn-info" href="#">
                                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                                Edit
                                                            </a>
                                                            <a class="btn btn-danger" href="#">
                                                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                                                Delete
                                                            </a>
                                                        </td>
                                                    </tr><tr class="odd">
                                                        <td class=" sorting_1">Andro Christopher</td>
                                                        <td class="center ">2012/08/23</td>
                                                        <td class="center ">Staff</td>
                                                        <td class="center ">
                                                            <a class="btn btn-success" href="#">
                                                                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                                                View
                                                            </a>
                                                            <a class="btn btn-info" href="#">
                                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                                Edit
                                                            </a>
                                                            <a class="btn btn-danger" href="#">
                                                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                                                Delete
                                                            </a>
                                                        </td>
                                                    </tr><tr class="even">
                                                        <td class=" sorting_1">Brown Blue</td>
                                                        <td class="center ">2012/03/01</td>
                                                        <td class="center ">Exam Manager</td>
                                                        <td class="center ">
                                                            <a class="btn btn-success" href="#">
                                                                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                                                View
                                                            </a>
                                                            <a class="btn btn-info" href="#">
                                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                                Edit
                                                            </a>
                                                            <a class="btn btn-danger" href="#">
                                                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                                                Delete
                                                            </a>
                                                        </td>
                                                    </tr><tr class="odd">
                                                        <td class=" sorting_1">Brown Robert</td>
                                                        <td class="center ">2012/03/01</td>
                                                        <td class="center ">Staff</td>
                                                        <td class="center ">
                                                            <a class="btn btn-success" href="#">
                                                                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                                                View
                                                            </a>
                                                            <a class="btn btn-info" href="#">
                                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                                Edit
                                                            </a>
                                                            <a class="btn btn-danger" href="#">
                                                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                                                Delete
                                                            </a>
                                                        </td>
                                                    </tr><tr class="even">
                                                        <td class=" sorting_1">Chris Jack</td>
                                                        <td class="center ">2012/01/01</td>
                                                        <td class="center ">Staff</td>
                                                        <td class="center ">
                                                            <a class="btn btn-success" href="#">
                                                                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                                                View
                                                            </a>
                                                            <a class="btn btn-info" href="#">
                                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                                Edit
                                                            </a>
                                                            <a class="btn btn-danger" href="#">
                                                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                                                Delete
                                                            </a>
                                                        </td>
                                                    </tr><tr class="odd">
                                                        <td class=" sorting_1">Christopher</td>
                                                        <td class="center ">2012/08/23</td>
                                                        <td class="center ">Staff</td>
                                                        <td class="center ">
                                                            <a class="btn btn-success" href="#">
                                                                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                                                View
                                                            </a>
                                                            <a class="btn btn-info" href="#">
                                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                                Edit
                                                            </a>
                                                            <a class="btn btn-danger" href="#">
                                                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                                                Delete
                                                            </a>
                                                        </td>
                                                    </tr><tr class="even">
                                                        <td class=" sorting_1">Dave Robert</td>
                                                        <td class="center ">2012/03/01</td>
                                                        <td class="center ">Exam Manager</td>
                                                        <td class="center ">
                                                            <a class="btn btn-success" href="#">
                                                                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                                                View
                                                            </a>
                                                            <a class="btn btn-info" href="#">
                                                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                                                Edit
                                                            </a>
                                                            <a class="btn btn-danger" href="#">
                                                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                                                Delete
                                                            </a>
                                                        </td>
                                                    </tr></tbody></table><div class="row"><div class="col-md-12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div></div><div class="col-md-12 center-block"><div class="dataTables_paginate paging_bootstrap pagination"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->

                <!-- END QUICK SIDEBAR -->

                <!-- END CONTAINER -->
                <!-- BEGIN FOOTER -->
                <div class="page-footer">

                    <div class="scroll-to-top">
                        <i class="icon-arrow-up"></i>
                    </div>
                </div>
                <!-- END FOOTER -->
                <!--[if lt IE 9]>
        <script src="/assets/global/plugins/respond.min.js"></script>
        <script src="/assets/global/plugins/excanvas.min.js"></script> 
        <![endif]-->
                <!-- BEGIN CORE PLUGINS -->
                <script async="" src="//www.google-analytics.com/analytics.js"></script><script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
                <!-- END CORE PLUGINS -->
                <!-- BEGIN PAGE LEVEL PLUGINS -->
                <script src="/assets/global/plugins/moment.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
                <script src="/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
                <!-- END PAGE LEVEL PLUGINS -->
                <!-- BEGIN THEME GLOBAL SCRIPTS -->
                <script src="/assets/global/scripts/app.min.js" type="text/javascript"></script>
                <!-- END THEME GLOBAL SCRIPTS -->
                <!-- BEGIN PAGE LEVEL SCRIPTS -->
                <script src="/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
                <!-- END PAGE LEVEL SCRIPTS -->
                <!-- BEGIN THEME LAYOUT SCRIPTS -->
                <script src="/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
                <script src="/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
                <script src="/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
                <!-- END THEME LAYOUT SCRIPTS -->
                <script>
                    (function (i, s, o, g, r, a, m) {
                        i['GoogleAnalyticsObject'] = r;
                        i[r] = i[r] || function () {
                            (i[r].q = i[r].q || []).push(arguments)
                        }, i[r].l = 1 * new Date();
                        a = s.createElement(o),
                                m = s.getElementsByTagName(o)[0];
                        a.async = 1;
                        a.src = g;
                        m.parentNode.insertBefore(a, m)
                    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                    ga('create', 'UA-37564768-1', 'keenthemes.com');
                    ga('send', 'pageview');
                </script>



                <div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="daterangepicker dropdown-menu opensleft"><div class="calendar left"><div class="daterangepicker_input"><input class="input-mini" type="text" name="daterangepicker_start" value=""><i class="fa fa-calendar"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o"></i></div></div><div class="calendar-table"></div></div><div class="calendar right"><div class="daterangepicker_input"><input class="input-mini" type="text" name="daterangepicker_end" value=""><i class="fa fa-calendar"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o"></i></div></div><div class="calendar-table"></div></div><div class="ranges"><ul><li>Today</li><li>Yesterday</li><li>Last 7 Days</li><li>Last 30 Days</li><li>This Month</li><li>Last Month</li><li>Custom</li></ul><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" disabled="disabled" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div></body></html>