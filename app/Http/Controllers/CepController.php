<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CepController extends Controller
{
    public function index()
    {
        return view('cep.index');
    }

    public function search(Request $request)
    {
        $cep = $request->cep;
        $response = Http::withOptions(['verify' => false])->get('https://viacep.com.br/ws/' . $cep . '/json/');
        $responseJson = $response->json();
        return view('cep.index', [
            'data' => $responseJson
        ]);
    }
}
