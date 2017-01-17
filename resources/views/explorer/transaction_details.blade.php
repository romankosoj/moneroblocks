@extends('master')

@section('content')

@include('explorer.network_stats')

<div class="row">
  <div class="col-lg-12"  style="text-overflow: ellipsis; overflow-x:hidden;">
    <h3 class="page-header"><i class="fa fa-exchange fa-fw"></i> Transaction <small>  {{ $transaction[0]->hash }} </small></h3>
    @if (strlen($transaction[0]->payment_id) > 0)
    <h4><i class="fa fa-bookmark fa-fw"></i> Payment Id: <small>{{ $transaction[0]->payment_id }}</small></h4>
    @endif
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<br>

<div class="row">
  <div class="col-sm-12 col-lg-6">
    <ul class="list-group">
      <li class="list-group-item">
        <i class="fa fa-money fa-fw"></i> From Block
        <span class="pull-right text-muted small"><em>{{ $transaction[0]->bl_height }}</em></span>
      </li>
        <li class="list-group-item">
        <i class="fa fa-money fa-fw"></i> Output total
          @if ($transaction[0]->version == 2 && $transaction[0]->coinbase_tx == 0)
          <span class="pull-right text-muted small"><em>confidential</em></span>
          @else
          <span class="pull-right text-muted small"><em>@coin($transaction[0]->amount) XMR</em></span>
					@endif            
      </li>
      <li class="list-group-item">
        <i class="fa fa-bank fa-fw"></i> Fee
        <span class="pull-right text-muted small"><em>@coin($transaction[0]->fee) XMR</em></span>
      </li>
      <li class="list-group-item">
        <i class="fa fa-arrows-h fa-fw"></i> Size
        <span class="pull-right text-muted small"><em>{{ $transaction[0]->tx_size }} bytes</em></span>
      </li>
        <li class="list-group-item">
        <i class="fa fa-arrows-h fa-fw"></i> Mixin
        <span class="pull-right text-muted small"><em>{{ $transaction[0]->mixin }}</em></span>
      </li>
      <li class="list-group-item">
        <i class="fa fa-unlock fa-fw"></i> Unlock 
        <span class="pull-right text-muted small"><em>{{ $transaction[0]->unlock_time }}</em></span>
      </li>
      @if ($transaction[0]->version == 2 && $transaction[0]->coinbase_tx == 0)
      <li class="list-group-item highlight">
        <i class="fa fa-envelope fa-2x"></i>&nbsp;Confidential Transaction &mdash; amounts are not disclosed.
      </li>
      @endif
    </ul>
  </div>
</div>
<!-- /.row -->

<div class="row">
  @if(count($inputs) > 0)
  <div class="col-sm-12 col-lg-6">
    <div class="panel panel-success">
      <div class="panel-heading">
      Inputs ({{ $transaction[0]->input_count }})
      </div>
    </div>
    
    <div id="inputs_panel" class="panel panel-default panel-table">
      <div class="panel-heading">
        <div class="row">
          <div class="col-sm-1">&nbsp;</div>
          <div class="col-sm-3">Amount</div>
          <div class="col-sm-8">Key Image</div>
        </div>
      </div>

      <div class="panel-body">
      @foreach($inputs as $input)
       
        <div class="row show-grid top-row">
          <div class="col-sm-1">
            <button class="button output-list fa fa-plus fa-fw" data-status="O" data-vinid="{{ $input->vinid }}" title="Show participating outputs">&nbsp;</button>
          </div>
          <div class="col-sm-3 small">@coin($input->amount)</div>
          <div class="col-sm-8 key tiny">{{ $input->key_image }}</div>
        </div>
        
        <div id="output-list-{{ $input->vinid }}" class="closed">
          <div class="row small text-muted">
            <div class="col-sm-1">&nbsp;</div>
            <div class="col-sm-2">From Block</div>
            <div class="col-sm-9">Public Key</div>
          </div>
          
          @foreach($input->offsets as $offset)
          <div class="row show-grid small">
            <a href="{{ url('tx', $offset->output_tx_hash ) }}"></a>
            <div class="col-sm-1">&nbsp;</div>
            <div class="col-sm-2 small">{{ $offset->output_height }}</div>
            <div class="col-sm-9 small">{{ $offset->output_public_key }}</div>
          </div>
          
          @endforeach
        </div>

        @endforeach
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
  </div>
  <!-- /.col-sm-12 col-lg-6 -->
  @endif
  
  <div class="col-sm-12 col-md-6">
    <div class="panel panel-success">
      <div class="panel-heading">
        Outputs ({{ $transaction[0]->output_count }})
      </div>
    </div>
    
    <div class="panel panel-default panel-table">
      <div class="panel-heading">
        <div class="row">
          <div class="col-sm-3">Amount</div>
          <div class="col-sm-9">Public Key</div>
        </div>
      </div>
      
      <div class="panel-body">
      @foreach($outputs as $output)  
        <div class="row show-grid top-row">
          <div class="col-sm-3 small">@coin($output->amount)</div>
          <div class="col-sm-9 key tiny">{{ $output->public_key }}</div>
        </div>
      @endforeach
      </div>
      <!-- /.panel-body -->

    </div>
    <!-- /.panel -->
  </div>
</div>
<!-- /.row -->

@endsection