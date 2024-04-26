<!DOCTYPE html>
<html>
  
<!-- Mirrored from webarch.revox.io/3.0/datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2023 19:18:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Webarch - Responsive Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN PLUGIN CSS -->
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/plugins/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="webarch/css/webarch.css" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
  </head>
  <!-- END HEAD -->
  <!-- BEGIN BODY -->
  <body class="">
    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse ">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="navbar-inner">
        <div class="header-seperation">
          <ul class="nav pull-left notifcation-center visible-xs visible-sm">
            <li class="dropdown">
              <a href="#main-menu" data-webarch="toggle-left-side">
                <i class="material-icons">menu</i>
              </a>
            </li>
          </ul>
          <!-- BEGIN LOGO -->
          <a href="index.html">
            <img src="assets/img/logo.png" class="logo" alt="" data-src="assets/img/logo.png" data-src-retina="assets/img/logo2x.png" width="106" height="21" />
          </a>
          <!-- END LOGO -->
          <ul class="nav pull-right notifcation-center">
            <li class="dropdown hidden-xs hidden-sm">
              <a href="index.html" class="dropdown-toggle active" data-toggle="">
                <i class="material-icons">home</i>
              </a>
            </li>
            <li class="dropdown hidden-xs hidden-sm">
              <a href="email.html" class="dropdown-toggle">
                <i class="material-icons">email</i><span class="badge bubble-only"></span>
              </a>
            </li>
            <li class="dropdown visible-xs visible-sm">
              <a href="#" data-webarch="toggle-right-side">
                <i class="material-icons">chat</i>
              </a>
            </li>
          </ul>
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav">
          <!-- BEGIN TOP NAVIGATION MENU -->
          <div class="pull-left">
            <ul class="nav quick-section">
              <li class="quicklinks">
                <a href="#" class="" id="layout-condensed-toggle">
                  <i class="material-icons">menu</i>
                </a>
              </li>
            </ul>
            <ul class="nav quick-section">
              <li class="quicklinks  m-r-10">
                <a href="#" class="">
                  <i class="material-icons">refresh</i>
                </a>
              </li>
              <li class="quicklinks">
                <a href="#" class="">
                  <i class="material-icons">apps</i>
                </a>
              </li>
              <li class="quicklinks"> <span class="h-seperate"></span></li>
              <li class="quicklinks">
                <a href="#" class="" id="my-task-list" data-placement="bottom" data-content='' data-toggle="dropdown" data-original-title="Notifications">
                  <i class="material-icons">notifications_none</i>
                  <span class="badge badge-important bubble-only"></span>
                </a>
              </li>
              <li class="m-r-10 input-prepend inside search-form no-boarder">
                <span class="add-on"> <i class="material-icons">search</i></span>
                <input name="" type="text" class="no-boarder " placeholder="Search Dashboard" style="width:250px;">
              </li>
            </ul>
          </div>
          <div id="notification-list" style="display:none">
            <div style="width:300px">
              <div class="notification-messages info">
                <div class="user-profile">
                  <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                </div>
                <div class="message-wrapper">
                  <div class="heading">
                    David Nester - Commented on your wall
                  </div>
                  <div class="description">
                    Meeting postponed to tomorrow
                  </div>
                  <div class="date pull-left">
                    A min ago
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="notification-messages danger">
                <div class="iconholder">
                  <i class="icon-warning-sign"></i>
                </div>
                <div class="message-wrapper">
                  <div class="heading">
                    Server load limited
                  </div>
                  <div class="description">
                    Database server has reached its daily capicity
                  </div>
                  <div class="date pull-left">
                    2 mins ago
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="notification-messages success">
                <div class="user-profile">
                  <img src="assets/img/profiles/h.jpg" alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
                </div>
                <div class="message-wrapper">
                  <div class="heading">
                    You haveve got 150 messages
                  </div>
                  <div class="description">
                    150 newly unread messages in your inbox
                  </div>
                  <div class="date pull-left">
                    An hour ago
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <!-- END TOP NAVIGATION MENU -->
          <!-- BEGIN CHAT TOGGLER -->
          <div class="pull-right">
            <div class="chat-toggler sm">
              <div class="profile-pic">
                <img src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="35" height="35" />
                <div class="availability-bubble online"></div>
              </div>
            </div>
            <ul class="nav quick-section ">
              <li class="quicklinks">
                <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                  <i class="material-icons">tune</i>
                </a>
                <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                  <li>
                    <a href="user-profile.html"> My Account</a>
                  </li>
                  <li>
                    <a href="calender.html">My Calendar</a>
                  </li>
                  <li>
                    <a href="email.html"> My Inbox&nbsp;&nbsp;
                  		<span class="badge badge-important animated bounceIn">2</span>
                  	</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="login.html"><i class="material-icons">power_settings_new</i>&nbsp;&nbsp;Log Out</a>
                  </li>
                </ul>
              </li>
              <li class="quicklinks"> <span class="h-seperate"></span></li>
              <li class="quicklinks">
                <a href="#" class="chat-menu-toggle" data-webarch="toggle-right-side"><i class="material-icons">chat</i><span class="badge badge-important hide">1</span>
				</a>
                <div class="simple-chat-popup chat-menu-toggle hide">
                  <div class="simple-chat-popup-arrow"></div>
                  <div class="simple-chat-popup-inner">
                    <div style="width:100px">
                      <div class="semi-bold">David Nester</div>
                      <div class="message">Hey you there </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!-- END CHAT TOGGLER -->
        </div>
        <!-- END TOP NAVIGATION MENU -->
      </div>
      <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar " id="main-menu">
        <!-- BEGIN MINI-PROFILE -->
        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
          <div class="user-info-wrapper sm">
            <div class="profile-wrapper sm">
              <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" />
              <div class="availability-bubble online"></div>
            </div>
            <div class="user-info sm">
              <div class="username">Fred <span class="semi-bold">Smith</span></div>
              <div class="status">Life goes on...</div>
            </div>
          </div>
          <!-- END MINI-PROFILE -->
          <!-- BEGIN SIDEBAR MENU -->
          <p class="menu-title sm">BROWSE <span class="pull-right"><a href="javascript:;"><i class="material-icons">refresh</i></a></span></p>
          <ul>
            <li class="start "> <a href="index.html"><i class="material-icons">home</i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="arrow "></span> </a>
              <ul class="sub-menu">
                <li> <a href="dashboard_v1.html"> Dashboard v1 </a> </li>
                <li class=""> <a href="index.html"> Dashboard v2 <span class=" label label-info pull-right m-r-30">NEW</span></a></li>
              </ul>
            </li>
            <li>
              <a href="widgets.html"> <i class="material-icons">panorama_horizontal</i> <span class="title">Widgets</span> <span class="label label-important bubble-only pull-right "></span></a>
            </li>
            <li>
              <a href="email.html"> <i class="material-icons">email</i> <span class="title">Email</span> <span class=" badge badge-disable pull-right ">203</span>
              </a>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">invert_colors</i> <span class="title">Themes</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="theme_coporate.html">Coporate </a> </li>
                <li> <a href="theme_simple.html">Simple</a> </li>
                <li> <a href="theme_elegant.html">Elegant</a> </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">airplay</i> <span class="title">Layouts</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="layout_options.html"> Layout Options </a> </li>
                <li> <a href="boxed_layout.html">Boxed Layout </a> </li>
                <li> <a href="boxed_layout_v2.html">Inner Boxed Layout </a> </li>
                <li> <a href="extended_layout.html">Extended Layout</a> </li>
                <li> <a href="RTL.html">RTL Layout</a> </li>
                <li> <a href="horizontal_menu.html">Horizontal Menu</a> </li>
                <li> <a href="horizontal_menu_boxed.html">Horizontal Menu & Boxed</a> </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">flip</i><span class="title"> UI Elements</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="typography.html"> Typography </a> </li>
                <li> <a href="messages_notifications.html"> Messages & Notifications </a> </li>
                <li> <a href="notifications.html"> Notifications </a> </li>
                <li> <a href="icons.html">Icons</a> </li>
                <li class=""> <a href="buttons.html">Buttons</a> </li>
                <li> <a href="tabs_accordian.html"> Tabs & Accordions </a> </li>
                <li> <a href="sliders.html">Sliders</a> </li>
                <li> <a href="group_list.html">Group list </a> </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">view_stream</i> <span class="title">Forms</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="form_elements.html">Form Elements </a> </li>
                <li> <a href="form_validations.html">Form Validations</a> </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">apps</i> <span class="title">Grids</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="grids_simple.html">Simple Grids</a> </li>
                <li> <a href="grids_draggable.html">Draggable Grids </a> </li>
              </ul>
            </li>
            <li class="open active">
              <a href="javascript:;"> <i class="material-icons">playlist_add_check</i> <span class="title">Tables</span> <span class=" open  arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="tables.html"> Basic Tables </a> </li>
                <li> <a href="datatables.html"> Data Tables </a> </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">location_on</i> <span class="title">Maps</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="google_map.html"> Google Maps </a> </li>
                <li> <a href="vector_map.html"> Vector Maps </a> </li>
              </ul>
            </li>
            <li>
              <a href="charts.html"> <i class="material-icons">timeline</i> <span class="title">Charts</span> </a>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">layers</i> <span class="title">Extra</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="user-profile.html"> User Profile </a> </li>
                <li> <a href="time_line.html"> Time line </a> </li>
                <li> <a href="support_ticket.html"> Support Ticket </a> </li>
                <li> <a href="gallery.html"> Gallery</a> </li>
                <li class=""><a href="calender.html"> Calendar</a> </li>
                <li> <a href="search_results.html"> Search Results </a> </li>
                <li> <a href="invoice.html"> Invoice </a> </li>
                <li> <a href="404.html"> 404 Page </a> </li>
                <li> <a href="500.html"> 500 Page </a> </li>
                <li> <a href="blank_template.html"> Blank Page </a> </li>
                <li> <a href="login.html"> Login </a> </li>
                <li> <a href="login_v2.html">Login v2</a> </li>
                <li> <a href="lockscreen.html"> Lockscreen </a> </li>
              </ul>
            </li>
            <li class="">
              <a href="javascript:;"> <i class="material-icons">more_horiz</i> <span class="title">Menu Levels</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="javascript:;"> Level 1 </a> </li>
                <li>
                  <a href="javascript:;"> <span class="title">Level 2</span> <span class=" arrow"></span> </a>
                  <ul class="sub-menu">
                    <li> <a href="javascript:;"> Sub Menu </a> </li>
                    <li> <a href="ujavascript:;"> Sub Menu </a> </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="hidden-lg hidden-md hidden-xs" id="more-widgets">
              <a href="javascript:;"> <i class="material-icons"></i></a>
              <ul class="sub-menu">
                <li class="side-bar-widgets">
                  <p class="menu-title sm">FOLDER <span class="pull-right"><a href="#" class="create-folder"><i class="material-icons">add</i></a></span></p>
                  <ul class="folders">
                    <li>
                      <a href="#">
                        <div class="status-icon green"></div>
                        My quick tasks </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="status-icon red"></div>
                        To do list </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="status-icon blue"></div>
                        Projects </a>
                    </li>
                    <li class="folder-input" style="display:none">
                      <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" id="folder-name">
                    </li>
                  </ul>
                  <p class="menu-title">PROJECTS </p>
                  <div class="status-widget">
                    <div class="status-widget-wrapper">
                      <div class="title">Freelancer<a href="#" class="remove-widget"><i class="material-icons">close</i></a></div>
                      <p>Redesign home page</p>
                    </div>
                  </div>
                  <div class="status-widget">
                    <div class="status-widget-wrapper">
                      <div class="title">envato<a href="#" class="remove-widget"><i class="material-icons">close</i></a></div>
                      <p>Statistical report</p>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
          <div class="side-bar-widgets">
            <p class="menu-title sm">FOLDER <span class="pull-right"><a href="#" class="create-folder"> <i class="material-icons">add</i></a></span></p>
            <ul class="folders">
              <li>
                <a href="#">
                  <div class="status-icon green"></div>
                  My quick tasks </a>
              </li>
              <li>
                <a href="#">
                  <div class="status-icon red"></div>
                  To do list </a>
              </li>
              <li>
                <a href="#">
                  <div class="status-icon blue"></div>
                  Projects </a>
              </li>
              <li class="folder-input" style="display:none">
                <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="">
              </li>
            </ul>
            <p class="menu-title">PROJECTS </p>
            <div class="status-widget">
              <div class="status-widget-wrapper">
                <div class="title">Freelancer<a href="#" class="remove-widget"><i class="material-icons">close</i></a></div>
                <p>Redesign home page</p>
              </div>
            </div>
            <div class="status-widget">
              <div class="status-widget-wrapper">
                <div class="title">envato<a href="#" class="remove-widget"><i class="material-icons">close</i></a></div>
                <p>Statistical report</p>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <!-- END SIDEBAR MENU -->
        </div>
      </div>
      <a href="#" class="scrollup">Scroll</a>
      <div class="footer-widget">
        <div class="progress transparent progress-small no-radius no-margin">
          <div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="79%" style="width: 79%;"></div>
        </div>
        <div class="pull-right">
          <div class="details-status"> <span class="animate-number" data-value="86" data-animation-duration="560">86</span>% </div>
          <a href="lockscreen.html"><i class="material-icons">power_settings_new</i></a></div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE CONTAINER-->
      <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
          <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button"></button>
            <h3>Widget Settings</h3>
          </div>
          <div class="modal-body"> Widget settings form goes here </div>
        </div>
        <div class="clearfix"></div>
        <div class="content">
          <ul class="breadcrumb">
            <li>
              <p>YOU ARE HERE</p>
            </li>
            <li><a href="#" class="active">Tables</a> </li>
          </ul>
          <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Advance - <span class="semi-bold">Tables</span></h3>
          </div>
          <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Table <span class="semi-bold">Styles</span></h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body ">
                  <table class="table table-hover table-condensed" id="example">
                    <thead>
                      <tr>
                        <th style="width:1%">
                          <div class="checkbox check-default" style="margin-right:auto;margin-left:auto;">
                            <input type="checkbox" value="1" id="checkbox1">
                            <label for="checkbox1"></label>
                          </div>
                        </th>
                        <th style="width:10%">Project Name</th>
                        <th style="width:22%" data-hide="phone,tablet">Description</th>
                        <th style="width:6%">Price</th>
                        <th style="width:10%" data-hide="phone,tablet">Progress</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="v-align-middle">
                          <div class="checkbox check-default">
                            <input type="checkbox" value="3" id="checkbox2">
                            <label for="checkbox2"></label>
                          </div>
                        </td>
                        <td class="v-align-middle">Early Bird</td>
                        <td class="v-align-middle"><span class="muted">Redesign project template</span></td>
                        <td><span class="muted">$4,500</span></td>
                        <td class="v-align-middle">
                          <div class="progress ">
                            <div data-percentage="80%" class="progress-bar progress-bar-success animate-progress-bar"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input type="checkbox" value="3" id="checkbox3">
                            <label for="checkbox3"></label>
                          </div>
                        </td>
                        <td>Angry Birds&nbsp;&nbsp;&nbsp;<span class="label label-important">ALERT!</span></td>
                        <td><span class="muted">Something goes here</span></td>
                        <td><span class="muted">$9,000</span></td>
                        <td>
                          <div class="progress">
                            <div data-percentage="70%" class="progress-bar progress-bar-danger animate-progress-bar"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input type="checkbox" value="3" id="checkbox4">
                            <label for="checkbox4"></label>
                          </div>
                        </td>
                        <td>PHP Login page</td>
                        <td class="v-align-middle"><span class="muted">A project in business and science is typically defined</span></td>
                        <td><span class="muted">$5,400</span></td>
                        <td>
                          <div class="progress progress-info">
                            <div data-percentage="60%" class="progress-bar progress-bar-primary animate-progress-bar"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input type="checkbox" value="3" id="checkbox5">
                            <label for="checkbox5"></label>
                          </div>
                        </td>
                        <td>Zombies</td>
                        <td class="v-align-middle"><span class="muted">frequently involving research or design</span></td>
                        <td><span class="muted">$6,000</span></td>
                        <td>
                          <div class="progress">
                            <div data-percentage="60%" class="progress-bar progress-bar-warning animate-progress-bar"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input type="checkbox" value="3" id="checkbox6">
                            <label for="checkbox6"></label>
                          </div>
                        </td>
                        <td>Zombies</td>
                        <td class="v-align-middle"><span class="muted">frequently involving research or design</span></td>
                        <td><span class="muted">$6,000</span></td>
                        <td>
                          <div class="progress ">
                            <div data-percentage="42%" class="progress-bar progress-bar-warning animate-progress-bar"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input type="checkbox" value="3" id="checkbox20">
                            <label for="checkbox20"></label>
                          </div>
                        </td>
                        <td>Zombies</td>
                        <td class="v-align-middle"><span class="muted">frequently involving research or design</span></td>
                        <td><span class="muted">$6,000</span></td>
                        <td>
                          <div class="progress progress-warning">
                            <div data-percentage="42%" class="progress-bar progress-bar-warning animate-progress-bar"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input type="checkbox" value="3" id="checkbox7">
                            <label for="checkbox7"></label>
                          </div>
                        </td>
                        <td>Zombies</td>
                        <td class="v-align-middle"><span class="muted">frequently involving research or design</span></td>
                        <td><span class="muted">$6,000</span></td>
                        <td>
                          <div class="progress ">
                            <div data-percentage="42%" class="progress-bar progress-bar-warning animate-progress-bar"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input type="checkbox" value="3" id="checkbox8">
                            <label for="checkbox8"></label>
                          </div>
                        </td>
                        <td>Zombies</td>
                        <td class="v-align-middle"><span class="muted">frequently involving research or design</span></td>
                        <td><span class="muted">$6,000</span></td>
                        <td>
                          <div class="progress ">
                            <div data-percentage="42%" class="progress-bar progress-bar-warning animate-progress-bar"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input type="checkbox" value="3" id="checkbox9">
                            <label for="checkbox9"></label>
                          </div>
                        </td>
                        <td>Zombies</td>
                        <td class="v-align-middle"><span class="muted">frequently involving research or design</span></td>
                        <td><span class="muted">$6,000</span></td>
                        <td>
                          <div class="progress ">
                            <div data-percentage="42%" class="progress-bar progress-bar-warning animate-progress-bar"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input type="checkbox" value="3" id="checkbox10">
                            <label for="checkbox10"></label>
                          </div>
                        </td>
                        <td>Zombies</td>
                        <td class="v-align-middle"><span class="muted">frequently involving research or design</span></td>
                        <td><span class="muted">$6,000</span></td>
                        <td>
                          <div class="progress ">
                            <div data-percentage="42%" class="progress-bar progress-bar-warning animate-progress-bar"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input type="checkbox" value="3" id="checkbox11">
                            <label for="checkbox11"></label>
                          </div>
                        </td>
                        <td>Zombies</td>
                        <td class="v-align-middle"><span class="muted">frequently involving research or design</span></td>
                        <td><span class="muted">$6,000</span></td>
                        <td>
                          <div class="progress ">
                            <div data-percentage="42%" class="progress-bar progress-bar-warning animate-progress-bar"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input type="checkbox" value="3" id="checkbox12">
                            <label for="checkbox12"></label>
                          </div>
                        </td>
                        <td>Zombies</td>
                        <td class="v-align-middle"><span class="muted">frequently involving research or design</span></td>
                        <td><span class="muted">$6,000</span></td>
                        <td>
                          <div class="progress ">
                            <div data-percentage="42%" class="progress-bar progress-bar-warning animate-progress-bar"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input type="checkbox" value="3" id="checkbox13">
                            <label for="checkbox13"></label>
                          </div>
                        </td>
                        <td>Zombies</td>
                        <td class="v-align-middle"><span class="muted">frequently involving research or design</span></td>
                        <td><span class="muted">$6,000</span></td>
                        <td>
                          <div class="progress ">
                            <div data-percentage="42%" class="progress-bar progress-bar-warning animate-progress-bar"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input type="checkbox" value="3" id="checkbox14">
                            <label for="checkbox14"></label>
                          </div>
                        </td>
                        <td>Zombies</td>
                        <td class="v-align-middle"><span class="muted">frequently involving research or design</span></td>
                        <td><span class="muted">$6,000</span></td>
                        <td>
                          <div class="progress ">
                            <div data-percentage="42%" class="progress-bar progress-bar-warning animate-progress-bar"></div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Table <span class="semi-bold">Styles</span></h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body ">
                  <table class="table table-striped" id="example2">
                    <thead>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="odd gradeX">
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center"> 4</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="even gradeC">
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td class="center">5</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="odd gradeA">
                        <td>Trident</td>
                        <td>Internet Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td class="center">5.5</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="even gradeA">
                        <td>Trident</td>
                        <td>Internet Explorer 6</td>
                        <td>Win 98+</td>
                        <td class="center">6</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="odd gradeA">
                        <td>Trident</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td class="center">7</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="even gradeA">
                        <td>Trident</td>
                        <td>AOL browser (AOL desktop)</td>
                        <td>Win XP</td>
                        <td class="center">6</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.7</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 2.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 3.0</td>
                        <td>Win 2k+ / OSX.3+</td>
                        <td class="center">1.9</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Netscape 7.2</td>
                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                        <td class="center">1.7</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Netscape Browser 8</td>
                        <td>Win 98SE+</td>
                        <td class="center">1.7</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Netscape Navigator 9</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.1</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.1</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.2</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.2</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.3</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.3</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.4</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.4</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.5</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.5</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.6</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.6</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.7</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td class="center">1.7</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.8</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Seamonkey 1.1</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Epiphany 2.20</td>
                        <td>Gnome</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 1.2</td>
                        <td>OSX.3</td>
                        <td class="center">125.5</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 1.3</td>
                        <td>OSX.3</td>
                        <td class="center">312.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 2.0</td>
                        <td>OSX.4+</td>
                        <td class="center">419.3</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 3.0</td>
                        <td>OSX.4+</td>
                        <td class="center">522.1</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Webkit</td>
                        <td>OmniWeb 5.5</td>
                        <td>OSX.4+</td>
                        <td class="center">420</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Webkit</td>
                        <td>iPod Touch / iPhone</td>
                        <td>iPod</td>
                        <td class="center">420.1</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Webkit</td>
                        <td>S60</td>
                        <td>S60</td>
                        <td class="center">413</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 7.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 7.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 8.0</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 8.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 9.0</td>
                        <td>Win 95+ / OSX.3+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 9.2</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 9.5</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera for Wii</td>
                        <td>Wii</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Nokia N800</td>
                        <td>N800</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Nintendo DS browser</td>
                        <td>Nintendo DS</td>
                        <td class="center">8.5</td>
                        <td class="center">C/A<sup>1</sup></td>
                      </tr>
                      <tr class="gradeC">
                        <td>KHTML</td>
                        <td>Konqureror 3.1</td>
                        <td>KDE 3.1</td>
                        <td class="center">3.1</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="gradeA">
                        <td>KHTML</td>
                        <td>Konqureror 3.3</td>
                        <td>KDE 3.3</td>
                        <td class="center">3.3</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>KHTML</td>
                        <td>Konqureror 3.5</td>
                        <td>KDE 3.5</td>
                        <td class="center">3.5</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeX">
                        <td>Tasman</td>
                        <td>Internet Explorer 4.5</td>
                        <td>Mac OS 8-9</td>
                        <td class="center">-</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="gradeC">
                        <td>Tasman</td>
                        <td>Internet Explorer 5.1</td>
                        <td>Mac OS 7.6-9</td>
                        <td class="center">1</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="gradeC">
                        <td>Tasman</td>
                        <td>Internet Explorer 5.2</td>
                        <td>Mac OS 8-X</td>
                        <td class="center">1</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Misc</td>
                        <td>NetFront 3.1</td>
                        <td>Embedded devices</td>
                        <td class="center">-</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Misc</td>
                        <td>NetFront 3.4</td>
                        <td>Embedded devices</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeX">
                        <td>Misc</td>
                        <td>Dillo 0.8</td>
                        <td>Embedded devices</td>
                        <td class="center">-</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="gradeX">
                        <td>Misc</td>
                        <td>Links</td>
                        <td>Text only</td>
                        <td class="center">-</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="gradeX">
                        <td>Misc</td>
                        <td>Lynx</td>
                        <td>Text only</td>
                        <td class="center">-</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="gradeC">
                        <td>Misc</td>
                        <td>IE Mobile</td>
                        <td>Windows Mobile 6</td>
                        <td class="center">-</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="gradeC">
                        <td>Misc</td>
                        <td>PSP browser</td>
                        <td>PSP</td>
                        <td class="center">-</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="gradeU">
                        <td>Other browsers</td>
                        <td>All others</td>
                        <td>-</td>
                        <td class="center">-</td>
                        <td class="center">U</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Advance <span class="semi-bold">Options</span></h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body ">
                  <table class="table" id="example3">
                    <thead>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="odd gradeX">
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center"> 4</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="even gradeC">
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td class="center">5</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="odd gradeA">
                        <td>Trident</td>
                        <td>Internet Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td class="center">5.5</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="even gradeA">
                        <td>Trident</td>
                        <td>Internet Explorer 6</td>
                        <td>Win 98+</td>
                        <td class="center">6</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="odd gradeA">
                        <td>Trident</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td class="center">7</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="even gradeA">
                        <td>Trident</td>
                        <td>AOL browser (AOL desktop)</td>
                        <td>Win XP</td>
                        <td class="center">6</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.7</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 2.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 3.0</td>
                        <td>Win 2k+ / OSX.3+</td>
                        <td class="center">1.9</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Netscape 7.2</td>
                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                        <td class="center">1.7</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Netscape Browser 8</td>
                        <td>Win 98SE+</td>
                        <td class="center">1.7</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Netscape Navigator 9</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.1</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.1</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.2</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.2</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.3</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.3</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.4</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.4</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.5</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.5</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.6</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1.6</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.7</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td class="center">1.7</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.8</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Seamonkey 1.1</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Epiphany 2.20</td>
                        <td>Gnome</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 1.2</td>
                        <td>OSX.3</td>
                        <td class="center">125.5</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 1.3</td>
                        <td>OSX.3</td>
                        <td class="center">312.8</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 2.0</td>
                        <td>OSX.4+</td>
                        <td class="center">419.3</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 3.0</td>
                        <td>OSX.4+</td>
                        <td class="center">522.1</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Webkit</td>
                        <td>OmniWeb 5.5</td>
                        <td>OSX.4+</td>
                        <td class="center">420</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Webkit</td>
                        <td>iPod Touch / iPhone</td>
                        <td>iPod</td>
                        <td class="center">420.1</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Webkit</td>
                        <td>S60</td>
                        <td>S60</td>
                        <td class="center">413</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 7.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 7.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 8.0</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 8.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 9.0</td>
                        <td>Win 95+ / OSX.3+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 9.2</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 9.5</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera for Wii</td>
                        <td>Wii</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Nokia N800</td>
                        <td>N800</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Presto</td>
                        <td>Nintendo DS browser</td>
                        <td>Nintendo DS</td>
                        <td class="center">8.5</td>
                        <td class="center">C/A<sup>1</sup></td>
                      </tr>
                      <tr class="gradeC">
                        <td>KHTML</td>
                        <td>Konqureror 3.1</td>
                        <td>KDE 3.1</td>
                        <td class="center">3.1</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="gradeA">
                        <td>KHTML</td>
                        <td>Konqureror 3.3</td>
                        <td>KDE 3.3</td>
                        <td class="center">3.3</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeA">
                        <td>KHTML</td>
                        <td>Konqureror 3.5</td>
                        <td>KDE 3.5</td>
                        <td class="center">3.5</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeX">
                        <td>Tasman</td>
                        <td>Internet Explorer 4.5</td>
                        <td>Mac OS 8-9</td>
                        <td class="center">-</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="gradeC">
                        <td>Tasman</td>
                        <td>Internet Explorer 5.1</td>
                        <td>Mac OS 7.6-9</td>
                        <td class="center">1</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="gradeC">
                        <td>Tasman</td>
                        <td>Internet Explorer 5.2</td>
                        <td>Mac OS 8-X</td>
                        <td class="center">1</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Misc</td>
                        <td>NetFront 3.1</td>
                        <td>Embedded devices</td>
                        <td class="center">-</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="gradeA">
                        <td>Misc</td>
                        <td>NetFront 3.4</td>
                        <td>Embedded devices</td>
                        <td class="center">-</td>
                        <td class="center">A</td>
                      </tr>
                      <tr class="gradeX">
                        <td>Misc</td>
                        <td>Dillo 0.8</td>
                        <td>Embedded devices</td>
                        <td class="center">-</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="gradeX">
                        <td>Misc</td>
                        <td>Links</td>
                        <td>Text only</td>
                        <td class="center">-</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="gradeX">
                        <td>Misc</td>
                        <td>Lynx</td>
                        <td>Text only</td>
                        <td class="center">-</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="gradeC">
                        <td>Misc</td>
                        <td>IE Mobile</td>
                        <td>Windows Mobile 6</td>
                        <td class="center">-</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="gradeC">
                        <td>Misc</td>
                        <td>PSP browser</td>
                        <td>PSP</td>
                        <td class="center">-</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="gradeU">
                        <td>Other browsers</td>
                        <td>All others</td>
                        <td>-</td>
                        <td class="center">-</td>
                        <td class="center">U</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="admin-bar" id="quick-access" style="display:">
          <div class="admin-bar-inner">
            <div class="form-horizontal">
              <select id="val1" class="select2-wrapper m-r-10">
                <option value="Gecko">Gecko</option>
                <option value="Webkit">Webkit</option>
                <option value="KHTML">KHTML</option>
                <option value="Tasman">Tasman</option>
              </select>
              <select id="val2" class="select2-wrapper">
                <option value="Internet Explorer 10">Internet Explorer 10</option>
                <option value="Firefox 4.0">Firefox 4.0</option>
                <option value="Chrome">Chrome</option>
              </select>
            </div>
            <button class="btn btn-primary btn-cons btn-add" type="button">Add Browser</button>
            <button class="btn btn-white btn-cons btn-cancel" type="button">Cancel</button>
          </div>
        </div>
        <div class="addNewRow"></div>
      </div>
      <!-- BEGIN CHAT -->
      <div class="chat-window-wrapper">
        <div id="main-chat-wrapper" class="inner-content">
          <div class="chat-window-wrapper scroller scrollbar-dynamic" id="chat-users">
            <div class="chat-header">
              <div class="pull-left">
                <input type="text" placeholder="search">
              </div>
              <div class="pull-right">
                <a href="#" class="">
                  <div class="iconset top-settings-dark "></div>
                </a>
              </div>
            </div>
            <div class="side-widget">
              <div class="side-widget-title">group chats</div>
              <div class="side-widget-content">
                <div id="groups-list">
                  <ul class="groups">
                    <li>
                      <a href="#">
                        <div class="status-icon green"></div>Office work</a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="status-icon green"></div>Personal vibes</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="side-widget fadeIn">
              <div class="side-widget-title">favourites</div>
              <div id="favourites-list">
                <div class="side-widget-content">
                  <div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                    <div class="user-profile">
                      <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                    </div>
                    <div class="user-details">
                      <div class="user-name">
                        Jane Smith
                      </div>
                      <div class="user-more">
                        Hello you there?
                      </div>
                    </div>
                    <div class="user-details-status-wrapper">
                      <span class="badge badge-important">3</span>
                    </div>
                    <div class="user-details-count-wrapper">
                      <div class="status-icon green"></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                    <div class="user-profile">
                      <img src="assets/img/profiles/c.jpg" alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
                    </div>
                    <div class="user-details">
                      <div class="user-name">
                        David Nester
                      </div>
                      <div class="user-more">
                        Busy, Do not disturb
                      </div>
                    </div>
                    <div class="user-details-status-wrapper">
                      <div class="clearfix"></div>
                    </div>
                    <div class="user-details-count-wrapper">
                      <div class="status-icon red"></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="side-widget">
              <div class="side-widget-title">more friends</div>
              <div class="side-widget-content" id="friends-list">
                <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                  <div class="user-profile">
                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="user-name">
                      Jane Smith
                    </div>
                    <div class="user-more">
                      Hello you there?
                    </div>
                  </div>
                  <div class="user-details-status-wrapper">
                  </div>
                  <div class="user-details-count-wrapper">
                    <div class="status-icon green"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                  <div class="user-profile">
                    <img src="assets/img/profiles/h.jpg" alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="user-name">
                      David Nester
                    </div>
                    <div class="user-more">
                      Busy, Do not disturb
                    </div>
                  </div>
                  <div class="user-details-status-wrapper">
                    <div class="clearfix"></div>
                  </div>
                  <div class="user-details-count-wrapper">
                    <div class="status-icon red"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                  <div class="user-profile">
                    <img src="assets/img/profiles/c.jpg" alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="user-name">
                      Jane Smith
                    </div>
                    <div class="user-more">
                      Hello you there?
                    </div>
                  </div>
                  <div class="user-details-status-wrapper">
                  </div>
                  <div class="user-details-count-wrapper">
                    <div class="status-icon green"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                  <div class="user-profile">
                    <img src="assets/img/profiles/h.jpg" alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="user-name">
                      David Nester
                    </div>
                    <div class="user-more">
                      Busy, Do not disturb
                    </div>
                  </div>
                  <div class="user-details-status-wrapper">
                    <div class="clearfix"></div>
                  </div>
                  <div class="user-details-count-wrapper">
                    <div class="status-icon red"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="chat-window-wrapper" id="messages-wrapper" style="display:none">
            <div class="chat-header">
              <div class="pull-left">
                <input type="text" placeholder="search">
              </div>
              <div class="pull-right">
                <a href="#" class="">
                  <div class="iconset top-settings-dark "></div>
                </a>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="chat-messages-header">
              <div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>
              <a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
            </div>
            <div class="chat-messages scrollbar-dynamic clearfix">
              <div class="inner-scroll-content clearfix">
                <div class="sent_time">Yesterday 11:25pm</div>
                <div class="user-details-wrapper ">
                  <div class="user-profile">
                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="bubble">
                      Hello, You there?
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="sent_time off">Yesterday 11:25pm</div>
                </div>
                <div class="user-details-wrapper ">
                  <div class="user-profile">
                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="bubble">
                      How was the meeting?
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="sent_time off">Yesterday 11:25pm</div>
                </div>
                <div class="user-details-wrapper ">
                  <div class="user-profile">
                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="bubble">
                      Let me know when you free
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="sent_time off">Yesterday 11:25pm</div>
                </div>
                <div class="sent_time ">Today 11:25pm</div>
                <div class="user-details-wrapper pull-right">
                  <div class="user-details">
                    <div class="bubble sender">
                      Let me know when you free
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="sent_time off">Sent On Tue, 2:45pm</div>
                </div>
              </div>
            </div>
            <div class="chat-input-wrapper" style="display:none">
              <textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <!-- END CHAT -->
    </div>
    <!-- END CONTAINER -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="assets/plugins/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-block-ui/jqueryblockui.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <!-- END CORE JS DEPENDECENCIES-->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="webarch/js/webarch.js" type="text/javascript"></script>
    <script src="assets/js/chat.js" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
    <script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>
    <!-- END PAGE LEVEL JS INIT -->
    <script src="assets/js/datatables.js" type="text/javascript"></script>
    <!-- END JAVASCRIPTS -->
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="../../www.gstatic.com/firebasejs/7.24.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="../../www.gstatic.com/firebasejs/7.24.0/firebase-analytics.js"></script>

    <script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    var firebaseConfig = {
        apiKey: "AIzaSyDaflsWYusjtsDkIyXPWuxpgYg9vYVelAM",
        authDomain: "webarch-38d59.firebaseapp.com",
        databaseURL: "https://webarch-38d59.firebaseio.com",
        projectId: "webarch-38d59",
        storageBucket: "webarch-38d59.appspot.com",
        messagingSenderId: "604319374989",
        appId: "1:604319374989:web:bb8e838658a5405d03ccc4",
        measurementId: "G-1P9DBV3T3N"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
    </script>
  </body>

<!-- Mirrored from webarch.revox.io/3.0/datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2023 19:18:57 GMT -->
</html>