@extends('app')
@section('title', ' Lista de Clientes')
@section('content')

<h1>Lista de Clientes</h1>
<table class="table table-hover mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Observação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <th>{{$client->id}}</th>
            <td>
                <a href="{{route('clients.show', $client)}}">{{$client->nome}}</a>
            </td>
            <td>{{$client->endereco}}</td>
            <td>{{$client->observacao}}</td>
            <td>
                <a href="{{route('clients.edit', $client)}}" class="btn btn-warning">
                    <i class="bi bi-pencil-square"></i>
                </a>
                <form action="{{route('clients.destroy', $client)}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza')">
                        <i class="bi bi-trash3"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a class="btn btn-success w-25" href="{{route('clients.create')}}">
    Cadastrar Cliente
</a>
@endsection