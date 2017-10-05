<!DOCTYPE html>
<html>
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>TUP Election</title>
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/css/skins/skin-red.css') ?>">
                <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/css/bootstrap.min.css') ?>">
                <link type="text/css" rel="stylesheet" href="<?php echo base_url("dist/bower_components/font-awesome/css/font-awesome.min.css")?>" />
                <link type="text/css" rel="stylesheet" href="<?php echo base_url("dist/bower_components/Ionicons/css/ionicons.min.css")?>" />
                <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.css') ?>">

                <!-- bootstrap rangedatepicker -->
                <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/bower_components/bootstrap-daterangepicker/daterangepicker.css') ?>">
                <!-- bootstrap datepicker -->
                <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">
                <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/bower_components/select2/dist/css/select2.min.css') ?>">
                <!-- Bootstrap time Picker -->
                <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/plugins/timepicker/bootstrap-timepicker.min.css') ?>">
                <!-- Bootstrap Date Time Picker -->
                <link type="text/css" rel="stylesheet" href="<?php echo base_url('dist/plugins/datetimepicker/bootstrap-datetimepicker.min.css') ?>">

                <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
                <!-- jQuery 3 -->
                <script src="<?php echo base_url("dist/bower_components/jquery/dist/jquery.min.js")?>"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.css">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>







                <style>
                h3{
                  display:inline;
                }
                .panel a{
                  color:white;
                }
                #eventForm .dateContainer .form-control-feedback {
                    top: 0;
                    right: -15px;
                }
                </style>

        </head>
        <body class="skin-red layout-top-nav">
          <header class="main-header">
            <nav class="navbar navbar-static-top">
              <div class="container">
                <div class="navbar-header">
                  <a href="<?php echo base_url("election/dashboard")?>" class="navbar-brand"><b>TUP</b> Election</a>
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                  </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url("election/dashboard")?>" title="Dashboard"><i class="fa fa-dashboard"></i> &nbsp;<span style="font-size: 16px;">Dashboard</span> <span class="sr-only"></span></a></li>
                    <li><a href="<?php echo base_url("election/voterspage")?>" title="Voters"><i class="fa fa-users"></i> &nbsp;<span style="font-size: 16px;">Voters</span></a></li>
                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <!-- /.navbar-collapse -->
              </div>
              <!-- /.container-fluid -->
            </nav>
          </header>
          <br />
                  <!-- <div class="navbar navbar-default">
                    <div class=container>
                      <h2><span class="glyphicon glyphicon-home"></span>&nbsp;TUP Election</h2>
                    </div>
                  </div> -->
