@extends('layouts.base')
@section('title', 'Home - Offer Class')
@section('subtitle', 'Offers')
@section('content')
<div class="card">
  <div class="card-header">
    What does it have an Offer?
  </div>
  <div class="card-body">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <h5 class="card-title text-decoration-line-through">Country</h5>
        <p class="card-text text-decoration-line-through">The country that will be bought</p>
      </li>
      <li class="list-group-item">
        <h5 class="card-title text-decoration-line-through">Offerror</h5>
        <p class="card-text text-decoration-line-through">The user that wants to buy the country</p>
      </li>
      <li class="list-group-item">
        <h5 class="card-title">Publish date</h5>
        <p class="card-text">Date and hour when is published the offer</p>
      </li>
      <li class="list-group-item">
        <h5 class="card-title">Price</h5>
        <p class="card-text">How much is asked for the country</p>
      </li>
      <li class="list-group-item">
        <h5 class="card-title">Status</h5>
        <p class="card-text">The status of the offer could be one of the following possibilities:</p>
        <p class="card-text text-center">SENT</p>
        <p class="card-text text-center">ACCEPTED</p>
        <p class="card-text text-center">REJECTED</p>
      </li>
    </ul>

  </div>
</div>
@endsection
