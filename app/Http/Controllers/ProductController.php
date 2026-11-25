<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function nightDrinks()
    {
        $drinkProducts = Product::where('area', 'night')
            ->where('category', 'drink')
            ->get()
            ->groupBy('dish_type');



        return view('night.drinks', compact('drinkProducts'));
    }

    public function nightFoods()
    {

        $foodProducts = Product::where('area', 'night')
            ->where('category', 'food')
            ->get()
            ->groupBy('dish_type');

        return view('night.foods', compact('foodProducts'));
    }

    public function loungeDrinks()
    {
        $drinkProducts = Product::where('area', 'lounge')
            ->where('category', 'drink')
            ->get()
            ->groupBy('dish_type');



        return view('lounge.drinks', compact('drinkProducts'));
    }

    public function loungeFoods()
    {

        $foodProducts = Product::where('area', 'lounge')
            ->where('category', 'food')
            ->get()
            ->groupBy('dish_type');

        return view('lounge.foods', compact('foodProducts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'image' => 'nullable|image|max:12048',
            'category' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'dish_type' => 'nullable|string|max:255',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }
        $products = Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'image' => $imagePath,
            'category' => $request->input('category'),
            'area' => $request->input('area'),
            'dish_type' => $request->input('dish_type'),
        ]);
        return redirect()->back()->with('success', 'Produit ajouté avec succès.');

    }

    public function update(Request $request, Product $product)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|integer',
        'image' => 'nullable|image|max:12048',
        'category' => 'required|string|max:255',
        'area' => 'required|string|max:255',
        'dish_type' => 'nullable|string|max:255',
    ]);


    // Gestion de l'image
    if ($request->hasFile('image')) {
        // Supprimer l’ancienne image s’il y en a une
        if ($product->image && file_exists(storage_path('app/public/' . $product->image))) {
            unlink(storage_path('app/public/' . $product->image));
        }
        $imagePath = $request->file('image')->store('products', 'public');
        $product->image = $imagePath;
    }

    // Mise à jour des autres champs
    $product->update([
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'category' => $request->input('category'),
        'area' => $request->input('area'),
        'dish_type' => $request->input('dish_type'),
    ]);

    return redirect()->back()->with('success', 'Produit mis à jour avec succès.');
}

// ****************************************************
// DASHBOARD METHODS
// ****************************************************


public function dashloungeFoods()
{
    // Catégories disponibles dans les nourritures du lounge
    $dishTypes = Product::where('area', 'lounge')
        ->where('category', 'food')
        ->whereNotNull('dish_type')
        ->where('dish_type', '!=', '')
        ->distinct()
        ->orderBy('dish_type')
        ->pluck('dish_type');

    // Catégorie sélectionnée
    $selectedType = request('dish_type');

    // Requête des nourritures
    $query = Product::where('area', 'lounge')
        ->where('category', 'food');

    // Filtrer par catégorie si un onglet est sélectionné
    if ($selectedType) {
        $query->where('dish_type', $selectedType);
    }

    // Récupérer les produits
    $foodProducts = $query
        ->orderBy('name')
        ->get();

    $totalFoods = Product::where('area', 'lounge')
        ->where('category', 'food')
        ->count();

    return view('dashboard.lounge-foods', compact(
        'foodProducts',
        'dishTypes',
        'selectedType',
        'totalFoods'
    ));
}

    public function dashnightFoods(){
        $foodProducts = Product::where('area', 'night')
            ->where('category', 'food')
            ->get()
            ->groupBy('dish_type');
        return view('dashboard.night-foods', compact('foodProducts'));
    }


public function dashLoungeDrinks()
{
    // Catégories disponibles pour les boissons du Lounge
    $dishTypes = Product::where('area', 'lounge')
        ->where('category', 'drink')
        ->whereNotNull('dish_type')
        ->where('dish_type', '!=', '')
        ->distinct()
        ->orderBy('dish_type')
        ->pluck('dish_type');

    // Catégorie sélectionnée
    $selectedType = request('dish_type');

    // Requête des boissons
    $query = Product::where('area', 'lounge')
        ->where('category', 'drink');

    // Filtrer selon l'onglet choisi
    if ($selectedType) {
        $query->where('dish_type', $selectedType);
    }

    // Boissons à afficher
    $drinkProducts = $query
        ->orderBy('name')
        ->get();

    // Nombre total de boissons
    $totalDrinks = Product::where('area', 'lounge')
        ->where('category', 'drink')
        ->count();

    return view('dashboard.lounge-drinks', compact(
        'drinkProducts',
        'dishTypes',
        'selectedType',
        'totalDrinks'
    ));
}


public function dashNightDrinks()
{
    $drinkProducts = Product::where('area', 'night')
        ->where('category', 'drink')
        ->get()
        ->groupBy('dish_type');

    return view('dashboard.night-drinks', compact('drinkProducts'));
}



    public function edit(Product $product)
    {
        return view('formUpdateProduct', compact('product'));
    }

    public function destroy(Product $product)
{
    // Supprimer l'image si elle existe
    if ($product->image && file_exists(storage_path('app/public/' . $product->image))) {
        unlink(storage_path('app/public/' . $product->image));
    }

    // Supprimer le produit de la base de données
    $product->delete();

    // Redirection avec message de succès
    return redirect()->back()->with('success', 'Produit supprimé avec succès.');
}

}
