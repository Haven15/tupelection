
<div class="container">
  <?php $voterID = $voter['Voter_ID']?>
  <center><h2>List of elections</h2>
  <h4>Choose the election where you want to vote.<h4></center><br />
  <?php
    if($elections){
      foreach($elections as $election){
  ?>
  <?php if($election->Election_Status == 'Running'){?>
  <div class="col-md-6 col-md-offset-3">
    <a href="<?php echo base_url('vote/checkvoter/'.$voterID.'/'.$election->Election_ID); ?>">
    <div class="box box-danger box-solid">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo $election->Elec_Title; ?></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <p style="font-size: 16px; color: black;"><?php echo $election->Elec_Description; ?></p>
        <p style="font-size: 16px; color: black;"><?php echo $election->StartDate ?> - <?php echo $election->EndDate; ?></p>
        <p style="font-size: 16px;"><span class="label label-info"><?php echo $election->Election_Status ?></span></p>
      </div>
      <!-- /.box-body -->
    </div></a>
  </div>
  <?php
        }
      }
    }
  ?>
</div>
