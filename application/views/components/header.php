<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Heart of Jesus and Mary Parish</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url();?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'> -->
    <link href="<?php echo base_url();?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <!--  Custom CSS    -->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet"/>

    
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/aos/dist/aos.css" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar"  data-image="<?php echo base_url();?>assets/img/sidebar.jpeg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Menus
                </a>
            </div>

            <ul class="nav">
                <?php $cur_page = $this->uri->segment(1);?>
                <li class="<?php if($cur_page == '' || $cur_page == 'home'){ echo 'active'; }?>">
                    <a href="<?php echo base_url();?>">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="<?php if($cur_page == 'calendar'){ echo 'active'; }?>">
                    <a href="<?php echo base_url();?>calendar">
                        <i class="pe-7s-news-paper"></i>
                        <p>Calendar</p>
                    </a>
                </li>
                <li class="dropdown" id="custom-dropdown" class="<?php if($cur_page == 'events'){ echo 'active'; }?>">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-global"></i>
                        <b class="caret hidden-sm hidden-xs"></b>
                        <span class="notification hidden-sm hidden-xs" style="    font-size: 12px;font-weight: 600;">EVENTS</span>
                        <p class="hidden-lg hidden-md">
                            <label>Events</label>
                            <b class="caret"></b>
                        </p>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url();?>marriage">Marriage</a></li>
                    <li><a href="<?php echo base_url();?>baptist">Christening</a></li>
                    <li><a href="<?php echo base_url();?>burial">Burial</a></li>
                    <li><a href="<?php echo base_url();?>blessing">Blessing</a></li>
                    <!-- <li><a href="<?php echo base_url();?>special">Special Events</a></li> -->
                  </ul>
            </li>
                <li  class="<?php if($cur_page == 'priests'){ echo 'active'; }?>">
                    <a href="<?php echo base_url();?>priests">
                        <i class="pe-7s-user"></i>
                        <p>Priests</p>
                    </a>
                </li>
                <li  class="<?php if($cur_page == 'users'){ echo 'active'; }?>" style="display: <?php if($this->session->userdata('role') == 'admin') { echo 'none'; }?>">
                    <a href="<?php echo base_url();?>users">
                        <i class="pe-7s-user"></i>
                        <p>Users</p>
                    </a>
                </li>
               <!--  <li  class="<?php if($cur_page == 'records'){ echo 'active'; }?>">
                    <a href="<?php echo base_url();?>records">
                        <i class="pe-7s-note2"></i>
                        <p>Records</p>
                    </a>
                </li> -->
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Heart of Jesus and Mary Parish</a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('username');?> <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>users/profile">Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="<?php echo base_url();?>user/logout" onclick="return confirm('Logout?');">
                                    <p>Log out</p>
                                </a>
                            </li>
                          </ul>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">