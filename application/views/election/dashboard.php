<div class="container">
  <div class="row">
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
  <div class="row">
    <div class="col-md-4">
      <h3>Your Elections&nbsp;</h3>
      <a href="<?php echo base_url('election/new')?>" class="btn btn-info" title="Create New Election"><span class="glyphicon glyphicon-plus"></span>&nbsp;Add Election</a>
    </div>
  </div>

</div>
<br />
<div class="container" >
  <div class="row">
    <div class="col-md-2">
      <p><b>Filter by Status</b></p>
      <!-- <ul>
        <li><a href="#">All</a></li>
        <li>Building</li>
        <li>Running</li>
        <li>Completed</li>
        <li>Archived</li>
      </ul> -->
      <form action="<?php echo base_url('election/sort') ?>" method="POST">
      <div class="btn-group-vertical" role="group" aria-label="..." style="width: 150px;">
        <a href="dashboard" type="button" class="btn btn-default">All</button></a>
        <input type="submit" class="btn btn-default" name="building" value="Building" />
        <input type="submit" class="btn btn-default" name="scheduled" value="Scheduled"/>
        <input type="submit" class="btn btn-default" name="running" value="Running"/>
        <input type="submit" class="btn btn-default" name="completed" value="Completed"/>
        <input type="submit" class="btn btn-default" name="archived" value="Archived"/>
      </div>
      </form>
    </div>
    <?php
      if($elections){
        foreach($elections as $election){
    ?>
    <div class="pull-right col-md-5">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title" title="Click to view more information about election.">

          <a href="<?php echo base_url('election/view/'.$election->Election_ID); ?>"><?php echo $election->Elec_Title; ?></a></h3>
        </div>
        <div class="panel-body">
          <?php
          $label="info";
          if($election->Election_Status == "Archived"){
            $label="danger";
          }?>

          <p style="font-size: 16px;"><?php echo $election->StartDate ?> - <?php echo $election->EndDate; ?></p>
          <p style="font-size: 16px;"><span class="label label-<?php echo $label?>"><?php echo $election->Election_Status; ?></span></p>
        </div>
      </div>
    </div>
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






<!-- <script>
$(document).ready(function(){
     $(document).on('click', '.column_sort', function(){
          var column_name = $(this).attr("id");
          var order = $(this).data("order");
          var arrow = '';

          //glyphicon glyphicon-arrow-up
          //glyphicon glyphicon-arrow-down
          if(order == 'desc')
          {
               arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-down"></span>';

          }
          else
          {
               arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-up"></span>';
          }
          $.ajax({
               url:"sort_election.php",
               method:"POST",
               data:{column_name:column_name, order:order},
               success:function(data)
               {
                    $('#election_data').html(data);
                    $('#'+column_name+'').append(arrow);
               }
          })
     });
});
</script> -->
