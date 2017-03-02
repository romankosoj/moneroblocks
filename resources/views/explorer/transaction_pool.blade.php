	<div class="row">
		<div class="col-lg-12"  style="text-overflow: ellipsis; overflow-x:hidden;">
			<h3 class="page-header">
				<i class="fa fa-bookmark fa-fw"></i> Transaction Pool
			</h3>
		</div>
	</div> <!-- ./row -->
	<br>

	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-primary">
				<div class="panel-heading large">
				Transactions ({{ count($transaction_pool) }})
				</div>
			</div>
			<div class="panel panel-default panel-table">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-2 col-sm-5 col-md-7 hash-header">Hash</div>
						<div class="col-xs-7 col-sm-5 col-md-3">Output total</div>
						<div class="col-xs-3 col-sm-2 col-md-2">Fee</div>
					</div>
				</div>
				<!-- /.panel-heading -->

				<div id="transaction-pool" class="panel-body">        

					@forelse ($transaction_pool as $transaction)
					<?php $transaction_json = json_decode($transaction->tx_json); ?>
						<div class="row show-grid top-row">
							<div class="col-xs-12 col-sm-12 col-md-7">{{ $transaction->id_hash }}</div>
							<div class="col-xs-12 col-sm-7 col-md-5 pull-right">
								@if ($transaction_json->version == 2)
								<div class="col-xs-7 col-md-6"><i class="fa fa-envelope-o"></i>&nbsp;confidential</div>
								@else
								<div class="col-xs-7 col-md-6">@coin($transaction_json->amount)</div>
								@endif
								<div class="col-xs-5 col-md-6">@coin($transaction->fee)</div>
							</div>
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
