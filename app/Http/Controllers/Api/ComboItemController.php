<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ComboItem;
use Illuminate\Http\Request;

class ComboItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comboItems = ComboItem::all();

        return response()->json($comboItems, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ComboItem $comboItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ComboItem $comboItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ComboItem $comboItem)
    {
        //
    }
}
