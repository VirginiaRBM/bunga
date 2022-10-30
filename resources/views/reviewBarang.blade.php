@extends('mainLayout.main')

@section('container')
<div class="row align-items-start">
    <div class="col">
        <h5>{{ $review_barang->namaBarang }}</h5>        
        <p>Rp. {{ $review_barang->harga }}</p>
        <p>tersisa : {{ $review_barang->stok }}</p>
        <p>{{ $review_barang->ulasan }}</p>
    </div>
    <div class="col">
      <img src="{{ asset('storage/'. $review_barang->photo) }}" class="card-img-top">
    </div>
  </div>
@endsection