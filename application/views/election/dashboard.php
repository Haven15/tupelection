<!-- Full Width Column -->
<div class="content-wrapper">
  <div class="container">
    <div class="row">
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
          <div class="alert alert-success">
            <?php echo $this->session->flashdata('error_msg'); ?>
          </div>
        <?php
          }
        ?>
    </div>
  </div>


  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Elections
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>
  <!-- Main content -->
  <section class="content">
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-dashboard"> Dashboard</i></h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-2">
              <a href="<?php echo base_url('election/new')?>" class="btn btn-block darkgreen-bg"><i class="fa fa-plus-square"></i> <span>Add Election</span></a>
            <br  />
            <strong>Filter by Status:</strong>
              <form action="<?php echo base_url('election/sort') ?>" method="POST">
                <div class="btn-group-vertical btn-block">
                  <a href="dashboard" type="button" class="btn btn-primary">All</button></a>
                  <input type="submit" class="btn btn-primary" name="building" value="Building" />
                  <input type="submit" class="btn btn-primary" name="scheduled" value="Scheduled"/>
                  <input type="submit" class="btn btn-primary" name="running" value="Running"/>
                  <input type="submit" class="btn btn-primary" name="completed" value="Completed"/>
                  <input type="submit" class="btn btn-primary" name="archived" value="Archived"/>
                </div>
              </form>
            </div>
            <?php
              if($elections){
                foreach($elections as $election){
            ?>
            <div class="pull-right col-md-5">
              <a href="<?php echo base_url('election/overview/'.$election->Election_ID); ?>">
              <div class="box box-danger box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo $election->Elec_Title; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <?php
                  $label="info";
                  if($election->Election_Status == "Archived"){
                    $label="danger";
                  }?>

                  <p style="font-size: 16px; color: black;"><?php echo $election->StartDate ?> - <?php echo $election->EndDate; ?></p>
                  <p style="font-size: 16px;"><span class="label label-<?php echo $label?>"><?php echo $election->Election_Status; ?></span></p>
                </div>
                <!-- /.box-body -->
              </div></a>
              <!-- /.box-solid -->
            </div>
            <!-- /.box-success -->
            <?php
              }
            }
            else{
              echo "
              <div class='col-md-10'>
                <blockquote>
                  <p><i>No records to display.</i></p>
                </blockquote>
              </div>";
            }
            ?>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.container -->
</div>
<!-- /.content-wrapper -->
