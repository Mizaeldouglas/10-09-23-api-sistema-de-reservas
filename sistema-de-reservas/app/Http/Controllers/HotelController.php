<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        $hotels = Hotel::paginate(10);
        return response()->json($hotels, 200);
    }

    public function create()
    {
        // $hotel = new Hotel();
        // $hotel->save();
        // return response()->json($hotel, 200);
    }

    public function store(Request $request)
    {
        $hotel = new Hotel();
        $hotel->fill($request->all());
        $hotel->save();
        return response()->json($hotel, 200);
    }

    public function show(string $id)
    {
        $hotel = Hotel::find($id);
        if (is_null($hotel)) {
            return response()->json('', 204);
        }
        return response()->json($hotel, 200);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $hotel = Hotel::find($id);
        if (is_null($hotel)) {
            return response()->json([
                'erro' => 'Recurso não encontrado'
            ], 404);
        }
        $hotel->fill($request->all());
        $hotel->save();
        return response()->json($hotel, 200);
    }

    public function destroy(string $id)
    {
        $quantidadeRecursosRemovidos = Hotel::destroy($id);
        if ($quantidadeRecursosRemovidos === 0) {
            return response()->json([
                'erro' => 'Recurso não encontrado'
            ], 404);
        }
        return response()->json('', 204);
    }
}