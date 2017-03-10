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
						<div class="col-xs-12 col-sm-5 col-md-6 hash-header">Hash</div>
						<div class="col-xs-5 col-sm-5 col-md-3">Date Received</div>
						<div class="col-xs-4 col-sm-2 col-md-2">Fee</div>
						<div class="col-xs-3 col-sm-2 col-md-1">Size</div>
					</div>
				</div>
				<!-- /.panel-heading -->

				<div id="transaction-pool" class="panel-body">

					@forelse ($transaction_pool as $transaction)
						<div class="row show-grid top-row">
							<div class="col-xs-12 col-sm-12 col-md-6">{{ $transaction->id_hash }}</div>
							<div class="col-xs-12 col-sm-7 col-md-6 pull-right">
								<div class="col-xs-5 col-md-5">@datetime($transaction->receive_time)</div>
								<div class="col-xs-4 col-md-5">@coin($transaction->fee)</div>
								<div class="col-xs-3 col-md-2">{{ $transaction->blob_size }}</div>
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
