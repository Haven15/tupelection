
<?php 	echo form_open('login/validate_credentials');?>

	<div class="container" >
	<div class="box" style="margin-top:50px"  > 
	<p class="logo"><img src="http://localhost/tupelection/trunk/assets/img/tup-logo.png" style="width:100px; height:100px;"> </p>
	<h2 ><b>TUP</b> ONLINE ELECTION SYSTEM</h2> <br />
	<p></p>
	<h5>SIGN IN TO START VOTING!</h5>
	  <?php
		if($this->session->flashdata('error_msg')){
	  ?>
		  <div class="alert alert-danger alert-sm" style="font-size: 14px;">
			<i class="icon fa fa-exclamation"></i>
			<?php echo $this->session->flashdata('error_msg'); ?>
		  </div>
	  <?php
		}
	  ?>

		<div class="form-group">
			<input type="text" name="username" placeholder="VOTER ID" class="form-control">
		</div>
		<div class="form-group">
			<input type="password" name="password"  placeholder="PASSWORD" class="form-control" >
		</div>
		<div class="form-group">
			<button type="submit" name="insert" value="Login" class="btn login center-block" >Login</button>
		</div>
	  </div>
	  </div>
