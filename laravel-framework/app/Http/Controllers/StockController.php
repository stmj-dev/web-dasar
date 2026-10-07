<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();

        return view('stock.index', compact('stocks'));
    }

    public function create()
    {
        return view('stock.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'count' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        Stock::create([
            'name' => $request->name,
            'count' => $request->count,
            'price' => $request->price,
        ]);

        return redirect('/stock');
    }

    public function show($id)
    {
        $stock = Stock::findOrFail($id);

        return view('stock.show', compact('stock'));
    }

    public function edit($id)
    {
        $stock = Stock::findOrFail($id);

        return view('stock.edit', compact('stock'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'count' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $stock = Stock::findOrFail($id);
        $stock->update([
            'name' => $request->name,
            'count' => $request->count,
            'price' => $request->price,
        ]);

        return redirect('/stock');
    }

    public function destroy($id)
    {
        $stock = Stock::findOrFail($id);
        $stock->delete();

        return redirect('/stock');
    }
}
