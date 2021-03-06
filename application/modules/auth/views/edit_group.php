<!DOCTYPE html>
<html lang="en">

<!--================================================================================
    Item Name: Materialize - Material Design Admin Template
    Version: 2.1
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
    ================================================================================ -->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">

        <title> Edit Group | TAPS NITW</title>


        <!-- Favicons-->
        <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
        <!-- Favicons-->
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/images/favicon/apple-touch-icon-152x152.png')?>">
        <!-- For iPhone -->
        <meta name="msapplication-TileColor" content="#00bcd4">
        <meta name="msapplication-TileImage" content="<?php echo base_url('assets/images/favicon/mstile-144x144.png')?>">
        <!-- For Windows Phone -->


        <!-- CORE CSS-->    
        <link href="<?php echo base_url('assets/materialize/css/materialize.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="<?php echo base_url('assets/materialize/css/style.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
        <!-- Custome CSS-->    
        <link href="<?php echo base_url('assets/materialize/css/custom-style.css')?>" type="text/css" rel="stylesheet" media="screen,projection">


        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link href="<?php echo base_url('assets/materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="<?php echo base_url('assets/materialize/js/plugins/jvectormap/jquery-jvectormap.css')?>" type="text/css?>" rel="stylesheet" media="screen,projection">
        <link href="<?php echo base_url('assets/materialize/js/plugins/chartist-js/chartist.min.css')?>" type="text/css" rel="stylesheet" media="screen,projection">


    </head>
    <body>

     <!-- START HEADER -->
     <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">                    

                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="layout01/index.html" class="brand-logo darken-1">TAPS</li>
                  </ul>
                  <div class="header-search-wrapper hide-on-med-and-down">
                    <i class="mdi-action-search"></i>
                    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                </div>
                <ul class="right hide-on-med-and-down">                        
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-navigation-apps"></i></a>
                    </li>                        
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                    </li>                        
                    <li><a href="layout01.html#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="<?php echo base_url('assets/materialize/images/avatar.jpg')?>" alt="" class="circle responsive-img valign profile-image">                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="layout01.html#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                    </li>
                                    <li><a href="layout01.html#"><i class="mdi-action-settings"></i> Settings</a>
                                    </li>
                                    <li><a href="layout01.html#"><i class="mdi-communication-live-help"></i> Help</a>
                                    </li>
                                    <?php if($this->ion_auth->in_group('admin')||$this->ion_auth->in_group('cod')){ ?>
                                    <li><a href="<?php echo base_url('/student')?>"><i class="mdi-communication-live-help"></i>Stud</a>
                                    </li>
                                    <li><a href="<?php echo base_url('/cod')?>"><i class="mdi-communication-live-help"></i>COD</a>
                                    </li>
                                    <?php if($this->ion_auth->in_group('admin')){ ?>
                                    <li><a href="<?php echo base_url('/admin')?>"><i class="mdi-communication-live-help"></i> Admin</a>
                                    </li>
                                    <?php } ?>
                                    <?php } ?>
                                    
                                    <li class="divider"></li>
                                    
                                    <li><a href="<?php echo base_url('auth/logout')?>"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="layout01.html#" data-activates="profile-dropdown">Sreerag Sreenath<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Administrator</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold active"><a href="layout01/index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="bold"><a href="layout01/app-email.html" class="waves-effect waves-cyan"><i class="mdi-communication-email"></i> Mailbox <span class="new badge">4</span></a>
                    </li>
                    <li class="bold"><a href="layout01/app-calendar.html" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Calender</a>
                    </li>
                    
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-invert-colors"></i> Users management</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="<?php echo base_url('auth/create_group')?>">Create Group</a>
                                        </li>
                                        <li><a href="<?php echo base_url('auth/edit_group')?>">Edit Group</a>
                                        </li>
                                        <li><a href="<?php echo base_url('auth/create_user')?>">Create User</a>
                                        </li>
                                        <li><a href="<?php echo base_url('auth/index')?>">Edit User</a>
                                        </li>
                                        <li><a href="<?php echo base_url('auth/deactivate')?>">Deactivate users</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </li>
                    <a href="layout01.html#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
                </aside>
                <!-- END LEFT SIDEBAR NAV-->
                <!-- START RIGHT SIDEBAR NAV-->
                <aside id="right-sidebar-nav">
                    <ul id="chat-out" class="side-nav rightside-navigation">
                        <li class="li-hover">
                            <a href="layout01.html#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
                            <div id="right-search" class="row">
                                <form class="col s12">
                                    <div class="input-field">
                                        <i class="mdi-action-search prefix"></i>
                                        <input id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Search</label>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="li-hover">
                            <ul class="chat-collapsible" data-collapsible="expandable">
                                <li>
                                    <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                                    <div class="collapsible-body recent-activity">
                                        <div class="recent-activity-list chat-out-list row">
                                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                                            </div>
                                            <div class="col s9 recent-activity-list-text">
                                                <a href="layout01.html#">just now</a>
                                                <p>Jim Doe Purchased new equipments for zonal office.</p>
                                            </div>
                                        </div>
                                        <div class="recent-activity-list chat-out-list row">
                                            <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                                            </div>
                                            <div class="col s9 recent-activity-list-text">
                                                <a href="layout01.html#">Yesterday</a>
                                                <p>Your Next flight for USA will be on 15th August 2015.</p>
                                            </div>
                                        </div>
                                        <div class="recent-activity-list chat-out-list row">
                                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                            </div>
                                            <div class="col s9 recent-activity-list-text">
                                                <a href="layout01.html#">5 Days Ago</a>
                                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                                            </div>
                                        </div>
                                        <div class="recent-activity-list chat-out-list row">
                                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                                            </div>
                                            <div class="col s9 recent-activity-list-text">
                                                <a href="layout01.html#">Last Week</a>
                                                <p>Jessy Jay open a new store at S.G Road.</p>
                                            </div>
                                        </div>
                                        <div class="recent-activity-list chat-out-list row">
                                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                            </div>
                                            <div class="col s9 recent-activity-list-text">
                                                <a href="layout01.html#">5 Days Ago</a>
                                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                                    <div class="collapsible-body sales-repoart">
                                        <div class="sales-repoart-list  chat-out-list row">
                                            <div class="col s8">Target Salse</div>
                                            <div class="col s4"><span id="sales-line-1"></span>
                                            </div>
                                        </div>
                                        <div class="sales-repoart-list chat-out-list row">
                                            <div class="col s8">Payment Due</div>
                                            <div class="col s4"><span id="sales-bar-1"></span>
                                            </div>
                                        </div>
                                        <div class="sales-repoart-list chat-out-list row">
                                            <div class="col s8">Total Delivery</div>
                                            <div class="col s4"><span id="sales-line-2"></span>
                                            </div>
                                        </div>
                                        <div class="sales-repoart-list chat-out-list row">
                                            <div class="col s8">Total Progress</div>
                                            <div class="col s4"><span id="sales-bar-2"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                                    <div class="collapsible-body favorite-associates">
                                        <div class="favorite-associate-list chat-out-list row">
                                            <div class="col s4"><img src="layout01/images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                            </div>
                                            <div class="col s8">
                                                <p>Eileen Sideways</p>
                                                <p class="place">Los Angeles, CA</p>
                                            </div>
                                        </div>
                                        <div class="favorite-associate-list chat-out-list row">
                                            <div class="col s4"><img src="layout01/images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                            </div>
                                            <div class="col s8">
                                                <p>Zaham Sindil</p>
                                                <p class="place">San Francisco, CA</p>
                                            </div>
                                        </div>
                                        <div class="favorite-associate-list chat-out-list row">
                                            <div class="col s4"><img src="layout01/images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                            </div>
                                            <div class="col s8">
                                                <p>Renov Leongal</p>
                                                <p class="place">Cebu City, Philippines</p>
                                            </div>
                                        </div>
                                        <div class="favorite-associate-list chat-out-list row">
                                            <div class="col s4"><img src="layout01/images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                            </div>
                                            <div class="col s8">
                                                <p>Weno Carasbong</p>
                                                <p>Tokyo, Japan</p>
                                            </div>
                                        </div>
                                        <div class="favorite-associate-list chat-out-list row">
                                            <div class="col s4"><img src="layout01/images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                            </div>
                                            <div class="col s8">
                                                <p>Nusja Nawancali</p>
                                                <p class="place">Bangkok, Thailand</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>
                <!-- LEFT RIGHT SIDEBAR NAV-->

            </div>
            <!-- END WRAPPER -->

        </div>
    <!-- END MAIN -->
<h1><?php echo lang('edit_group_heading');?></h1>
<p><?php echo lang('edit_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(current_url());?>

      <p>
            <?php echo lang('edit_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('edit_group_desc_label', 'description');?> <br />
            <?php echo form_input($group_description);?>
      </p>

      <p><?php echo form_submit('submit', lang('edit_group_submit_btn'));?></p>

<?php echo form_close();?>

<footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2015 <a class="grey-text text-lighten-4" href="http://wsdc.nitw.ac.in" target="_blank">WSDC</a> All rights reserved.
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://wsdc.nitw.ac.in">WSDC</a></span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/jquery-1.11.2.min.js')?>"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/materialize.js')?>"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>
    

    <!-- chartist -->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/plugins/chartist-js/chartist.min.js')?>"></script>   

    <!-- chartjs -->
    

    <!-- sparkline -->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/plugins/sparkline/jquery.sparkline.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/plugins/sparkline/sparkline-script.js')?>"></script>
    
    <!-- google map api -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>

    <!--jvectormap-->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/plugins/jvectormap/vectormap-script.js')?>"></script>    

    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/plugins.js')?>"></script>
    <!-- Toast Notification -->
   
</body>

</html>