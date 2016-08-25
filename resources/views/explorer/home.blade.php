@extends('master')

@section('content')
<table>
  <thead>
    <td>Height</td>
    <td>Time (UTC)</td>
    <td>Tx</td>
    <td>Size</td>    
    <td>Hash</td>
  </thead>
  <tbody>

  @foreach ($blocks as $block)
    <tr>
      <td><a href="/block/{{ $block->height }}">{{ $block->height }}</a> </td>
      <td> @datetime($block->timestamp) </td>
      <td>{{ $block->tx_count }} </td>
      <td>{{ $block->size }} </td>
      <td><a href="{{ url('block', $block->height) }}">{{ $block->hash }}</a> </td>
    </tr>  
  @endforeach
    
  </tbody>
</table>

@endsection