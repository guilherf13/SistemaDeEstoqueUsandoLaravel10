<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return $user;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return User::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->password = $request->password;
        $user->cpf = $request->cpf; 
        $user->email = $request->email;
        $user->phone = $request->phone; 
        $user->birthday = $request->birthday;
        $user->address = $request->address;
        $user->save();
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->shoppings()->delete();
        $user->delete(); 
        
        return "id {$id} deletado";
    }
}
