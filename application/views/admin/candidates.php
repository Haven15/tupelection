<?php $IDslug = $election_data['Election_ID']?>
<div class="content-wrapper">
  <div class="container">
    <section class="content-header">
    </section>
    <div class="col-md-8">
      <div class="box box-danger">
        <div class="box-body">

          <table class="table table-responsive">
            <th><?php if($positions){
              foreach ($positions as $position){
              echo $position['Position'];
            }}?></th>
            <th>
              <a href="" class="pull-right"><i class="fa fa-edit"></i> Edit</a>
              <!-- <button type="button" class="btn btn-default dropdown-toggle pull-right" data-toggle="dropdown">
                edit</button> -->
                <!-- <ul class="dropdown-menu">
                  <li><a class="btn btn-default" title="Delete All Voters"><i class="fa fa-edit"> Edit</i></a></li>
                </ul> -->
            </th>
            <?php
            if($candidates){
              foreach($candidates as $candidate){
            ?>
            <tr>
              <td><p class="logo"><img src="<?php echo base_url('assets/img/tup-logo.png')?>" style="width:50px; height:50px;"> <?php echo $candidate['Candidate'];?> <label class="label label-default"><?php echo $candidate['Party']?></label></p></td>
              <td><a href="" class="pull-right"><i class="fa fa-edit"></i> Edit</a></td>
            </tr>
            <?php
              }
            }
            ?>
          </table>
        </div>
        <div class="box-footer">
          <a href="<?php echo base_url('election/ballot/'.$IDslug)?>" class="btn btn-default">Cancel</a>
        </div>
      </div>
    </div>
  </div>
</div>
