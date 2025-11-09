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
        dd($products);
        return redirect()->back()->with('success', 'Produit ajouté avec succès.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
