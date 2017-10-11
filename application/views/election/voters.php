<div class="content-wrapper">
  <br />
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
  </div>
  <div class="container">
    <section class="content-header">
      <h1>
        List of Registered Voters
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="voterspage"><i class="fa fa-user"></i> Voters</a></li>
      </ol>
    </section>
  </div>
  <section class="content">
    <div class="row">
      <div class="container">
        <div class="box box-danger">
          <div class="box-header">
            <h3 class="box-title">Voters</h3>
            <div class="pull-right">
              <!-- <a href="<?php //echo base_url("election/newvoter")?>" class="btn btn-info">Add Voter <i class="fa fa-user-plus"></i></a> -->
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Voter ID</th>
                <th>First Name</th>
                <th>Middle Initial</th>
                <th>Last Name</th>
                <th>College</th>
                <th>Course</th>
                <th>Date Registered</th>
                <!-- <th>Action</th> -->
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
                  <td><?php echo $voter->Date_Registered; ?></td>
                  <!-- <td> -->
                    <!-- <div class="btn-group">
                      <a href="<?php echo base_url('election/edit/'.$voter->Voter_ID)?>" class="btn btn-primary" title="Edit Voter"><span class="glyphicon glyphicon-edit"></span></a>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteVoter-<?php echo $voter->Voter_ID; ?>" data-placement="top" title="Remove"><span class="glyphicon glyphicon-trash"></button>
                    </div> -->
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateVoter-<?php echo $voter->Voter_ID; ?>" data-placement="top" title="Edit"><span class="glyphicon glyphicon-edit"></button> -->
                      <!-- Modal for Update Voter -->
                      <!-- <div class="modal fade" id="updateVoter-<?php echo $voter->Voter_ID; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                      </div> -->
                      <!-- End for Update Voter Modal -->

                      <!-- Modal for Delete Voter -->
                      <!-- <div class="modal fade" id="deleteVoter-<?php echo $voter->Voter_ID; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                      </div> -->
                      <!-- End for Delete Voter Modal -->
                  <!-- \</td> -->
                </tr>
              <?php
                  }
                }
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
  $(function () {
    $('.select2').select2()
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
