@extends('master')

@section('content')

@include('stats.stats_nav')

<div id="wide-header" class="row">
  <div class="col-xs-12 col-lg-12 text-center">
    <h5><span class="page-header large"> average transaction count per block </span></h5>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

  <table class="data-table small" >
    <thead style="background-color:#f1f1f1;">
      <tr>
        <th>Date</th>
        <th>Tx count</th>
        <th>Block count</th>
        <th>Tx per block</th>
      </tr>
    </thead>
    <tbody>

@foreach ($rows as $row) 
	<tr>
		<td>{{$row->data}}&nbsp;{{ isset($row->hora) ? $row->hora.":00" : "" }}</td>
	  <td>{{$row->tx_count}}</td>
	  <td>{{$row->block_count}}</td>
	  <td>{{$row->tx_per_block}}</td>
	</tr>
@endforeach

    </tbody>
  </table>
@endsection
