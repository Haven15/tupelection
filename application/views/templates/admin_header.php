<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="TUP Online Election">
  <title>TUP Online Election</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="<?php echo base_url("dist/css/skins/_all-skins.min.css")?>" />
  <link type="text/css" rel="stylesheet" href="<?php echo base_url("dist/css/skins/skin-red.css")?>" />
  <link type="text/css" rel="stylesheet" href="<?php echo base_url("dist/css/bootstrap.min.css")?>" />
  <!-- Admin LTE CSS -->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url("dist/bower_components/font-awesome/css/font-awesome.min.css")?>" />
  <link type="text/css" rel="stylesheet" href="<?php echo base_url("dist/bower_components/Ionicons/css/ionicons.min.css")?>" />
  <link type="text/css" rel="stylesheet" href="<?php echo base_url("dist/plugins/iCheck/square/blue.css")?>" />
  <link type="text/css" rel="stylesheet" href="<?php echo base_url("dist/css/AdminLTE.min.css")?>" />
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/bower_components/select2/dist/css/select2.min.css') ?>">
  <link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/tup-main.css")?>" />
  <link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/tup-media.css")?>" />
  <!-- Data Tables -->
  <link rel="stylesheet" href="<?php echo base_url("dist/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")?>">

  <!-- jQuery 3 -->
  <script src="<?php echo base_url("dist/bower_components/jquery/dist/jquery.min.js")?>"></script>


</head>
<body class="hold-transition skin-red fixed sidebar-mini ">
  <?php
   if(!$this->session->userdata('is_logged_in') ){
      redirect('../login/index');
      }
  ?>
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>TUP</b>OE</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>TUP</b> Online Election</span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <?php $IDslug = $election_data['Election_ID'];?>
        <!-- <span class="label label-info"><?php //echo $election_data['Election_Status']; ?></span> -->
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div style="font-size: 17px; color: #ffffff; margin-top: 12px;">
        <p><?php echo $election_data['Elec_Title'];?>&nbsp;&nbsp;<span class="label label-info"><?php echo $election_data['Election_Status'];?></span>&nbsp;&nbsp;<?php echo $election_data['StartDate'];?>&nbsp;-&nbsp;
        <?php echo $election_data['EndDate'];?>&nbsp;&nbsp;</p>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <!--
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        -->
        <!-- search form -->
        <!-- <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form> -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li>
            <a href="<?php echo base_url('election/overview/'.$IDslug)?>">
              <i class="fa fa-eye"></i> <span>Overview</span>
              <!--
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            -->
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('election/voters/'.$IDslug); ?>">
              <i class="fa fa-user"></i>
              <span>Voters</span>
              <!--
              <span class="pull-right-container">
                <span class="label label-primary pull-right">4</span>
              </span>
            -->
            </a>
            <!--
            <ul class="treeview-menu">
              <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
              <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
              <li class="active"><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
              <li><a href="collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
            </ul>
          -->
          </li>
          <li>
            <a href="">
              <i class="fa fa-users"></i>
              <span>Candidates </span>
              <!--
              <span class="pull-right-container">
                <small class="label pull-right bg-green">new</small>
              </span>
            -->
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa  fa-star"></i>
              <span>Results</span>
              <!--
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            -->
            </a>
            <!--
            <ul class="treeview-menu">
              <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
              <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
              <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
              <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
            </ul>
          -->
          </li>
          <li>
            <a href="#">
              <i class="fa fa-gears (alias)"></i>
              <span>Settings</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-down pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> College</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Course</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Position</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Political Party</a></li>
            </ul>
          </li>
          <li class="header">ELECTION</li>
          <li>
            <a href="<?php echo base_url("election/dashboard")?>">
              <i class="fa fa-dashboard"></i><span>Dashboard</span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
