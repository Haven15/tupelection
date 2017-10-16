<?php $IDslug = $election_data['Election_ID'];?>

<div class="content-wrapper">
  <div class="container">
    <div class="col-lg-11">
      <section class="content-header">
      <h1>
        Ballot
        <small>Questions </small>&nbsp;&nbsp;<a href="<?php echo base_url('election/createballot/'.$IDslug);?>" class="btn btn-success"><i class="fa fa-plus"></i> New Question</a>
      </h1>

      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-newspaper-o"></i> Ballot</li>
      </ol>
      </section>
      <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="box box-danger">
            <div class="box-header">
              <table class="table table-responsive">
                <th>President</th>
                <th>
                  <a href="" class="pull-right"><i class="fa fa-edit"></i> Edit</a>
                  <!-- <button type="button" class="btn btn-default dropdown-toggle pull-right" data-toggle="dropdown">
                    edit</button> -->
                    <!-- <ul class="dropdown-menu">
                      <li><a class="btn btn-default" title="Delete All Voters"><i class="fa fa-edit"> Edit</i></a></li>
                    </ul> -->
                </th>
                <tr>
                  <td><p class="logo"><img src="<?php echo base_url('assets/img/tup-logo.png')?>" style="width:50px; height:50px;"> Dublin, Queenie G. </p></td>
                  <td><a href="" class="pull-right"><i class="fa fa-edit"></i> Edit</a></td>
                </tr>
                <tr>
                  <td><p class="logo"><img src="<?php echo base_url('assets/img/tup-logo.png')?>" style="width:50px; height:50px;"> Pinto, Fritzi Ann J.</p></td>
                  <td><a href="" class="pull-right"><i class="fa fa-edit"></i> Edit</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="box box-danger">
            <div class="box-header">
              <table class="table table-responsive">
                <th>Vice President</th>
                <th>
                  <a href="" class="pull-right"><i class="fa fa-edit"></i> Edit</a>
                  <!-- <button type="button" class="btn btn-default dropdown-toggle pull-right" data-toggle="dropdown">
                    edit</button> -->
                    <!-- <ul class="dropdown-menu">
                      <li><a class="btn btn-default" title="Delete All Voters"><i class="fa fa-edit"> Edit</i></a></li>
                    </ul> -->
                </th>
                <tr>
                  <td><p class="logo"><img src="<?php echo base_url('assets/img/tup-logo.png')?>" style="width:50px; height:50px;"> Arroyo, Marlon Khely N.</p></td>
                  <td><a href="" class="pull-right"><i class="fa fa-edit"></i> Edit</a></td>
                </tr>
                <tr>
                  <td><p class="logo"><img src="<?php echo base_url('assets/img/tup-logo.png')?>" style="width:50px; height:50px;"> Melchor, Orlando J. jr </p></td>
                  <td><a href="" class="pull-right"><i class="fa fa-edit"></i> Edit</a></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
