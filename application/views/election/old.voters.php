<div class="container">
  <?php
		if($this->session->flashdata('success_msg')){
	?>
		<div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
      <i class="icon fa fa-check"></i>
			<?php echo $this->session->flashdata('success_msg'); ?>
		</div>
	<?php
		}
	?>
	<?php
		if($this->session->flashdata('error_msg')){
	?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('error_msg'); ?>
		</div>
	<?php
		}
	?>
  <a href="<?php echo base_url("election/newvoter")?>" type="button" class="btn btn-primary" title="Add Voter" style="margin: 0px 0px 15px 0px";>
    <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Add Voter</a>

  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addVoter" title="Add Voter" style="margin: 0px 0px 15px 0px";>
    <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Add Voter</button> -->

    <div class="input-group input-group-sm">
      <input type="text" class="form-control" id="RandPass"></input>
      <span class="input-group-btn">
        <button type="button" class="btn btn-primary btn-flat" onClick="GenerateRandomPassword()"><i class="fa fa-bolt"></i></button>
      </span>
    </div>

    <?php
    function rand_string( $length ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "0123456789";
    $ranchars = substr(str_shuffle($chars),0,$length-2);
    $rannumbers = substr(str_shuffle($numbers),0,$length-6);
    $pass = $ranchars.$rannumbers;
    return $pass;
    //echo rand_string(8);
    }
    ?>

    <script type="text/javascript">
    function GenerateRandomPassword(){
      document.getElementById("RandPass").value = "<?php echo rand_string(8);?>";
    }
    </script>

    <!-- echo rand_string(8);
    ?> -->

  <!-- Modal for Add Voter -->
  <div class="modal fade" id="addVoter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Add Voter</h4>
        </div>
        <form action="<?php echo base_url('election/createVoter') ?>" method="post" class="form-horizontal">
        <div class="modal-body" style="margin: 15px;">
          <div class="form-group">
            <label for="vID">Voter ID*</label>
            <input type="text" class="form-control" id="vID" placeholder="Voter ID" name="vID">
          </div>
          <div class="form-group">
            <label for="fname">First Name*</label>
            <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
          </div>
          <div class="form-group">
            <label for="minitial">Middle Initial*</label>
            <input type="text" class="form-control" id="minitial" placeholder="Middle Initial" name="minitial">
          </div>
          <div class="form-group">
            <label for="lname">Last Name*</label>
            <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
          </div>
          <div class="form-group has-feedback">
            <label for="lname">Course</label>
            <select class="form-control select2">
              <option value="" selected="selected" disabled="disabled">SELECT YOUR COURSE</option>
              <option value="BSIT">BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY (BSIT)</option>
              <option value="BSIS">BACHELOR OF SCIENCE IN INFORMATION SYSTEM (BSIS)</option>
              <option value="BSCS">BACHELOR OF SCIENCE IN COMPUTER SCIENCE (BSCS)</option>
              <option value="BS-ES">BACHELOR OF SCIENCE IN ENVIRONMENTAL SCIENCE (BS-ES)</option>
              <option value="BAS-LT">BACHELOR IN APPLIED SCIENCE MAJOR IN LABORATOTY TECHNOLOGY (BAS-LT)</option>
            </select>
          </div>
          <div class="form-group">
            <label for="email">Email*</label>
            <input type="text" class="form-control" id="email" placeholder="Email" name="email">
          </div>
          <div class="form-group">
            <label for="password">Password*</label>
            <input type="text" class="form-control" id="password" placeholder="Password" name="password">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="btnSave">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End for Add Voter Modal -->

  <br />
  <table id="votertable" class="table table-bordered table-hover dataTable">
    <thead>
      <tr>
        <th class="sorting_asc" tabindex="0" aria-controls="votertable" rowspan="1" colspan="1" aria-label="Voter ID: activate to sort column descending" aria-sort="ascending">Voter ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>First Name</th>
        <th>Middle Initial</th>
        <th>Last Name</th>
        <th>College</th>
        <th>Course</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
      if($voters){
        foreach($voters as $voter){
    ?>
    <tr>
      <td><?php echo $voter->Voter_ID; ?></td>
      <td><?php echo $voter->FirstName; ?></td>
      <td><?php echo $voter->MiddleInitial; ?></td>
      <td><?php echo $voter->LastName; ?></td>
      <td><?php echo $voter->College_Code; ?></td>
      <td><?php echo $voter->Course_Code; ?></td>
      <td><?php echo $voter->Email; ?></td>
      <td><?php echo $voter->Password; ?></td>
      <td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateVoter-<?php echo $voter->Voter_ID; ?>" data-placement="top" title="Edit"><span class="glyphicon glyphicon-edit"></button>
          <!-- Modal for Update Voter -->
          <div class="modal fade" id="updateVoter-<?php echo $voter->Voter_ID; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Edit Voter</h4>
                </div>
                <form action="<?php echo base_url('election/updateVoter') ?>" method="post" class="form-horizontal">
                <div class="modal-body" style="margin: 15px;">
                  <input type="hidden" class="form-control" id="ID-<?php echo $voter->Voter_ID; ?>" value="<?php echo $voter->Voter_ID; ?>" name="VoterID" >
                  <div class="form-group">
                    <label for="vID">Voter ID*</label>
                    <input type="text" class="form-control" id="vID" value="<?php echo $voter->Voter_ID; ?>" name="vID">
                  </div>
                  <div class="form-group">
                    <label for="fname">First Name*</label>
                    <input type="text" class="form-control" id="fname" value="<?php echo $voter->FirstName; ?>" name="fname">
                  </div>
                  <div class="form-group">
                    <label for="minitial">Middle Initial*</label>
                    <input type="text" class="form-control" id="minitial" value="<?php echo $voter->MiddleInitial; ?>" name="minitial">
                  </div>
                  <div class="form-group">
                    <label for="lname">Last Name*</label>
                    <input type="text" class="form-control" id="lname" value="<?php echo $voter->LastName; ?>" name="lname">
                  </div>
                  <div class="form-group">
                    <label for="course">Course</label>
                    <input type="text" class="form-control" id="course" value="<?php echo $voter->Course_Code; ?>" name="course">
                  </div>
                  <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="text" class="form-control" id="email" value="<?php echo $voter->Email; ?>" name="email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password*</label>
                    <input type="text" class="form-control" id="password" value="<?php echo $voter->Password; ?>" name="password">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="btnSave">Save changes</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- End for Update Voter Modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteVoter-<?php echo $voter->Voter_ID; ?>" data-placement="top" title="Remove"><span class="glyphicon glyphicon-trash"></button>
          <!-- Modal for Delete Voter -->
          <div class="modal fade" id="deleteVoter-<?php echo $voter->Voter_ID; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Are you sure you want to remove Voter?</h4>
                </div>
                <form action="<?php echo base_url('election/deleteVoter') ?>" method="post" class="form-horizontal">
                  <input type="hidden" class="form-control" id="ID-<?php echo $voter->Voter_ID; ?>" value="<?php echo $voter->Voter_ID; ?>" name="VoterID" >
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger" name="btnDelete">Remove Voter</button>
                </div>
                </form>
            </div>
          </div>
          <!-- End for Delete Voter Modal -->
      </td>
    </tr>
    <?php //echo base_url('blog/edit/'.$blog->id); ?>
    <?php //echo base_url('blog/delete/'.$blog->id); ?>
  <?php
      }
    }
  ?>
  </tbody>
</div>

<!-- <script>
    $(function () {
      $('.select2').select2()
    });
</script> -->
