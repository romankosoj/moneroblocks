@extends('master')

@section('content')

<div class="col-lg-10 col-lg-offset-1">

	<div class="row">
		<div class="col-lg-12"  style="text-overflow: ellipsis; overflow-x:hidden;">
			<h1 class="page-header">
				API Documentation
			</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<br />

	<div class="row">
		<!-- /.col-lg-4 -->
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
					How to use
					</h4>
				</div>
				<div class="row">&nbsp;</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-5 doc-text">
							<p>To invoke an API method, it should be made a GET request with params separated by slashs.  The first param should be the method to invoke. The response is issue in JSON.</p>
						</div>
						<div class="col-sm-7 doc-code">
							<blockquote>API ENDPOINT</blockquote>
							<pre><code class="json">http://moneroblocks.info/api/</code></pre>
						</div>
						<div class="col-sm-7 doc-code">
							<blockquote>URI Request Format</blockquote>
							<pre><code class="json">http://moneroblocks.info/api/{method}/{param1}/{param2}/</code></pre>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-5 doc-text">

						</div>
						<div class="col-sm-7 doc-code">
							<blockquote>JSON Response Example</blockquote>
<pre><code class="json">{
   "status":"ERROR",
   "error":"Block not found",
   "method":"get_block_header",
   "param_value":"s"
}</code></pre>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.col-lg-4 -->
	</div>

	<div class="row">
		<!-- /.col-lg-4 -->
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
					{get_stats}
					</h4>
				</div>
				<div class="panel-body">
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-sm-5 doc-text">
							<p> :Request current coin stats</p>
						</div>
						<div class="col-sm-7 doc-code">
							<blockquote><code class="json">http://moneroblocks.info/api/get_stats/</code></blockquote>
						</div>
						<div class="col-sm-12 doc-code">
							<p>JSON Response</p>
<pre><code class="json api-example">{
   "difficulty":857854576,
   "height":493168,
   "hashrate":14297576.266667,
   "current_emission":6892313564273197407,
   "last_reward":11019174126253,
   "last_timestamp":1427371888
}</code></pre>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.col-lg-4 -->
	</div>

	<div class="row">
		<!-- /.col-lg-4 -->
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
					{get_block_header}
					</h4>
				</div>
				<div class="panel-body">
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-sm-5 doc-text">
							<p> :Request a given block header by height or hash</p>
						</div>
						<div class="col-sm-7 doc-code">
							<blockquote><code class="json">http://moneroblocks.info/api/get_block_header/{height}</code></blockquote>
							<blockquote><code class="json">http://moneroblocks.info/api/get_block_header/{hash}</code></blockquote>
						</div>
						<div class="col-sm-12 doc-code">
							<p>JSON Response</p>
<pre><code class="json api-example">{
   "block_header":{
      "depth":101635,
      "difficulty":42822738260,
      "hash":"1aad696889727fd2b00f571f9b116c6dcf8169457fb5554dee27258ab6ed772e",
      "height":5898,
      "major_version":1,
      "minor_version":0,
      "nonce":745838533,
      "orphan_status":false,
      "prev_hash":"90dbd09f741ba8c6871e066a557215cd8aaf9a99d07e0d92caa02f9df03c730c",
      "reward":134544907000000,
      "timestamp":1413485348
   },
   "status":"OK"
}</code></pre>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.col-lg-4 -->
	</div>

	<div class="row">
		<!-- /.col-lg-4 -->
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
					{get_block_data}
					</h4>
				</div>
				<div class="panel-body">
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-sm-5 doc-text">
							<p> :Request a given block data by height or hash</p>
						</div>
						<div class="col-sm-7 doc-code">
							<blockquote><code class="json">http://moneroblocks.info/api/get_block_data/{height}</code></blockquote>
							<blockquote><code class="json">http://moneroblocks.info/api/get_block_data/{hash}</code></blockquote>
						</div>
						<div class="col-sm-12 doc-code">
							<p>JSON Response</p>
<pre><code class="json api-example">{
  "status": "OK",
  "block_data": {
    "id": "0",
    "jsonrpc": "2.0",
    "result": {
      "block_header": {
        "depth": 234,
        "difficulty": 3658048014,
        "hash": "247575ca01657e2f61845dc2b6a64424c7e45952355757b950220b8def3fe5a0",
        "height": 1156509,
        "major_version": 3,
        "minor_version": 5,
        "nonce": 33,
        "orphan_status": false,
        "prev_hash": "692f714ee262e5ed9fd4c26e5ef80f85db8577f56890027085291de565b8c388",
        "reward": 10244800000000,
        "timestamp": 1476355796
      },
      "status": "OK",
      "tx_hashes": [
        "dbb1ddacd2ae0137752f0e761adcab64d463a0f74d1f506f49cd92a11b336bf1",
        "956e160424eb42f1780c04b1363fc7aa84553ff788f774da697201b9868253f9",
        "7da20edb196b5e10d5ee67dcfbcaa9f8fff7482a0647ebff231fc9ff46e1289b",
        "de2cfe5e140cb839f2fd4f63a4daed9960b96db013ed1e9a5c544914c64a0b8a",
        "2cb75dc5a36cc5d05efd38da3e08135b4340cc18a824d376ce07924d898bb9e4"
      ]
    }
  }
}</code></pre>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.col-lg-4 -->
	</div>

	<div class="row">
		<!-- /.col-lg-4 -->
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
					{get_transaction_data}
					</h4>
				</div>
				<div class="panel-body">
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-sm-5 doc-text">
							<p> :Request a given transaction by hash</p>
						</div>
						<div class="col-sm-7 doc-code">
							<blockquote><code class="json">http://moneroblocks.info/api/get_transaction_data/{hash}</code></blockquote>
						</div>
						<div class="col-sm-12 doc-code">
							<p>JSON Response</p>
<pre><code class="json api-example">{
  "status": "OK",
  "transaction_data": {
    "version": 1,
    "unlock_time": 0,
    "vin": [
      {
        "key": {
          "amount": 90000000000,
          "key_offsets": [
            212077,
            31975,
            22413
          ],
          "k_image": "c0fcf3b7043419d91a098890f917aa9ff9523e8664f8b5cb7e11671ebc2362c9"
        }
      },
      {
        "key": {
          "amount": 2000000000000,
          "key_offsets": [
            169160,
            117221,
            119875
          ],
          "k_image": "511c790e2db2c028613fc6a80a2f5f32389dd7b2494bb2d48fde9170475b83a3"
        }
      }
    ],
    "vout": [
      {
        "amount": 80000000000,
        "target": {
          "key": "9bbde445a7f78bddf49b3abf47e4bd246aa4212422b6c15d328024aa76952960"
        }
      },
      {
        "amount": 1000000000000,
        "target": {
          "key": "5dc6855f3ee6d50ea82b7a60e4c4b93ccf779adf0d5c4cbb0b69224d0714aa75"
        }
      },
      {
        "amount": 1000000000000,
        "target": {
          "key": "2fb8b74c3b8ce6f4fa56b3f604bdd07f552588765b8dee7d49e68e9f8fe40431"
        }
      }
    ],
    "extra": [
      2,
      33,
      0,
      74,
      105,
      189,
      108,
      49,
      44,
      217,
      144,
      168,
      204,
      57,
      223,
      104,
      73,
      111,
      163,
      227,
      53,
      83,
      70,
      13,
      122,
      235,
      233,
      19,
      58,
      158,
      68,
      187,
      234,
      161,
      175,
      1,
      157,
      75,
      45,
      101,
      26,
      244,
      238,
      136,
      104,
      189,
      171,
      0,
      211,
      97,
      211,
      246,
      247,
      86,
      107,
      130,
      248,
      46,
      152,
      212,
      36,
      238,
      170,
      226,
      27,
      231,
      109,
      186
    ],
    "signatures": [
      "2c4af81ffed9796990a17eb8a7fdd6004f6877d30b97df817cafa6ff1959d805cdb0352a75e7d6cac4a7fb815d0ab075975a3ffdbfe364f615e0a360d25b3f0e1789d918494f7c40ba6e4e0ed25938cc287422ba4c5ca9c7d7bc52bcdbc8890d4c76065ace162266c51b6ebea11163665dc50d687b65574cea16ebd4f5dd42011638881eaa53218d2fa351f53fdbd1a129c2d179947c54e3f5f40e3bf6455f0682c8ed5c5dc0c69f762db6cffdeae85c94c076915524c846e6d721efd6526c0c",
      "5c057fbc56b1a3eb5c563eff2be57f1cad46077af2e115841005c82bf98070063e6ae375586264e126d6d89cc558364638689ed51cd64d579b05fa3b979f560f0d99859b0cceb756e453e3ad1bc241507eece5f1c8808c2816ace739c06ae1066b47256d6dd175e648f7d7e7a9972753337367ae5266d88ce0931fdb952f840a8714429f596ddd117c23ee4dfa9809ade9a28100148a31f65679c34ea1b633093f968cefbbec9cf93f1e794b8573f3f050272bde6b943c9947d44221f4e13c02"
    ]
  }
}</code></pre>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /.col-lg-4 -->
	</div> <!-- /.row -->
	
	<div class="row">
		<!-- /.col-lg-4 -->
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
					{is_key_image_spent}
					</h4>
				</div>
				<div class="panel-body">
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-sm-5 doc-text">
							<p> :Verify the spent state of a given key image</p>
						</div>
						<div class="col-sm-7 doc-code">
							<blockquote><code class="json">http://moneroblocks.info/api/is_key_image_spent/</code></blockquote>
						</div>
						<div class="col-sm-12 doc-code">
							<p>JSON Response</p>
<pre><code class="json api-example">{
	"spent_status":[0],
	"status":"OK"
}</code></pre>
						</div>
					</div>
				</div>
			</div>
		</div>	<!-- /.col-lg-4 -->
	</div>	<!-- /.row -->

<div style="padding-bottom:10%;">
	
</div>
</div>

@endsection