@extends('app')
@section('title', 'Criar Feature')
@section('content')
<h1>Cadastrar Feature</h1>
<div class="bg-ligh p-4">
    <form action="{{route('features.store')}}" method="POST">
        @csrf
        <!-- @csrf -> Gera um token de proteção no form -->
        <div class="mb-3">
            <label for="chave" class="form-label">Chave</label>
            <input name="chave" type="text" class="form-control" id="chave" placeholder="Digite o nome da Feature">
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="number" name="valor" class="form-control" id="valor" placeholder="Digite o preço do Produto">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Digite a qtd desejada">
        </div>
        <div>
            <button class="btn btn-info w-25" type="submit">
                Salvar
            </button>
            <a class="btn btn-danger w-25" href="{{route('features.index')}}"" >
                Voltar
            </a>
        </div>
    </form>
</div>
@endsection