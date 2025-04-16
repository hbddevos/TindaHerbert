@extends('layouts.app')

@section('content')
    <h2>Nouvelle vente</h2>
    <form action="{{ route('sales.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Client</label>
            <select name="customer_id" class="form-control">
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Produits (sélectionner et quantité)</label>
            @foreach ($products as $product)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="products[{{ $product->id }}][selected]" value="1">
                    <label class="form-check-label">{{ $product->name }} ({{ $product->price }} FCFA)</label>
                    <input type="number" name="products[{{ $product->id }}][quantity]" placeholder="Quantité" class="form-control mt-1">
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-success">Valider la vente</button>
    </form>
@endsection
