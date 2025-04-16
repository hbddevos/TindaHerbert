@extends('layouts.app')

@section('content')
    <h2>Ajouter un client</h2>
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nom</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Téléphone</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="mb-3">
            <label>Adresse</label>
            <input type="text" name="address" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
    </form>
@endsection
