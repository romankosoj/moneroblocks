@extends('master')

@section('content')

@include('stats.stats_nav')

<a name="blockchain-growth"></a>
<div id="wide-header" class="row">
  <div class="col-xs-12 col-lg-12 text-left">
    <h5><span class="page-header large"><i class="fa fa-line-chart fa-fw"></i>monthly blockchain growth</span></h5>
  </div>
  <!-- /.col-lg-22 --> 
</div> <!-- /.row -->

<div class="row">
  <div class="col-xs-12 col-lg-12">
    <div class="panel panel-default panel-table">
      <div class="panel-heading">
        <div class="row ">
          <div class="col-xs-1 col-sm-3 col-md-3">&nbsp;</div>
          <div class="col-xs-3 col-sm-2 col-md-2">month</div>
          <div class="col-xs-3 col-sm-2 col-md-2">monthly growth (MB)</div>
          <div class="col-xs-3 col-sm-2 col-md-2">cumulative size (MB)</div>
          <div class="col-xs-2 col-sm-3 col-md-3">&nbsp;</div>
        </div>
      </div>
      <div class="panel-body">
        <?php 
                $total = 0.0;
                foreach ($growth as $record) { //var_dump($record);
                  $total = $total + (float)$record->size;
        ?>
        <div class="row show-grid link">
          <div class="col-xs-1 col-sm-3 col-md-3">&nbsp;</div>
          <div class="col-xs-3 col-sm-2 col-md-2">{{$record->month}}</div>
          <div class="col-xs-3 col-sm-2 col-md-2">{{$record->size}}</div>
          <div class="col-xs-3 col-sm-2 col-md-2">{{$total}}</div>
          <div class="col-xs-2 col-sm-3 col-md-3">&nbsp;</div>
        </div>
        <?php } ?>
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
  </div>
  <!-- /.col-lg-4 -->
</div>
<!-- /.row -->

@endsection