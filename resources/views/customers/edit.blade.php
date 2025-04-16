@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Modifier le client</h2>

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Indique que c'est une mise à jour -->

        <!-- Nom du client -->
        <div class="form-group">
            <label for="name">Nom du client</label>
            <input type="text" name="name" value="{{ old('name', $customer->name) }}" class="form-control" required>
        </div>

        <!-- Numéro de téléphone du client -->
        <div class="form-group">
            <label for="phone">Numéro de téléphone</label>
            <input type="text" name="phone" value="{{ old('phone', $customer->phone) }}" class="form-control">
        </div>

        <!-- Adresse du client -->
        <div class="form-group">
            <label for="address">Adresse</label>
            <textarea name="address" class="form-control">{{ old('address', $customer->address) }}</textarea>
        </div>

        <!-- Soumettre le formulaire -->
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
