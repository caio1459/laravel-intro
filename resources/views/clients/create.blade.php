@extends('app')
@section('title', 'Criar Cliente')
@section('content')
<h1>Cadastrar Cliente</h1>
<div class="bg-ligh p-4">
    <form action="{{route('clients.store')}}" method="POST">
        @csrf
        <!-- @csrf -> Gera um token de proteção no form -->
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input name="nome" type="text" class="form-control" id="nome" placeholder="Digite o seu nome">
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
            <a class="btn btn-danger w-25" href="{{route('clients.index')}}"" >
                Voltar
            </a>
        </div>
    </form>
</div>
@endsection