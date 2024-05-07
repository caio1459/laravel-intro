@extends('app')
@section('title', 'Lista de Features')
@section('content')
<h1 class="mt-5" style="font-weight: 900;">Lista de Feautures</h1>
<table class="table table-hover" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border: 1px solid black;">
    <thead>
        <tr>
            <th style="background-color: #007977;">ID</th>
            <th style="background-color: #007977;">Chave</th>
            <th style="background-color: #007977;">Valor</th>
            <th style="background-color: #007977;">Descrição</th>
        </tr>
    </thead>
    <tbody>
        @foreach($features as $feature)
        <tr>
            <th>{{$feature->id}}</th>
            <td>{{$feature->chave}}</td>
            <td>{{$feature->valor}}</td>
            <td>{{$feature->descricao}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a class="btn btn-success w-25">
    Cadastrar Produto
</a>
@endsection