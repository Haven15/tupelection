    <?php $IDslug = $election_data['Election_ID'];?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          Overview
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li class="active"><a href="#"><i class="fa fa-eye"></i> Overview</a></li>
        </ol>
      </section>

      <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>44</h3>

              <p>Voted</p>
            </div>
            <!--
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
          -->
            <a href="<?php echo base_url('election/voters/'.$IDslug)?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Voters Registered</p>
            </div>
            <!--
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          -->
            <a href="<?php echo base_url('election/addvoter/'.$IDslug)?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>40</h3>

              <p>Candidates</p>
            </div>
            <!--
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
          -->
            <a href="<?php echo base_url('election/ballot/'.$IDslug)?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

         <div class="control-sidebar-bg"></div>
      </div>
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-8 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="pull-left header"><i class="fa fa-user"></i>Voter Chart</li>
            </ul>
            <div class="tab-content no-padding">
              <div class="box-body chart-responsive">
                <div class="chart" id="bar-chart" style="height: 300px;"></div>
              </div>
          <!-- /.box -->
            </div>
          </div>
          <!-- /.nav-tabs-custom -->
        </section>
      </div>

  </div>
  <!-- ./wrapper -->

<script>
  $(function () {
    //BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {y:  'CAFA', a: 100, b: 90},
        {y: 'COE', a: 75, b: 65},
        {y: 'CIE', a: 50, b: 40},
        {y: 'CIT', a: 75, b: 65},
        {y: 'CLA', a: 50, b: 40},
        {y: 'COS', a: 75, b: 65},
      ],
      barColors: ['#bd2031', '#222'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Voters', 'Voted'],
      hideHover: 'auto'
    });
  });
</script>
