<div class="content-wrapper">
  <br />
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="box box-danger">
          <div class="box-header">
            <h3 class="box-title">New Election</h3>
          </div>
          <div class="box-body">
            <div class="panel-body" style="margin: 15px;">
            <form action="<?php echo base_url('election/create') ?>" method="post" class="form-horizontal">
            <div class="form-group">
              <label for="electitle">Title*</label>
              <input type="text" class="form-control" id="electitle" placeholder="Title" name="electitle" required>
            </div>
            <div class="form-group">
              <label for="elecdescription">Description</label>
              <textarea type="text" class="form-control" rows="3" id="elecdescription" placeholder="Description" name=elecdescription></textarea>
            </div>
            <div class="row">
              <div class="col-md-12">
                <!-- Date and time range -->
                <div class="form-group">
                  <label>Start Date and End Date*</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="reservationtime" name="Date" required>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                </div>
              </div>

            </div>
          </div>
          <div class="box-footer">
            <a href="<?php echo base_url('election/dashboard')?>" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-danger pull-right">Create Election</button>
          </div>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Instruction</h3>
          </div>
          <div class="body">
            <div class="panel-body" style="margin: 15px;">
              <p><b>Title</b><br/>
              Give your election a unique title so that your voters know what they're voting for.</p><br />
              <p><b>Description</b><br />
              The description field allows you provide more detailed information about your election.</p><br />
              <p><b>Start Date</b><br />
              This is the date and time your election will start.</p><br />
              <p><b>End Date</b><br />
              This is the date and time your election will end. It must be after the "Start Date"</p><br />
            </div>
          </div>
    </div>
  </div>
</div>



<script type="text/javascript">

// function Validate(){
//   var from = $("#startDate").val();
//   var to = $("#endDate").val();
//
//   if(Date.parse(from) > Date.parse(to)){
//      alert("The start date must be before the end date.");
//   }
//   else{
//   }
// }
$(document).ready(function() {

    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 1,
      timePicker24Hour: true,
      drops: "up",
      locale: {
        format: 'YYYY-MM-DD HH:mm'
      }
      });
    //Date picker
    // $('.datepicker').datepicker({
    //   autoclose: true,
    //   todayHighlight: true,
    //   format: 'yyyy/mm/dd'
    // });
    // //Timepicker
    // $('.timepicker').timepicker({
    //   showInputs: false,
    //   'timeFormat': 'HH:mm'
    // });
    // $('#datetimepicker1').datetimepicker({
    //   language: 'en'
    // });
});
</script>
