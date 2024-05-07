@extends('app')
@section('title', 'Detalhes do Produto')
@section('content')
<div class="card mt-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border: solid 1px black;">
    <div class="card-header" style="background-color: #007977;">
        <h4>Detalhes do Produto {{ $product->name }}</h4>
    </div>
    <div class="card-body">
        <p><strong>ID: </strong>{{ $product->id }}</p>
        <p><strong>Nome: </strong>{{ $product->name }}</p>
        <p><strong>Preço: </strong>{{ $product->price }}</p>
        <p><strong>Quantidade: </strong>{{ $product->count }}</p>
        <br>
        <a class="btn btn-success w-20" href="{{route('products.index')}}">
            Voltar
        </a>
    </div>
</div>
@endsection