<?php

namespace App\Http\Controllers;
use App\{Farmaco};
class FarmacoController extends Controller
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

    public function index()
    {
        return Farmaco::all();
    }

    public function show($farmaco)
    {
        return (Farmaco::find($farmaco) == NULL) ? 'Aluno não encontrado' : Farmaco::find($farmaco);
    }
    public function store()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

}
