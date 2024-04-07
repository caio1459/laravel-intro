<?php

namespace App\Http\Controllers;

use App\Models\Comida;
use Illuminate\Http\Request;

class ComidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comidas = Comida::get();
        return view(
            'comidas.index',
            [
                'comidas' => $comidas
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        $comida = Comida::find($id);
        return view(
            'comidas.show',
            [
                'comida' => $comida
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
