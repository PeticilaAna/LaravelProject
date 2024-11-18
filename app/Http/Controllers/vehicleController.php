<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicle;
use App\Models\dealer;

class vehicleController extends Controller
{
    
    public function index()
    {
        $vehicle = vehicule::with('dealer')->paginate(10);
        return view('vehicule.index', compact('vehicule'));
    }

    public function create()
    {
        $dealer = dealer::all();
        return view('vehicule.create', compact('dealer'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'sasiu' => 'required|unique:vehicule',
            'model' => 'required',
            'dealer_id' => 'required|exists:dealer,id',
        ]);

        vehicule::create($request->all());
        return redirect()->route('vehicule.index');
    }

    
    public function show(vehicule $vehicle)
    {
        $vehicul = vehicul::findOrFail($id);
        return view('vehicule.show', compact('vehicul'));
    }

   
    public function edit(vehicule $vehicle)
    {
        $vehicul = vehicul::findOrFail($id);
        $dealers = Dealer::all();
        return view('vehicule.edit', compact('vehicul', 'dealers'));
    }

    public function update(Request $request, vehicule $vehicle)
    {
        $request->validate([
            'sasiu' => 'required|unique:vehicules,sasiu,',
            'model' => 'required',
            'dealer_id' => 'required|exists:dealer,id',
        ]);

        $vehicul = vehicul::findOrFail($id);
        $vehicul->update($request->all());
        return redirect()->route('vehicule.index');
    }

    
    public function destroy(vehicule $vehicle)
    {
        vehicul::destroy($id);
        return redirect()->route('vehicule.index');
    }
}
