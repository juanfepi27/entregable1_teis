@extends('layouts.base')
@section('title', 'Create - Offer Class')
@section('subtitle', 'Creating Offers')
@section('content')

@if($errors->any())
<ul id="errors" class="alert alert-danger list-unstyled">
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Element created successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<form class="row g-1 p-5" action="{{ route('offers.insert') }}" method="POST">
  @csrf
  <div class="form-floating mb-3">
    <input type="datetime-local" class="form-control" name="publishDate" id="publishDateOffer" placeholder="publish date" required>
    <label for="publishDateOffer">Publish Date</label>
    <p class="form-text text-danger">This field will be filled automatically for the app (it will take the actual time)</p>
  </div>
  <div class="form-floating mb-3">
    <input type="number" class="form-control" name="price" id="priceOffer" placeholder="price" min="0" step="0.01" required>
    <label for="priceOffer">Price</label>
    <p class="form-text">- add prices without the money symbol</p>
    <p class="form-text">- add prices with 2 decimal places maximum</p>
    <p class="form-text">- example: 1000000.00 is the equivalent to $1,000,000.00</p>
  </div>
  <div class="form-floating">
    <input type="text" class="form-control" name="status" id="statusOffer" placeholder="Status of the offer" required>
    <label for="statusOffer">Status</label>
    <p class="form-text text-danger">This field will be filled automatically for the app (it will take the value of = "SENT")</p>
    <p class="form-text">- remember that you can only add the following values: SENT,ACCEPTED,REJECTED</p>
  </div>
  <div class="col-12 text-center">
    <button class="btn btn-primary" type="submit">Submit form</button>
    <button class="btn btn-primary" type="reset">Reset form</button>
  </div>
</form>
@endsection
