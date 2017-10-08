<div class="content-wrapper">
  <br />
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">New Election</h3>
          </div>
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
                </div><br />
                <!-- <div class="col-md-5">
                  <div class="form-group">
                    <label>Start Date*</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input id="startDate" type="text" class="form-control pull-right datepicker" name="startDate" required>
                    </div>
                  </div>
                  <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Start Time*</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                        <input data-format="hh:mm:ss" type="text" class="form-control timepicker" name="starttime" required></input>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="col-md-5 col-md-offset-1">
                  <div class="form-group">
                      <label>End Date*</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input id="endDate" type="text" class="form-control pull-right datepicker" name="endDate" required></input>
                      </div>
                  </div>
                  <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>End Time*</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                        <input type="text" class="form-control timepicker" name="endtime" required></input>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div><br />
              <a href="dashboard" class="btn btn-default" style="color: black;">Cancel</a>
              <button type="submit" class="btn btn-danger pull-right" onClick="Validate()">Create Election</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4"><br/><br/>
        <div class="well well-lg">
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
