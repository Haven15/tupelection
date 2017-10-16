<?php $IDslug = $election_data['Election_ID'];?>

<div class="content-wrapper">
  <div class="container">
    <div class="col-sm-11">
      <section class="content-header">
      <h1>
        Create Ballot
        <small>Add Questions</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('election/ballot/'.$IDslug);?>"><i class="fa fa-newspaper-o"></i> Ballot</a></li>
        <li class="active"><i class="fa fa-newspaper-o"></i> CreateBallot</li>
      </ol>
      </section>
      <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Ballot</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label for="title" style="font-size: 16px;">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Question/Position" name="title"></input>
              </div>
              <!-- <div class="form-group">
                <label for="description" style="font-size: 16px;">Party List/Description</label>
                <input type="text" class="form-control" id="description" placeholder="Party List/Description" name="description"></input>
              </div> -->
              <div class="form-group">
                <label style="font-size: 16px;">Candidates</label>
                <form name="add_name" id="add_name">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dynamic_field">
                      <tr>
                        <td><input type="text" name="name[]" placeholder="Enter Choice" class="form-control name_list" /></td>
                        <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>
                      </tr>
                    </table>
                  </div>
                 </form>
                </div>
              <blockquote>
                <p>Voters can select a minimum of <input type="text" class="minmax" style="width: 30px;" value="1"></input>
                  and maximum of <input type="text" style="width: 30px;" value="1"></input> option(s).</p>
              </blockquote>
            </div>
            <div class="box-footer">
              <a href="<?php echo base_url('election/ballot/'.$IDslug);?>" class="btn btn-default">Cancel</a>
              <button type="submit" class="btn btn-danger pull-right">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
     var i=1;
     $('#add').click(function(){
          i++;
          $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter Choice" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
     });
     $(document).on('click', '.btn_remove', function(){
          var button_id = $(this).attr("id");
          $('#row'+button_id+'').remove();
     });
     $('#submit').click(function(){
          $.ajax({
               url:"name.php",
               method:"POST",
               data:$('#add_name').serialize(),
               success:function(data)
               {
                    alert(data);
                    $('#add_name')[0].reset();
               }
          });
     });
});
</script>
