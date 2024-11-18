<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dealer;

class usersController extends Controller
{
    
    public function index()
    {
        $users = User::with('dealer')->paginate(10);
        return view('users.index', compact('users'));
    }

    
    public function create()
    {
        $dealer = Dealer::all();
       return view('users.create', compact('dealer'));
    }

    
    public function store(Request $request)
    {
        $request -> validate([
            'name'=> 'required',
            'birthdate' => 'required|date',
            'dealer_id' => 'required|exists:dealers, id',
        ]);

        User::create($request->all());
        return redirect()->route('users.index');
    }

    
    public function show(User $user)
    {
        $user = user::findOrFail($id);
        return view('users.show', compact('user'));
    }

    
    public function edit( User $user)
    {
        $user = user::findOrFail($id);
        $dealers = Dealer::all();
        return view('users.edit', compact('user', 'dealer'));
    }

    
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'birthdate' => 'required|date',
            'dealer_id' => 'required|exists:dealers,id',
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('users.index');
    }

    
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->route('users.index');
    }
}
