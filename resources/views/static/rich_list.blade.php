@extends('master')

@section('content')
  <blockquote> C'mon man. Really?</blockquote>

  <hr />

  <p>I thought you knew...    </p>


  <h2>Monero is fundamentally private</h2>

  <p>Really. It is.</p>
  <p>It is based in the Cryptonote protocol. It uses unique one-time addresses for each transaction so that only the receiver knows where the money went. <a href="http://i.imgur.com/4DidW7B.png">This is good</a>, believe me.</p>
  <p> And, as if that wasn't enough, it signs the inputs with ring signatures. And this is great because that signature only proves that someone in that group created it. That means only the sender knows where the money came from. </p>

  <hr />
  <p>But does this mean I have no way to prove a transaction or my funds to someone else?  </p>

  <br>
  <p>
  Glad you asked that, because...      
  </p>


  <h2>Monero is optionally transparent</h2>
  <p>By address AND by transaction.</p>
  <p>There's this thing called a view key, you know? This is a kind of a read-only access to an address or a given transaction. This way, you may give your account view key to someone so that they may snoop around. Why would you do that? <a href="http://i.imgur.com/gQlj9Oy.png">Here's why.</a></p>
  <p>But it's like: Hey! You can look, but you can't touch!</p>

  <p>Great isn't it? Find out more about it here: <a href='http://getmonero.org/home'>Monero - secure, private, untraceable</a>

@endsection