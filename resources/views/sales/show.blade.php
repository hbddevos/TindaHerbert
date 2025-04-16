@extends('layouts.app')

@section('content')
    <h2>Détails de la vente</h2>
    <p><strong>Client :</strong> {{ $sale->customer->name }}</p>
    <p><strong>Date :</strong> {{ $sale->created_at->format('d/m/Y H:i') }}</p>

    <h4>Produits vendus :</h4>
    <ul>
        @foreach ($sale->products as $product)
            <li>{{ $product->name }} - Quantité : {{ $product->pivot->quantity }}</li>
        @endforeach
    </ul>

    <p><strong>Total :</strong> {{ $sale->total }} FCFA</p>
@endsection
