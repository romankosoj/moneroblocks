@extends('master')

@section('content')

@include('explorer.network_stats')

<div class="row">
	<div class="col-lg-12"  style="text-overflow: ellipsis; overflow-x:hidden;">
		<h3 class="page-header">
			<i class="fa fa-bookmark fa-fw"></i> Payment Id
			<small>{{$payment_id}}</small>
		</h3>
	</div>
</div> <!-- ./row -->
<br>

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
          <div class="col-xs-2 col-sm-6 col-md-7 hash-header">Hash</div>
          <div class="col-xs-6 col-sm-3 col-md-2">Output total</div>
          <div class="col-xs-3 col-sm-2 col-md-2">Fee</div>
          <div class="col-xs-1 col-sm-1 col-md-1">Bytes</div>
        </div>
      </div>
      <!-- /.panel-heading -->
      
      <div class="panel-body">        

        @forelse ($transactions as $transaction)
        <div class="row show-grid top-row">
          <a href="{{ url('tx', $transaction->hash ) }}"></a>
          <div class="col-xs-2 col-sm-6 col-md-7 hash">{{ $transaction->hash }}</div>
          @if ($transaction->version == 2)
          <div class="col-xs-6 col-sm-3 col-md-2"><i class="fa fa-envelope-o"></i>&nbsp;confidential</div>
          @else
          <div class="col-xs-6 col-sm-3 col-md-2">@coin($transaction->amount)</div>
					@endif
          <div class="col-xs-3 col-sm-2 col-md-2">@coin($transaction->fee)</div>
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