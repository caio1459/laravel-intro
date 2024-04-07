@extends('app')
@section('title', 'Criar Produto')
@section('content')
<h1>Cadastrar Produto</h1>
<div class="bg-ligh p-4">
    <form action="{{route('clients.store')}}" method="POST">
        @csrf
        <!-- @csrf -> Gera um token de proteção no form -->
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input name="name" type="text" class="form-control" id="nome" placeholder="Digite o nome do Produto">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Ex: Rua das Laranjas">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea name="observacao" class="form-control" id="observacao" rows="3"></textarea>
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