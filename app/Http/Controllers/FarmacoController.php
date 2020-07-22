<?php

namespace App\Http\Controllers;

use App\{Farmaco};
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class FarmacoController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return Farmaco::all();
    }

    public function show($farmaco)
    {
        return (Farmaco::find($farmaco) == NULL)
            ? 'Fármaco não encontrado'
            : Farmaco::find($farmaco);
    }

    public function store(Request $request)
    {
        try {
            Farmaco::create($request->all());
            return response()->json(['data' => 'store success!!']);
        } catch (QueryException $e) {
            return response()->json(['data' => 'Erro']);
        }
    }

    public function update(Request $request, $idFarmaco)
    {
        try {
            $farmaco = Farmaco::find($idFarmaco);
            $farmaco->update($request->all());
            return response()->json(['data' => 'update success!!']);
        } catch (QueryException $e) {
            return response()->json(['data' => 'Erro']);
        }
    }

    public function delete($farmaco)
    {
        try {
            $deleteFarmaco = Farmaco::find($farmaco);
            $deleteFarmaco->delete();
            return response()->json(['data' => 'delete success!!']);
        } catch (QueryException $e) {
            return response()->json(['data' => 'Erro']);
        }
    }

}
