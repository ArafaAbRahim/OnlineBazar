<!DOCTYPE html>
<html lang="en">

<head>

  <!-- start: Meta -->
  <meta charset="utf-8">
  <title>Online Bazar Dashboard</title>
  <meta name="description" content="Bootstrap Metro Dashboard">
  <meta name="author" content="Dennis Ji">
  <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <!-- end: Meta -->

  <!-- start: Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- end: Mobile Specific -->

  <!-- start: CSS -->
  <link id="bootstrap-style" href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
  <link id="base-style" href="{{asset('admin/css/style.css')}}" rel="stylesheet">
  <link id="base-style-responsive" href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
  <!-- end: CSS -->


  <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="{{asset('admin/css/ie.css')}}" rel="stylesheet">
	<![endif]-->

  <!--[if IE 9]>
		<link id="ie9style" href="{{asset('admin/css/ie9.css')}}" rel="stylesheet">
	<![endif]-->

  <!-- start: Favicon -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <!-- end: Favicon -->




</head>

<body>
  <!-- start: Header -->
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="index.html"><span>EBazar</span></a>

        <!-- start: Header Menu -->
        <div class="nav-no-collapse header-nav">
          <ul class="nav pull-right">
            <li class="dropdown hidden-phone">
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="halflings-icon white warning-sign"></i>
              </a>
              <ul class="dropdown-menu notifications">
                <li class="dropdown-menu-title">
                  <span>You have 11 notifications</span>
                  <a href="#refresh"><i class="icon-repeat"></i></a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon blue"><i class="icon-user"></i></span>
                    <span class="message">New user registration</span>
                    <span class="time">1 min</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                    <span class="message">New comment</span>
                    <span class="time">7 min</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                    <span class="message">New comment</span>
                    <span class="time">8 min</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                    <span class="message">New comment</span>
                    <span class="time">16 min</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon blue"><i class="icon-user"></i></span>
                    <span class="message">New user registration</span>
                    <span class="time">36 min</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon yellow"><i class="icon-shopping-cart"></i></span>
                    <span class="message">2 items sold</span>
                    <span class="time">1 hour</span>
                  </a>
                </li>
                <li class="warning">
                  <a href="#">
                    <span class="icon red"><i class="icon-user"></i></span>
                    <span class="message">User deleted account</span>
                    <span class="time">2 hour</span>
                  </a>
                </li>
                <li class="warning">
                  <a href="#">
                    <span class="icon red"><i class="icon-shopping-cart"></i></span>
                    <span class="message">New comment</span>
                    <span class="time">6 hour</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                    <span class="message">New comment</span>
                    <span class="time">yesterday</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon blue"><i class="icon-user"></i></span>
                    <span class="message">New user registration</span>
                    <span class="time">yesterday</span>
                  </a>
                </li>
                <li class="dropdown-menu-sub-footer">
                  <a>View all notifications</a>
                </li>
              </ul>
            </li>
    
            <!-- start: Message Dropdown -->
            <li class="dropdown hidden-phone">
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="halflings-icon white envelope"></i>
              </a>
              <ul class="dropdown-menu messages">
                <li class="dropdown-menu-title">
                  <span>You have 9 messages</span>
                  <a href="#refresh"><i class="icon-repeat"></i></a>
                </li>
                <li>
                  <a href="#">
                    <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                    <span class="header">
                      <span class="from">
                        Dennis Ji
                      </span>
                      <span class="time">
                        6 min
                      </span>
                    </span>
                    <span class="message">
                      Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                    <span class="header">
                      <span class="from">
                        Dennis Ji
                      </span>
                      <span class="time">
                        56 min
                      </span>
                    </span>
                    <span class="message">
                      Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                    <span class="header">
                      <span class="from">
                        Dennis Ji
                      </span>
                      <span class="time">
                        3 hours
                      </span>
                    </span>
                    <span class="message">
                      Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                    <span class="header">
                      <span class="from">
                        Dennis Ji
                      </span>
                      <span class="time">
                        yesterday
                      </span>
                    </span>
                    <span class="message">
                      Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                    <span class="header">
                      <span class="from">
                        Dennis Ji
                      </span>
                      <span class="time">
                        Jul 25, 2012
                      </span>
                    </span>
                    <span class="message">
                      Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                    </span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-menu-sub-footer">View all messages</a>
                </li>
              </ul>
            </li>
            <!-- end: Message Dropdown -->

            <!-- start: User Dropdown -->
            <li class="dropdown">
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="halflings-icon white user"></i> {{Session::get('name')}}
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li class="dropdown-menu-title">
                  <span>Account Settings</span>
                </li>
                <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                <li><a href="{{url('/logout')}}"><i class="halflings-icon off"></i> Logout</a></li>
              </ul>
            </li>
            <!-- end: User Dropdown -->
          </ul>
        </div>
        <!-- end: Header Menu -->

      </div>
    </div>
  </div>
  <!-- start: Header -->

  <div class="container-fluid-full">
    <div class="row-fluid">

      <!-- start: Main Menu -->
      <div id="sidebar-left" class="span2">
        <div class="nav-collapse sidebar-nav">
          <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
            <li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
            <li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
            <li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
            <li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>
            <li>
              <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown </a>
              <ul>
                <li><a class="submenu" href="{{url('/categories/create')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Category</span></a></li>
                <li><a class="submenu" href="{{url('/categories')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Category List</span></a></li>
                
              </ul>
            </li>
            <li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
            <li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
            <li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
            <li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>

          </ul>
        </div>
      </div>
      <!-- end: Main Menu -->

      <noscript>
        <div class="alert alert-block span10">
          <h4 class="alert-heading">Warning!</h4>
          <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
        </div>
      </noscript>

      <!-- start: Content -->
      @yield('content')
      <!--/.fluid-container-->

      <!-- end: Content -->
    </div>
    <!--/#content.span10-->
  </div>
  <!--/fluid-row-->

  <div class="modal hide fade" id="myModal">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">×</button>
      <h3>Settings</h3>
    </div>
    <div class="modal-body">
      <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn" data-dismiss="modal">Close</a>
      <a href="#" class="btn btn-primary">Save changes</a>
    </div>
  </div>

  <div class="clearfix"></div>

  <footer>

    <p>
      <span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>

    </p>

  </footer>

  <!-- start: JavaScript-->

  <script src="{{ asset('admin/js/jquery-1.9.1.min.js') }}"></script>
  <script src="{{ asset('admin/js/jquery-migrate-1.0.0.min.js') }}"></script>

  <script src="{{ asset('admin/js/jquery-ui-1.10.0.custom.min.js') }}"></script>

  <script src="{{ asset('admin/js/jquery.ui.touch-punch.js') }}"></script>

  <script src="{{ asset('admin/js/modernizr.js') }}"></script>

  <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('admin/js/jquery.cookie.js') }}"></script>

  <script src="{{ asset('admin/js/fullcalendar.min.js') }}"></script>

  <script src="{{ asset('admin/js/jquery.dataTables.min.js') }}"></script>

  <script src="{{ asset('admin/js/excanvas.js') }}"></script>
  <script src="{{ asset('admin/js/jquery.flot.js') }}"></script>
  <script src="{{ asset('admin/js/jquery.flot.pie.js') }}"></script>
  <script src="{{ asset('admin/js/jquery.flot.stack.js') }}"></script>
  <script src="{{ asset('admin/js/jquery.flot.resize.min.js') }}"></script>

  <script src="{{ asset('admin/js/jquery.chosen.min.js') }}"></script>

  <script src="{{ asset('admin/js/jquery.uniform.min.js') }}"></script>

  <script src="{{ asset('admin/js/jquery.cleditor.min.js') }}"></script>

  <script src="{{ asset('admin/js/jquery.noty.js') }}"></script>

  <script src="{{ asset('admin/js/jquery.elfinder.min.js') }}"></script>

  <script src="{{ asset('admin/js/jquery.raty.min.js') }}"></script>

  <script src="{{ asset('admin/js/jquery.iphone.toggle.js') }}"></script>

  <script src="{{ asset('admin/js/jquery.uploadify-3.1.min.js') }}"></script>

  <script src="{{ asset('admin/js/jquery.gritter.min.js') }}"></script>

  <script src="{{ asset('admin/js/jquery.imagesloaded.js') }}"></script>

  <script src="{{ asset('admin/js/jquery.masonry.min.js') }}"></script>

  <script src="{{ asset('admin/js/jquery.knob.modified.js') }}"></script>

  <script src="{{ asset('admin/js/jquery.sparkline.min.js') }}"></script>

  <script src="{{ asset('admin/js/counter.js') }}"></script>

  <script src="{{ asset('admin/js/retina.js') }}"></script>

  <script src="{{ asset('admin/js/custom.js') }}"></script>
  <!-- end: JavaScript-->

</body>

</html>