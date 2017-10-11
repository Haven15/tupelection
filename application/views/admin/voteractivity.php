<?php $IDslug = $election_data['Election_ID'];?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Voter Activity
    </h1>
    <ol class="breadcrumb">
      <!-- <li><a href="<?php //echo base_url('election/overview/'.$IDslug)?>"><i class="fa fa-eye"></i> Overview</a></li> -->
      <li><a href="<?php echo base_url('election/voters/'.$IDslug)?>"><i class="fa fa-user"></i> Voters</a></li>
      <li class="active"><a href=""><i class="fa fa-user"></i> Voter Activity</a></li>
    </ol>
  </section>
  <br />
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="box box-danger">
          <div class="box-header">
            <h3 class="box-title">Voter Activity</h3>
          </div>
          <div class="box-body">
            <table id="example3" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Position</th>
                <th>Candidate</th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <td>President</td>
                  <td>PINTO, FRITZI ANN J.</td>
                </tr>
                <tr>
                  <td>Vice President</td>
                  <td>ARROYO, MARLON KHELY N.</td>
                </tr>
                <tr>
                  <td>Senator</td>
                  <td>CAPISTRANO, ALMIRA A.</td>
                </tr>
                <tr>
                  <td>Senator</td>
                  <td>FERNANDO RONALD R.</td>
                </tr>
                <tr>
                  <td>Senator</td>
                  <td>MENDOZA, DIVINA GRACIA D.</td>
                </tr>
                <tr>
                  <td>Senator</td>
                  <td>PAMPOLA, SHAIRA E.</td>
                </tr>
                <tr>
                  <td>Senator</td>
                  <td>PAULE, ELLA MAE S.</td>
                </tr>
                <tr>
                  <td>Senator</td>
                  <td>RUIZ, KIM ANGELA M.</td>
                </tr>
                <tr>
                  <td>COS Governor</td>
                  <td>LICAYAN, RON KENNIEL L.</td>
                </tr>
                <tr>
                  <td>COS Vice Governor</td>
                  <td>LLAMAS, JEREMIAH ROBIN</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="box-footer">
            <a href="<?php echo base_url('election/voters/'.$IDslug)?>" class="btn btn-default">Cancel</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
