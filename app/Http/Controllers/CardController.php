<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\CardAllInfoResource;
use App\Http\Resources\CardResource;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     * Sort by rarity from lowest.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // from lowest to highest rarity
        $card = Card::get()->sortBy('rarity');
        $card = CardResource::collection($card);

        return response()->json(['data' => $card]);
    }

    /**
     * Display a listing of a specific rarity.
     * @return \Illuminate\Http\Response
     */
    public function indexRarity(string $rarity)
    {
        $card = Card::where('rarity', $rarity)->get();
        $card = CardResource::collection($card);

        return response()->json(['data' => $card]);
    }

    /**
     * Display a listing of all active cards.
     * @return \Illuminate\Http\Response
     */
    public function indexActive()
    {
        $card = Card::where('isActive', true)->get();
        $card = CardResource::collection($card);

        return response()->json(['data' => $card]);
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation is not implemented yet
        $card = Card::create($request->all());
        $card = CardResource::make($card);

        return response()->json(['data' => $card], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $card = Card::find($id);
        $card = CardAllInfoResource::make($card);

        return response()->json(['data' => $card]);
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
        $card = Card::find($id);
        $card->update($request->all());
        $card = CardResource::make($card);

        return response()->json(['data' => $card], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Card::find($id)->delete();

        return response()->json(['data' => null], 204);
    }
}
