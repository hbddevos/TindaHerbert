<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index() {
        $sales = Sale::with(['product', 'customer'])->get();
        return view('sales.index', compact('sales'));
    }

    public function create() {
        $products = Product::all();
        $customers = Customer::all();
        return view('sales.create', compact('products', 'customers'));
    }

    public function store(Request $request)
{
    // Validation des données
    $request->validate([
        'customer_id' => 'required|exists:customers,id',
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required|integer|min:1',
    ]);

    // Débogage des données reçues
    // dd($request->all());

    // Récupérer les données du formulaire
    $customer = Customer::find($request->customer_id);
    $product = Product::find($request->product_id);

    // Calculer le prix total (prix produit * quantité)
    $totalPrice = $product->price * $request->quantity;

    // Créer la vente
    $sale = Sale::create([
        'customer_id' => $request->customer_id,
        'product_id' => $request->product_id,
        'quantity' => $request->quantity,
        'price' => $totalPrice,
    ]);

    // Mettre à jour le stock du produit
    $product->stock -= $request->quantity;
    $product->save();

    // Rediriger vers la page de la vente après l'enregistrement avec un message de succès
    return redirect()->route('sales.show', $sale->id)->with('success', 'Vente enregistrée avec succès');
}

}
