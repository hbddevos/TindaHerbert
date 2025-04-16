@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Modifier le produit</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Indique que c'est une mise à jour -->

        <!-- Nom du produit -->
        <div class="form-group">
            <label for="name">Nom du produit</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}" class="form-control" required>
        </div>

        <!-- Prix du produit -->
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" name="price" value="{{ old('price', $product->price) }}" class="form-control" required>
        </div>

        <!-- Stock du produit -->
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" class="form-control" required>
        </div>

        <!-- Description du produit -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ old('description', $product->description) }}</textarea>
        </div>

        <!-- Soumettre le formulaire -->
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
