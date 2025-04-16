@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un produit</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nom du produit</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" name="price" class="form-control" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="category">Catégorie</label>
            <input type="text" name="category" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
    </form>
</div>
@endsection

