@extends('master')

@section('content')

@include('stats.stats_nav')

<a name="transaction-stats"></a>
<div id="wide-header" class="row">
  <div class="col-xs-12 col-lg-12 text-left">
    <h5><span class="page-header large"><i class="fa fa-exchange fa-fw"></i> transactions per block (excluding coinbase)</span></h5>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
  <div class="col-xs-12">
    <div class="panel panel-default panel-table">
      <div class="panel-heading">
        <div class="row ">
          <div class="col-xs-3 col-sm-3 col-md-2">&nbsp;</div>
          <div class="col-xs-2 col-sm-2 col-md-2">Tx per Block</div>
          <div class="col-xs-4 col-sm-3 col-md-3">Empty blocks (%)</div>
          <div class="col-xs-3 col-sm-4 col-md-5">Total transactions</div>
        </div>
      </div>
      <div class="panel-body">
        <div class="row show-grid link">
	  <a href="{{ url('stats/transactions/h/24') }}" title="Open details"></a>
          <div class="col-xs-3 col-sm-3 col-md-2">last day</strong></div>
          <div class="col-xs-2 col-sm-2 col-md-2"><?php echo $txs[0]->tx_per_block ?></div>
          <div class="col-xs-4 col-sm-3 col-md-3"><?php echo $txs[0]->empty_blocks ?></div>
          <div class="col-xs-3 col-sm-4 col-md-5"><?php echo $txs[0]->total_tx ?></div>
        </div>
        <div class="row show-grid link">
 	  <a href="{{ url('stats/transactions/d/7') }}" title="Open details"></a>
          <div class="col-xs-3 col-sm-3 col-md-2">last week</strong></div>
          <div class="col-xs-2 col-sm-2 col-md-2"><?php echo $txs[1]->tx_per_block ?></div>
          <div class="col-xs-4 col-sm-3 col-md-3"><?php echo $txs[1]->empty_blocks ?></div>
          <div class="col-xs-3 col-sm-4 col-md-5"><?php echo $txs[1]->total_tx ?></div>
        </div>
        <div class="row show-grid link">
	  <a href="{{ url('stats/transactions/d/30') }}" title="Open details"></a>
          <div class="col-xs-3 col-sm-3 col-md-2">last month</strong></div>
          <div class="col-xs-2 col-sm-2 col-md-2"><?php echo $txs[2]->tx_per_block ?></div>
          <div class="col-xs-4 col-sm-3 col-md-3"><?php echo $txs[2]->empty_blocks ?></div>
          <div class="col-xs-3 col-sm-4 col-md-5"><?php echo $txs[2]->total_tx ?></div>
        </div>
        <div class="row show-grid link">
	  <a href="{{ url('stats/transactions/m/12') }}" title="Open details"></a>
          <div class="col-xs-3 col-sm-3 col-md-2">last year</strong></div>
          <div class="col-xs-2 col-sm-2 col-md-2"><?php echo $txs[3]->tx_per_block ?></div>
          <div class="col-xs-4 col-sm-3 col-md-3"><?php echo $txs[3]->empty_blocks ?></div>
          <div class="col-xs-3 col-sm-4 col-md-5"><?php echo $txs[3]->total_tx ?></div>
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