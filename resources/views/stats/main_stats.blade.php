@extends('master')

@section('content')

<ul class="nav">
  <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
  <li class="hidden active"><a href="#page-top"></a></li>
  <li><a href="#ring-size">mixins</a></li>
  <li><a href="#transaction-stats">transactions</a></li>
  <li><a href="#block-medians">block medians</a></li>
  <li><a href="#blockchain-growth">blockchain growth</a></li>
</ul>

@include('stats.ringct_transactions')
<br />
@include('stats.ring_size')
<br />
@include('stats.transactions')
<br />
@include('stats.block_medians')
<br />
@include('stats.blockchain_growth')

@endsection