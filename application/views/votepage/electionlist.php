
<div class="container">
  <?php $voterID = '14-037-027'?>
  <center><h2>List of running elections</h2>
  <h4>Choose the election where you want to vote.<h4></center><br />
  <?php
    if($elections){
      foreach($elections as $election){
  ?>
  <?php if($election->Election_Status == 'Running'){?>
  <div class="col-md-6 col-md-offset-3">
    <div class="box box-danger box-solid">
      <div class="box-header with-border">
        <a href="<?php echo base_url('vote/checkvoter/'.$voterID.'/'.$election->Election_ID); ?>"><h3 class="box-title"><?php echo $election->Elec_Title; ?></h3></a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <p style="font-size: 16px;"><?php echo $election->Elec_Description; ?></p>
        <p style="font-size: 16px;"><?php echo $election->StartDate ?> - <?php echo $election->EndDate; ?></p>
        <!-- <p style="font-size: 16px;"><?php echo $election->Election_Status ?></p> -->
      </div>
      <!-- /.box-body -->
    </div>
  </div>
  <?php
        }
      }
    }
  ?>
</div>
