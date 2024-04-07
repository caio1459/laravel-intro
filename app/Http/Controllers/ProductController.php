<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::get();
        return view(
            'products.index',
            [
                'products' => $products
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');
        Products::create($dados);
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Pega somente uma linha utilizando o método find passando o id como parametro
        $product = Products::find($id);
        return view(
            'products.show',
            [
                'product' => $product
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Busca o produto pelo id
        $product = Products::find($id);
        //Retorna ele na view
        return view(
            'products.edit',
            ['product' => $product]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Busca o produto pelo id
        $product = Products::find($id);
        //Passa os dados que vão ser atualizados
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'count' => $request->count,
        ]);
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Busca o produto pelo id
        $product = Products::find($id);
        //Faz o delete
        $product->delete();
        return redirect('/products');
    }
}
