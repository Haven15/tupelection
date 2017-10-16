<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TUP Online Election</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("dist/css/bootstrap.min.css")?>" />
    <!-- AdminLTE CSS -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("dist/css/AdminLTE.min.css")?>" />

    <!-- TUP CSS -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/tup-main.css")?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/tup-media.css")?>" />
    <style>
      .navbar .title{
        color: white;
        font-size: 18px;
        margin-top: 15px;
      }

    </style>
</head>
<body>
  <?php
   if(!$this->session->userdata('is_logged_in_voter') ){
      redirect('../login/index');
      }
  ?>
  <nav id="custom-bootstrap-menu" class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <center><p class="title">
                <img alt="TUP" src="<?php echo base_url('assets/img/tup-logo.png')?>" id="brand" />
              Technological University of the Philippines
            </p></center>
          </div>
          <div class="col-md-3">
            <p class="title pull-right">Hello, <?php echo $this->session->userdata('lastname');?>!&nbsp;&nbsp;</p>
          </div>
        </div>
  </nav>
