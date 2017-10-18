<?php $voterID = $voter['Voter_ID'];?>
<?php echo $electionID = $election['Election_ID']; ?>
<div class="container">
     <div class="row">
       <div class="col-md-6 col-md-offset-3">
         <div class="pad margin no-print">
          <div class="callout callout-danger" style="margin: -4% -4% 0!important; ">
            <h4><i class="fa fa-info"></i> Note:</h4>
            Please review your chosen representatives. You can vote again to change them or submit your votes.
          </div>
        </div>
        <!-- /.note -->
       </div>
     </div>

    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="box box-danger">
          <div class="box-body ">
            <dl>
              <dt class="position-design">President: </dt>
              <dd class="candidate-design">Pinto, Fritzi Ann</dd>
              <dt class="position-design">Vice President:</dt>
              <dd class="candidate-design">Dela Cruz, Robert John</dd>
              <dt class="position-design">Senators:</dt>
              <dd class="candidate-design">Eusebio, Monique</dd>
              <dd class="candidate-design">Tan, Loise Jiele</dd>
              <dd class="candidate-design">Moyo, Marinel</dd>
              <dd class="candidate-design">Baquiran, Jaine Nicole</dd>
              <dd class="candidate-design">Reyes, Keny Jean</dd>
              <dd class="candidate-design">Valin, Crisa Faye</dd>
              <dt class="position-design">Governor</dt>
              <dd class="candidate-design">Elbo, Khim </dd>
              <dt class="position-design">Vice Governor</dt>
              <dd class="candidate-design">Crownguard, Luxanna</dd>
            </dl>
          </div>
          <div class="box-footer">
            <a href="<?php echo base_url('vote/votingpage/'.$voterID.'/'.$electionID)?>" class="btn btn-default">Change Vote</a>
            <button class="btn btn-danger pull-right">Submit</button>
          </div>
        </div>
        <!-- /.box-danger -->
      </div>
    </div>

   </div>
