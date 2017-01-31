@extends('master')

@section('content')

@include('stats.stats_nav')

<a name="ring-size"></a>
<div id="wide-header" class="row">
  <div class="col-xs-12 col-lg-12 text-left">
    <h5><span class="page-header large"><i class="fa fa-users fa-fw"></i> mixins used in transactions (%) </span></h5>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
  <div class="col-xs-12 col-lg-12">
    <div class="panel panel-default panel-table">
      <div class="panel-heading">
        <div class="row ">
          <div class="col-xs-2 col-sm-1 col-md-2">&nbsp; </div>
          <div class="col-xs-2 col-sm-1 col-md-1">none</div>
          <div class="col-xs-2 col-sm-2 col-md-1">1 - 2</div>
          <div class="col-xs-2 col-sm-2 col-md-1">3 - 9</div>
          <div class="col-xs-2 col-sm-2 col-md-1">9 - 99 </div>
          <div class="col-xs-2 col-sm-1 col-md-1"> > 99 </div>
          <div class="col-xs-12 col-sm-1 col-md-1"> highest </div>
          <div class="col-xs-12 col-sm-1 col-md-1"> lowest </div>
          <div class="col-xs-12 col-sm-1 col-md-1"> total tx </div>
        </div>
      </div>
<?php 

?>
      <div class="panel-body">
        <div class="row show-grid top-row">
          <div class="col-xs-2 col-sm-1 col-md-2">last day</strong></div>
          <div class="col-xs-2 col-sm-1 col-md-1"><?php echo $ring_size[0]->group1 ?></div>
          <div class="col-xs-2 col-sm-2 col-md-1"><?php echo $ring_size[0]->group2 ?></div>
          <div class="col-xs-2 col-sm-2 col-md-1"><?php echo $ring_size[0]->group3 ?></div>
          <div class="col-xs-2 col-sm-2 col-md-1"><?php echo $ring_size[0]->group4 ?></div>
          <div class="col-xs-2 col-sm-1 col-md-1"><?php echo $ring_size[0]->group5 ?></div>
          <div class="col-xs-12 col-sm-1 col-md-1"><?php echo $ring_size[0]->highest ?></div>
          <div class="col-xs-12 col-sm-1 col-md-1"><?php echo $ring_size[0]->lowest ?></div>
          <div class="col-xs-12 col-sm-1 col-md-1"><?php echo $ring_size[0]->tx_count ?></div>
        </div>
        <div class="row show-grid top-row">
          <div class="col-xs-2 col-sm-1 col-md-2">last week</strong></div>
          <div class="col-xs-2 col-sm-1 col-md-1"><?php echo $ring_size[1]->group1 ?></div>
          <div class="col-xs-2 col-sm-2 col-md-1"><?php echo $ring_size[1]->group2 ?></div>
          <div class="col-xs-2 col-sm-2 col-md-1"><?php echo $ring_size[1]->group3 ?></div>
          <div class="col-xs-2 col-sm-2 col-md-1"><?php echo $ring_size[1]->group4 ?></div>
          <div class="col-xs-2 col-sm-1 col-md-1"><?php echo $ring_size[1]->group5 ?></div>
          <div class="col-xs-12 col-sm-1 col-md-1"><?php echo $ring_size[1]->highest ?></div>
          <div class="col-xs-12 col-sm-1 col-md-1"><?php echo $ring_size[1]->lowest ?></div>
          <div class="col-xs-12 col-sm-1 col-md-1"><?php echo $ring_size[1]->tx_count ?></div>
        </div>
        <div class="row show-grid top-row">
          <div class="col-xs-2 col-sm-1 col-md-2">last month</strong></div>
          <div class="col-xs-2 col-sm-1 col-md-1"><?php echo $ring_size[2]->group1 ?></div>
          <div class="col-xs-2 col-sm-2 col-md-1"><?php echo $ring_size[2]->group2 ?></div>
          <div class="col-xs-2 col-sm-2 col-md-1"><?php echo $ring_size[2]->group3 ?></div>
          <div class="col-xs-2 col-sm-2 col-md-1"><?php echo $ring_size[2]->group4 ?></div>
          <div class="col-xs-2 col-sm-1 col-md-1"><?php echo $ring_size[2]->group5 ?></div>
          <div class="col-xs-12 col-sm-1 col-md-1"><?php echo $ring_size[2]->highest ?></div>
          <div class="col-xs-12 col-sm-1 col-md-1"><?php echo $ring_size[2]->lowest ?></div>
          <div class="col-xs-12 col-sm-1 col-md-1"><?php echo $ring_size[2]->tx_count ?></div>
        </div>
        <div class="row show-grid top-row">
          <div class="col-xs-12 col-sm-1 col-md-2">last year</strong></div>
          <div class="col-xs-2 col-sm-1 col-md-1"><?php echo $ring_size[3]->group1 ?></div>
          <div class="col-xs-2 col-sm-2 col-md-1"><?php echo $ring_size[3]->group2 ?></div>
          <div class="col-xs-2 col-sm-2 col-md-1"><?php echo $ring_size[3]->group3 ?></div>
          <div class="col-xs-2 col-sm-2 col-md-1"><?php echo $ring_size[3]->group4 ?></div>
          <div class="col-xs-2 col-sm-1 col-md-1"><?php echo $ring_size[3]->group5 ?></div>
          <div class="col-xs-12 col-sm-1 col-md-1"><?php echo $ring_size[3]->highest ?></div>
          <div class="col-xs-12 col-sm-1 col-md-1"><?php echo $ring_size[3]->lowest ?></div>
          <div class="col-xs-12 col-sm-1 col-md-1"><?php echo $ring_size[3]->tx_count ?></div>
        </div>
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
  </div>
  <!-- /.col-lg-4 -->

</div>
<!-- /.row -->
@endsection