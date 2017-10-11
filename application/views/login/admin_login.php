 
	<?php 	echo form_open('login/validate_admin');?>
	
	<div class="container" >

	<div class="box" style="margin-top: 150px"  > 
	<div class="row">
	<div class="col form2"> 
		<p class="logo"><img src="http://localhost/codeigniter/assets/img/tup-logo.png" style="width:100px; height:100px;"> </p>
		
		<h2 style="color:black;"><b>TUP</b> ONLINE ELECTION SYSTEM</h2> <br /> 
		
	</div>
	<hr class="vl">
	<div class="col form">
		<h3 style="font-weight: bold;">Admin Login</h3>
		<br />
		<h5 style="color:black;">MANAGE ELECTION!</h5>
			
			<?php
				if($this->session->flashdata('error_msg')){
			?>
				<div class="alert alert-danger" style="text-align: center;">
				<i class="icon fa fa-exclamation"></i>
					<?php echo $this->session->flashdata('error_msg')?>
				</div>
			<?php 
				}?>
				
				
			<div class="form-group">
				<input type="text" name="username" placeholder="Username" class="form-control"  style="box-shadow: none;" required>
			</div>
			<div class="form-group">
				<input type="password" name="password"  placeholder="Password" class="form-control"  style="box-shadow: none;" required>
			</div>
			<br />
			<div class="form-group">
				<button type="submit" name="insert" value="Login" class="btn login center-block" >Login</button>
			</div>
			<div class="form-group">
				<center><a href="<?php echo base_url('login/index');?>">Login as voter</a></center>
			</div>
	  </div>
	  </div>
	  </div>