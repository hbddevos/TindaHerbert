@extends('layouts.app')

@section('content')
    <h1>Liste des ventes</h1>
    <a href="{{ route('sales.create') }}" class="btn btn-primary mb-3">Nouvelle vente</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Date</th>
                <th>Client</th>
                <th>Total</th>
                <th>Détails</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
                <tr>
                    <td>{{ $sale->created_at->format('d/m/Y') }}</td>
                    <td>{{ $sale->customer->name }}</td>
                    <td>{{ $sale->total }} FCFA</td>
                    <td>
                        <a href="{{ route('sales.show', $sale) }}" class="btn btn-sm btn-info">Voir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
