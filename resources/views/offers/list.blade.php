@extends('layouts.base')
@section('title', 'List - Offer Class')
@section('subtitle', 'Listing Offers')
@section('content')
<div class="row">
    @foreach ($viewData["offers"] as $offer)
        <div class="col-md-3 col-lg-2 mb-2">
            <div class="card">
                <h5 class="card-header">
                    <a class="text-black text-decoration-none" href="{{ route('offers.show', ['id'=> $offer['id']]) }}">
                        Offer {{ $offer["id"] }}
                    </a>
                </h5>
                <div class="card-body">
                    <p class="card-text">Price: {{ $offer["price"] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
