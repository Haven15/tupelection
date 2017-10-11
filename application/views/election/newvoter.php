<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container">
    <section class="content-header">
    <h1>
      Add Voter
      <small>New Voter</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="dashboard"><i class="fa fa-eye"></i> Dashboard</a></li>
      <li><a href="voterspage"><i class="fa fa-user"></i> Voters</a></li>
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
          <form action="<?php echo base_url('election/createVoter') ?>" method="post" class="form-horizontal">
          <div class="box-body">
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Student ID</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Student ID" name="vID" required></input>
                  </div>
                </div>

                <div class="form-group">
                  <label for="RandPass" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="RandPass" placeholder="Password" name="password" required>
                  </div>
                  <span class="form-group-btn">
                    <button type="button" class="btn btn-primary btn-flat" onClick="GenerateRandomPassword()" style=""><i class="fa fa-bolt"></i></button>
                  </span>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">First Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="First Name" name="fname" required></input>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Middle Initial</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Middle Initial" name="minitial" required></input>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Last Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Last Name" name="lname">
                  </div>
                  <!-- <div class="form-group" style="margin-top: 6%">
                    <label class="col-sm-2 control-label">College</label>
                    <div class="col-sm-10" style="padding-left: 2.9%">
                      <select class="form-control select2" style="width: 97.8%;" name="college">
                        <option selected="selected" disabled="disabled">Select College</option>
                        <option>College of Architecture and Fine Arts (CAFA)</option>
                        <option>College of Engineering (COE)</option>
                        <option>College of Industrial Education (CIE)</option>
                        <option>College of Industrial Technology (CIT)</option>
                        <option>College of Liberal Arts (CLA)</option>
                        <option>College of Science (COS)</option>
                      </select>
                    </div> -->
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Course</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="course" required>
                        <option selected="selected" disabled="disabled">Select Course</option>
                        <?php
                        if($courses){
                          foreach($courses as $course):
                        ?>
                        <option value="<?php echo $course['Course_Code']; ?>"><?php echo $course['CourseName']; ?></option>
                        <?php
                          endforeach;
                        }?>
                      </select>
                    </div>
                  </div>


              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="voterspage" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-danger pull-right">Add Voter</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </form>
          <!-- /.box-body -->
        </div>
        <!-- /.box-danger -->
      </div>
      <!-- /.col-md-6 -->
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
        <div class="control-sidebar-bg"></div>
      </div>
    </div>
  <!-- ./wrapper -->
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

  $(function () {
    $('.select2').select2()
  })
  </script>
