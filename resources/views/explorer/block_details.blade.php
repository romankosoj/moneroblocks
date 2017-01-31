@extends('master')

@section('content')

@include('explorer.network_stats')

<div class="row">
  <div class="col-lg-12"  style="text-overflow: ellipsis; overflow-x:hidden;">
    <h3 class="page-header">
      <i class="fa fa-cube fa-fw"></i> Block 
        <a href="{{ $previous_block }}">
        <small><i class="fa fa-chevron-left"></i></small>
        </a>
        {{ $block[0]->height }}
        <a href="{{ $next_block }}">
        <small><i class="fa fa-chevron-right"></i></small>
        </a>
        <small>{{ $block[0]->hash }}</small>
    </h3>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<br>

<div class="row">
  <div class="col-sm-6">
    <ul class="list-group">
      <li class="list-group-item">
        <i class="fa fa-arrows-v fa-fw"></i> Height
        <span class="pull-right text-muted small">{{ $block[0]->height }}</em></span>
      </li>
      <li class="list-group-item">
        <i class="fa fa-clock-o fa-fw"></i> Timestamp
        <span class="pull-right text-muted small"><em> @datetime($block[0]->timestamp) UTC</em></span>
      </li>
      <li class="list-group-item">
        <i class="fa fa-database fa-fw"></i> Block difficulty
        <span class="pull-right text-muted small"><em>{{ $block[0]->block_difficulty }}</em></span>
      </li>
      <li class="list-group-item">
        <i class="fa fa-arrows-h fa-fw"></i> Block size (bytes)
        <span class="pull-right text-muted small"><em>{{ $block[0]->size }}</em></span>
      </li>
    </ul>
  </div>
  <!-- /.col-lg-6 -->
  <div class="col-sm-6">
    <ul class="list-group">
      <li class="list-group-item">
        <i class="fa fa-arrows-h fa-fw"></i> Cumulative Difficulty
        <span class="pull-right text-muted small"><em>{{ $block[0]->cumulative_difficulty }}</em></span>
      </li>
      <li class="list-group-item">
        <i class="fa fa-arrows-h fa-fw"></i> Total Generated Coins
        <span class="pull-right text-muted small"><em>@coin($block[0]->coins_generated)</em></span>
      </li>
      <li class="list-group-item">
        <i class="fa fa-exchange fa-fw"></i> Transactions
        <span class="pull-right text-muted small"><em>{{ $block[0]->tx_count }}</em></span>
      </li>
    </ul>
  </div>
  <!-- /.col-lg-6 -->
</div>
<!-- /.row -->

<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-primary">
      <div class="panel-heading large">
        Coinbase Transaction
      </div>
    </div>
    <div class="panel panel-default panel-table">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-2 col-sm-6 col-md-7 hash-header">Hash</div>
          <div class="col-xs-6 col-sm-3 col-md-4">Amount</div>
          <div class="col-xs-1 col-sm-1 col-md-1">Bytes</div>
        </div>
      </div>

      <div class="panel-body">
        <div class="row show-grid top-row">
          <a href="{{ url('tx', $coinbase[0]->hash) }}"></a>
          <div class="col-xs-2 col-sm-6 col-md-7 hash">{{ $coinbase[0]->hash }}</div>
          <div class="col-xs-6 col-sm-3 col-md-4">@coin($coinbase[0]->amount)</div>
          <div class="col-xs-1 col-sm-1 col-md-1">{{ $coinbase[0]->tx_size }}</div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.col-sm-12 -->
</div>
<!-- /.row -->

<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-primary">
      <div class="panel-heading large">
      Transactions ({{ count($transactions) }})
      </div>
    </div>
    <div class="panel panel-default panel-table">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-2 col-sm-5 col-md-7 hash-header">Hash</div>
          <div class="col-xs-5 col-sm-3 col-md-2">Output total</div>
          <div class="col-xs-5 col-sm-3 col-md-2">Fee</div>
          <div class="col-xs-2 col-sm-1 col-md-1">Bytes</div>
        </div>
      </div>
      <!-- /.panel-heading -->
      
      <div class="panel-body">        

        @forelse ($transactions as $transaction)
        <div class="row show-grid top-row">
          <a href="{{ url('tx', $transaction->hash ) }}"></a>
          <div class="col-xs-2 col-sm-5 col-md-7 hash">{{ $transaction->hash }}</div>
          @if ($transaction->version == 2)
          <div class="col-xs-5 col-sm-3 col-md-2"><i class="fa fa-envelope-o"></i>&nbsp;confidential</div>
          @else
          <div class="col-xs-5 col-sm-3 col-md-2">@coin($transaction->amount)</div>
          @endif
          <div class="col-xs-5 col-sm-3 col-md-2">@coin($transaction->fee)</div>
          <div class="col-xs-1 col-sm-1 col-md-1">{{ $transaction->tx_size }}</div>
        </div>
        @empty
        <div class="row show-grid top-row">
           <div class="col-xs-12">No transactions</div>
        </div>
        @endforelse

      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
  </div>
  <!-- /.col-sm-12 -->
</div>
<!-- /.row -->

@endsection