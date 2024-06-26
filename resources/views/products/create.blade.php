@extends('app')
@section('title', 'Criar Produto')
@section('content')
<h1>Cadastrar Produto</h1>
<div class="bg-ligh p-4">
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <!-- @csrf -> Gera um token de proteção no form -->
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input name="name" type="text" class="form-control" id="nome" placeholder="Digite o nome do Produto">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Preço</label>
            <input type="number" name="price" class="form-control" id="price" placeholder="Digite o preço do Produto">
        </div>
        <div class="mb-3">
            <label for="count" class="form-label">Quantidade</label>
            <input type="number" name="count" class="form-control" id="count" placeholder="Digite a qtd desejada">
        </div>
        <div>
            <button class="btn btn-info w-25" type="submit">
                Salvar
            </button>
            <a class="btn btn-danger w-25" href="{{route('products.index')}}"" >
                Voltar
            </a>
        </div>
    </form>
</div>
@endsection