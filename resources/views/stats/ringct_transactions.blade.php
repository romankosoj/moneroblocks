@extends('master')

@section('content')

@include('stats.stats_nav')

<a name="ring-ct transactions"></a>
<div id="wide-header" class="row">
  <div class="col-xs-12 col-lg-12 text-left">
    <h5><span class="page-header large"><i class="fa fa-envelope"></i>&nbsp;ringCT transactions (excluding coinbase)</span></h5>
  </div>
  <!-- /.col-lg-22 --> 
</div> <!-- /.row -->

<div class="row">
  <div class="col-xs-12 col-md-6">
    <div class="panel panel-default panel-table">
      <div class="panel-heading">
        <div class="row ">
          <div class="col-xs-4 col-sm-3 col-md-4">date</div>
          <div class="col-xs-2 col-sm-2 col-md-2">non ringct</div>
          <div class="col-xs-2 col-sm-2 col-md-2">ringct</div>
          <div class="col-xs-2 col-sm-2 col-md-2">ratio</div>
          <div class="col-xs-2 col-sm-3 col-md-2">&nbsp;</div>
        </div>
      </div>
      <div class="panel-body">
        <?php 
                foreach ($ringct[0] as $record) { //var_dump($record);
        ?>
        <div class="row show-grid link">
          <div class="col-xs-4 col-sm-3 col-md-4">{{$record->data}}&nbsp;{{ $record->hora }}:00</div>
          <div class="col-xs-2 col-sm-2 col-md-2">{{$record->txv1}}</div>
          <div class="col-xs-2 col-sm-2 col-md-2">{{$record->txv2}}</div>
          <div class="col-xs-2 col-sm-2 col-md-2">{{$record->ratio*100}}%</div>
          <div class="col-xs-2 col-sm-3 col-md-2">&nbsp;</div>
        </div>
        <?php } ?>
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
  </div>
  <!-- /.col-lg-4 -->
  
    <div class="col-xs-12 col-md-6">
    <div class="panel panel-default panel-table">
      <div class="panel-heading">
        <div class="row ">
          <div class="col-xs-3 col-sm-3">date</div>
          <div class="col-xs-2 col-sm-2">non ringct</div>
          <div class="col-xs-2 col-sm-2">ringct</div>
          <div class="col-xs-2 col-sm-2">ratio</div>
          <div class="col-xs-3 col-sm-3">&nbsp;</div>
        </div>
      </div>
      <div class="panel-body">
        <?php 
                foreach ($ringct[1] as $record) { //var_dump($record);
        ?>
        <div class="row show-grid link">
          <div class="col-xs-3 col-sm-3">{{$record->data}}</div>
          <div class="col-xs-2 col-sm-2">{{$record->txv1}}</div>
          <div class="col-xs-2 col-sm-2">{{$record->txv2}}</div>
          <div class="col-xs-2 col-sm-2">{{$record->ratio*100}}%</div>
          <div class="col-xs-3 col-sm-3">&nbsp;</div>
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