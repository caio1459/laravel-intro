@extends('app')
@section('title', ' Lista de Produtos')
@section('content')

<h1 class="mt-5" style="font-weight: 900;">Lista de Produtos</h1>
<table class="table table-hover" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border: 1px solid black;">
    <thead>
        <tr>
            <th style="background-color: #007977;">ID</th>
            <th style="background-color: #007977;">Nome</th>
            <th style="background-color: #007977;">Quantidade</th>
            <th style="background-color: #007977;">Preço</th>
            <th style="background-color: #007977;">Detalhes</th>
            <th style="background-color: #007977;">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <th>{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->count}}</td>
            <td>{{$product->price}}</td>
            <td>
                <a class="btn btn-outline-info" href="{{route('products.show', $product)}}">
                    <i class="bi bi-info-square"></i>
                </a>
            </td>
            <td>
                <a href="{{route('products.edit', $product)}}" class="btn btn-warning">
                    <i class="bi bi-pencil-square"></i>
                </a>
                <form method="POST" action="{{route('products.destroy', $product)}}">
                    @METHOD('DELETE')
                    @csrf
                    <button
                        type="submit"
                        class="btn btn-danger"
                        onclick="return confirm('Deseja excluir esse produto?')"
                    >
                        <i class="bi bi-trash3"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a class="btn btn-success w-25" href="{{route('products.create')}}">
    Cadastrar Produto
</a>
@endsection