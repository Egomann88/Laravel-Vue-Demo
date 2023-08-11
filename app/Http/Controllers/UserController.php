<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // validation is not implmented yet
        return response()->json(['data' => User::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json(['data' => 'create method']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation is not implemented yet
        $user = User::create([
            'isActive' => $request->isActiveUser,
            'isAdmin' => $request->isAdmin,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // card is created when a user is created
        // validation is not implemented yet
        $card = Card::create([
            'name' => $request->name,
            'entryYear' => $request->entryYear,
            'rarity' => $request->rarity,
            'isActive' => $request->isActiveCard,
            'cardImg' => $request->cardImg,
            'specialization' => $request->specialization,
            'age' => $request->age,
            'isSpecial' => $request->isSpecial,
            'biography' => $request->biography,
        ]);

        return response()->json(['data' => [$user, $card]], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(['data' => User::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return response()->json(['data' => 'edit method']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validation is not implemented yet
        $user = User::find($id);
        $user->update($request->all());

        return response()->json(['data' => $user], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();

        return response()->json(['data' => null], 204);
    }
}
