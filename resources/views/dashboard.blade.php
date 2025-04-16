@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Bienvenue sur le tableau de bord</h1>
        <p class="lead">Gérez vos produits, clients et ventes en toute simplicité.</p>

        <div class="row mt-5">
            <div class="col-md-4">
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg w-100">Produits</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('customers.index') }}" class="btn btn-success btn-lg w-100">Clients</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('sales.index') }}" class="btn btn-warning btn-lg w-100">Ventes</a>
            </div>
        </div>
    </div>
@endsection
