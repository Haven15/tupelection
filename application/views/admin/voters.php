<!-- Content Wrapper. Contains page content -->
<?php $IDslug = $election_data['Election_ID'];?>
<div class="content-wrapper">

  <?php
    if($this->session->flashdata('success_msg')){
  ?>
  <br />
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
  <br />
      <div class="alert alert-danger">
        <i class="icon fa fa-exclamation"></i>
        <?php echo $this->session->flashdata('error_msg'); ?>
      </div>
  <?php
    }
  ?>

<section class="content-header">
  <h1>
    Voters
    <small>Students</small>
  </h1>
  <ol class="breadcrumb">
    <!-- <li><a href="<?php //echo base_url('election/overview/'.$IDslug)?>"><i class="fa fa-eye"></i> Overview</a></li> -->
    <li class="active"><a href=""><i class="fa fa-user"></i> Voters</a></li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-danger">
        <div class="box-header">
          <h3 class="box-title">Voter Table</h3>
          <div class="pull-right">
            <a href="<?php echo base_url('election/addvoter/'.$IDslug)?>" class="btn btn-info">Add Voter <i class="fa fa-user-plus"></i></a>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action
                      <span class="fa fa-caret-down"></span></button>
                    <ul class="dropdown-menu">
                      <li><a class="btn btn-default" data-toggle="modal" data-target="#deleteAllVoters" data-placement="top" title="Delete All Voters"><i class="fa fa-trash"> Delete All Voters</i></a></li>
                    </ul>
          </div>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Student ID</th>
              <th>First Name</th>
              <th>Middle Initial</th>
              <th>Last Name</th>
              <th>College</th>
              <th>Course</th>
              <th>Email</th>
              <th>Voted?</th>
              <th>Actions</th>
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
                <td><?php echo $voter->Has_Voted; ?></td>
                <td>
                  <div class="btn-group-vertical">
                    <a href="<?php //echo base_url('election/edit/'.$voter->Voter_ID)?>" class="btn btn-primary" title="Edit Voter"><i class="fa fa-edit"></i></a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteVoter-<?php echo $voter->Vote_ID; ?>" data-placement="top" title="Remove"><i class="fa fa-trash"></i></button>
                  </div>
                    <div class="modal fade" id="deleteVoter-<?php echo $voter->Vote_ID; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Are you sure you want to remove Voter?</h4>
                          </div>
                          <form action="<?php echo base_url('election/deletePerVoter/'.$IDslug) ?>" method="post" class="form-horizontal">
                            <input type="hidden" class="form-control" id="ID-<?php echo $voter->Vote_ID; ?>" value="<?php echo $voter->Vote_ID; ?>" name="VoteID" >
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger" name="btnDelete">Remove Voter</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- End for Delete Voter Modal -->
                </td>
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
<div class="modal fade" id="deleteAllVoters" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Are you sure you want to <strong>DELETE</strong> all Voters? <br/>
        WARNING <i class="fa fa-exclamation"></i> This action can not be undone.</h4>
      </div>
      <form action="<?php echo base_url('election/deleteAllVoters/'.$IDslug) ?>" method="post" class="form-horizontal">
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="btnDelete">Delete All Voters</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

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
