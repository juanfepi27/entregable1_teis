@extends('layouts.base')
@section('title', 'Offer data - Offer Class')
@section('subtitle', 'Offer data')
@section('content')
<div class="col-md-8">
    <div class="card-body">
        <h5 class="card-title">
            Offer {{$viewData["offer"]["id"]}}
        </h5>
        <hr>
        <p class="card-text"><strong>Publish Date:</strong> {{ $viewData["formatDate"] }}</p>
        <p class="card-text"><strong>Price:</strong> {{ $viewData["offer"]["price"] }}</p>
        <p class="card-text"><strong>Status:</strong> {{ $viewData["offer"]["status"] }}</p>

        <a class="btn btn-primary" href="{{ route('offers.delete', ['id'=> $viewData['offer']['id']]) }}">Delete</a>
    </div>
</div>
@endsection
