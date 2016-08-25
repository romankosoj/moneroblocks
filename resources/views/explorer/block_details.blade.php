@extends('master')

@section('content')

<ul>
  <li>height: {{ $block[0]->height }}</li>
  <li>timestamp: {{ $block[0]->timestamp }}</li>
  <li>Block diff: {{ $block[0]->block_difficulty }}</li>
  <li>Block reward: {{ $block[0]->coins_generated }}</li>
  <li>Block size: {{ $block[0]->size }}</li>
  <li>Cumulative diff: {{ $block[0]->cumulative_difficulty }}</li>
</ul>

<table>
  <theader>
    <td>Tx id</td>
    <td>Size</td>
    <td>Amount</td>
    <td>Fee</td>
    <td>Ring Size</td>
    <td>Outputs</td>
  </theader>
  <tbody>

  @foreach ($transactions as $transaction)
    <tr>
      <td><a href="/transaction/{{ $transaction->hash }}">{{ $transaction->txid }}</a></td>
      <td>{{ $transaction->tx_size }}</td>
      <td>{{ $transaction->amount }}</td>
      <td>{{ $transaction->fee }}</td>
      <td>{{ $transaction->mixin }}</td>
      <td>{{ $transaction->output_count }}</td>
    </tr>  
  @endforeach
    
  </tbody>
</table>


@endsection