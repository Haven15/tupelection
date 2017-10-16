<!-- Content Wrapper. Contains page content -->
<?php $IDslug = $election_data['Election_ID'];?>
<div class="content-wrapper">
  <div class="container">
    <div class="col-sm-11">
      <section class="content-header">
      <h1>
        Manage Voter
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('election/voters/'.$IDslug)?>"><i class="fa fa-user"></i> Voters</a></li>
        <li class="active"><i class="fa fa-user-plus"></i> Manage Voter</li>
      </ol>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Register Voter</h3>
              </div>
              <!-- /.box-header -->
              <!-- <form action="<?php //echo base_url('election/addVoterID/'.$IDslug) ?>" method="post" class="form-horizontal">
                <div class="box-body">
                  <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">by Voter ID</label>
                      <div class="col-sm-10">
                        <select class="form-control selectoption" name="VoterID">
                          <option selected="selected "disabled="disabled" >Select VoterID</option>
                          <?php
                          //if($voters){
                            //foreach($voters as $voter){
                          ?>
                          <option value="<?php //echo $voter['Voter_ID']; ?>"><?php //echo $voter['Voter_ID']; ?></option>
                          <?php
                            //}
                          //}?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-danger pull-right">Add Voter</button>
                  </div>
                  </form>
                </div>
              </form> -->
              <form action="<?php echo base_url('election/addVoterCourse/'.$IDslug) ?>" method="post" class="form-horizontal">
                <div class="box-body">
                  <form class="form-horizontal">
                    <div class="box-body">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">by Course</label>
                        <div class="col-sm-10">
                          <select class="form-control selectoption" name="Course">
                            <option selected="selected "disabled="disabled" >Select Course</option>
                            <?php
                            if($courses){
                              foreach($courses as $course){
                            ?>
                            <option value="<?php echo $course['Course_Code']; ?>"><?php echo $course['CourseName']; ?></option>
                            <?php
                              }
                            }?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <a href="<?php echo base_url('election/voters/'.$IDslug); ?>" class="btn btn-default">Cancel</a>
                      <button type="submit" class="btn btn-danger pull-right">Add Voters</button>
                    </div>
                  <!-- /.box-footer -->
                  </form>
                </div>
              </form>
              <!-- /.box-body -->

              <div class="box-body">
                <h4>List of Allowed Voters</h4>
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Course</th>
                    <th>Course Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      if($eligiblevoters){
                        foreach($eligiblevoters as $evoter){
                    ?>
                    <tr>
                      <td><?php echo $evoter['Course_Code']; ?></td>
                      <td><?php echo $evoter['CourseName']; ?></td>
                      <td>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteVoter-<?php echo $evoter['Eligible_ID']; ?>" data-placement="top" title="Remove"><i class="fa fa-trash"></i></button>
                          <div class="modal fade" id="deleteVoter-<?php echo $evoter['Eligible_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Are you sure you want to remove Voters?</h4>
                                </div>
                                <form action="<?php echo base_url('election/deleteVoterCourse/'.$IDslug) ?>" method="post" class="form-horizontal">
                                  <input type="hidden" class="form-control" id="ID-<?php echo $evoter['Eligible_ID']; ?>" value="<?php echo $evoter['Eligible_ID']; ?>" name="EligibleID" >
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-danger" name="btnDelete">Remove Voter</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
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
            <!-- /.box-danger -->
          </div>
          <!-- /.col-md-7 -->
          <div class="col-md-4">
            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Instructions</h3>
              </div>
              <div class="box-body">
                <p></p>
              </div>
              <!-- /.box-header -->
            </div>
          <!-- /.box-info -->
          </div>
        </div>
      </section>

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
        <div class="control-sidebar-bg">
        </div>
    </div>
  </div>
  <!-- ./wrapper -->
</div>

<script>
$(function () {
  $('.selectoption').select2()
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
