@extends('master')

@section('content')

@include('stats.ring_size')
<br />
@include('stats.transactions')
<br />
@include('stats.block_medians')
<br />
@include('stats.blockchain_growth')

@endsection