<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TUP Online Election</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/css/skins/skin-red.css') ?>"> -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/css/bootstrap.min.css') ?>">
    <!-- Admin LTE CSS -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("dist/bower_components/font-awesome/css/font-awesome.min.css")?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("dist/bower_components/Ionicons/css/ionicons.min.css")?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("dist/plugins/iCheck/square/blue.css")?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css') ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/bower_components/select2/dist/css/select2.min.css') ?>">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/css/skins/_all-skins.css') ?>">

    <!-- bootstrap rangedatepicker -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/bower_components/bootstrap-daterangepicker/daterangepicker.css') ?>">
    <!-- bootstrap datepicker -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/bower_components/select2/dist/css/select2.min.css') ?>">
    <!-- Bootstrap time Picker -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/plugins/timepicker/bootstrap-timepicker.min.css') ?>">
    <!-- Bootstrap Date Time Picker -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/plugins/datetimepicker/bootstrap-datetimepicker.min.css') ?>">
    <!-- Data Tables -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("dist/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")?>">
    <!-- TUP CSS -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/tup-main.css")?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/tup-media.css")?>" />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
    <!-- jQuery 3 -->
    <script src="<?php echo base_url("dist/bower_components/jquery/dist/jquery.min.js")?>"></script>


                <style>
                h3{
                  display:inline;
                }
                .panel a{
                  color:white;
                }
                .box.box-solid.box-danger>.box-header {
                  background: #bd2031;
                  background-color: #bd2031;
                }
                .darkgreen-bg {
                  background-color: #355C7D;
                  color: #ffffff;
                }
                .darkgreen-bg:hover {
                  color: #CCCCCC;
                }
                </style>

        </head>
        <body class="skin-red layout-top-nav">
          <?php
           if(!$this->session->userdata('is_logged_in') ){
              redirect('../login/index');
              }
          ?>
          <header class="main-header">
            <nav class="navbar navbar-static-top">
              <div class="container">
                <div class="navbar-header">
                  <a href="<?php echo base_url("election/dashboard")?>" class="navbar-brand"><b>TUP</b> Online Election</a>
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                  </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url("election/dashboard")?>" title="Dashboard"><i class="fa fa-dashboard"></i> &nbsp;<span style="font-size: 16px;">Dashboard</span> <span class="sr-only"></span></a></li>
                    <li><a href="<?php echo base_url("election/voterspage")?>" title="Voters"><i class="fa fa-users"></i> &nbsp;<span style="font-size: 16px;">Voters</span></a></li>
                  </ul>
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                        <img src="<?php echo base_url('assets/img/tup-logo.png')?>" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs" style="font-size: 16px;"><?php echo $this->session->userdata('username'); ?></span>
                      </a>
                      <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                        <li class="user-header">
                          <img src="<?php echo base_url('assets/img/tup-logo.png')?>" class="img-circle" alt="User Image">
                          <p style="font-size: 18px;">
                            <?php echo $this->session->userdata('username'); ?>
                          </p>
                        </li>
                        <li class="user-footer">
                          <div class="pull-left">
                            <a href="#" class="btn btn-default btn-flat">My Account</a>
                          </div>
                          <div class="pull-right">
                            <a href="<?php echo base_url('login/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- /.container-fluid -->
            </nav>
          </header>
                  <!-- <div class="navbar navbar-default">
                    <div class=container>
                      <h2><span class="glyphicon glyphicon-home"></span>&nbsp;TUP Election</h2>
                    </div>
                  </div> -->
