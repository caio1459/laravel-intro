@extends('app')
@section('title', 'Detalhes do Cliente')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        <h3>Detalhes do Cliente {{ $client->nome }}</h3>
    </div>

    <div class="card-body">
        <p><strong>ID: </strong>{{ $client->id }}</p>
        <p><strong>Nome: </strong>{{ $client->nome }}</p>
        <p><strong>Endereço: </strong>{{ $client->endereco }}</p>
        <p><strong>Observação: </strong>{{ $client->observacao }}</p>
        <br>
        <a class="btn btn-success w-25" href="{{route('clients.index')}}">
            Voltar
        </a>
    </div>
</div>
@endsection