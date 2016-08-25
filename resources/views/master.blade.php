<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Monero Blocks - XMR block explorer</title>
	<meta name="keywords" content="monero, block, transaction, payment id, blockexplorer, richlist, hashrate, difficulty, explorer, blockchain, xmr">
	<meta name="description" content="Monero blockchain explorer -  XMR blocks, transactions, payment ids, hashrate, emission. We show it all. ">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
</head>
<body>
	<header>
		<div id="logo">
			<h5>
				Monero Blocks
			</h5>				
		</div>
		<nav>
			<ul>
				<li><a href="/">Blockexplorer</a></li>
				<li><a href="/stats/">Stats</a></li>
				<li><a href="/api/">API</a></li>
				<li><a href="/richlist/">Rich List</a></li>
			</ul>
		</nav>
	</header>
  
  @yield('content')
  
</body>
</html>