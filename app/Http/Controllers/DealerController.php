<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\dealer;


class DealerController extends Controller
{
    
    public function index()
    {
        $dealer = Dealer::paginate(10);
        return view('dealer.index', compact('dealer'));
    }

    public function create()
    {
        return view('dealer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'CEC'=>'required|unique:dealer,CEC',
            'CUI'=>'required|unique:dealer,CUI',
        ]);
        Dealer::create($request->all());
        return redirect()->route('dealer.index');
    }

    
    public function show(Dealer $dealer)
    {
       return view('dealers.show', compact('dealer'));
    }

   
    public function edit(Dealer $dealer)
    {
        return view('dealer.edit', compact('dealer'));
    }

    
    public function update(Request $request, Dealer $dealer)
    {
        $request->validate([
            'name' => 'required|string',
            'CEC' => 'required|unique:dealer, CEC, {$dealer->id}',
            'CUI' => 'required|unique:dealer, CUI, {$dealer->id}',
        ]);
        $dealer->update($request->all());
        return redirect()->route('dealer.index');
    }

    public function destroy(Dealer $dealer)
    {
        $dealer->delete();
        return redirect()->route('dealer.index');
    }
}
