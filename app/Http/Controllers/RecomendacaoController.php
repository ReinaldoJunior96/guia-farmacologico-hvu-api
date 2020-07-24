<?php

namespace App\Http\Controllers;

use App\Farmaco;
use http\Env\Response;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class RecomendacaoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            Farmaco::create($request->all());
            return response()->json(['data'=>'store success!!']);
        }catch (QueryException $e){
            return response()->json(['data'=>'store erro!!']);
        }
    }

    public function update(Request $request, $rec)
    {
        try {
            $rec = Farmaco::find($rec);
            $rec->update($request->all());
            return response()->json(['data'=>'update success!!']);
        }catch (QueryException $e){
            return response()->json(['data'=>'update erro!!']);
        }
    }

    public function delete($rec)
    {
        try{
            $recDelete = Farmaco::find($rec);
            $recDelete->delete();
            return response()->json(['data'=>'delete success!!']);
        }catch (QueryException $e){
            return response()->json(['data'=>'delete fail!!']);
        }
    }

}
