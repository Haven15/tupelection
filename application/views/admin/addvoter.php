<!-- Content Wrapper. Contains page content -->
<?php $IDslug = $election_data['Election_ID'];?>
<div class="content-wrapper">
  <div class="container">
    <div class="col-sm-11">
      <section class="content-header">
      <h1>
        Add Voter
        <small>New Voter</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('election/voters/'.$IDslug)?>"><i class="fa fa-user"></i> Voters</a></li>
        <li class="active"><i class="fa fa-user-plus"></i> Add Voter</li>
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
              <form action="<?php echo base_url('election/addVoterID/'.$IDslug) ?>" method="post" class="form-horizontal">
                <div class="box-body">
                  <form class="form-horizontal">
                  <div class="box-body">
                    <!-- <div class="form-group">
                      <label class="col-sm-2 control-label">by Voter ID</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Voter ID" name="vID" required></input>
                      </div>
                    </div> -->
                    <div class="form-group">
                      <label class="col-sm-2 control-label">by Voter ID</label>
                      <div class="col-sm-10">
                        <select class="form-control selectoption" name="VoterID">
                          <option selected="selected "disabled="disabled" >Select VoterID</option>
                          <?php
                          if($voters){
                            foreach($voters as $voter){
                          ?>
                          <option value="<?php echo $voter['Voter_ID']; ?>"><?php echo $voter['Voter_ID']; ?></option>
                          <?php
                            }
                          }?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-danger pull-right">Add Voter</button>
                  </div>
                  <!-- /.box-footer -->
                  </form>
                </div>
              </form>
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
            </div>
            <!-- /.box-danger -->
          </div>
          <!-- /.col-md-7 -->
          <div class="col-md-4">
            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Instructions</h3>
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
  })
</script>
