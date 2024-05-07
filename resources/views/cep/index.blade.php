@extends('app')
@section('title', 'Consultar CEP')
@section('content')


<div class="bg-ligh p-4">
    <h1>Consultar CEP</h1>
    <form action="{{route('cep.search')}}" method="POST">
        @csrf
        <!-- @csrf -> Gera um token de proteção no form -->
        <div class="mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input name="cep" maxlength="8" value="" type="number" class="form-control" id="cep" placeholder="Digite o seu CEP">
        </div>
        <button class="btn btn-info w-25" type="submit">
            Consultar
        </button>
    </form>

    @if(isset($data['cep']))
    <table class="table table-hover mt-4">
        <thead>
            <tr>
                <th>CEP</th>
                <th>Logradouro</th>
                <th>Complemento</th>
                <th>Bairro</th>
                <th>Localidade</th>
                <th>UF</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>{{$data['cep']}}</th>
                <th>{{$data['logradouro']}}</th>
                <th>{{$data['complemento']}}</th>
                <th>{{$data['bairro']}}</th>
                <th>{{$data['localidade']}}</th>
                <th>{{$data['uf']}}</th>
            </tr>
        </tbody>
    </table>
    @else
    <div class="w-100 text-center mt-5">
        <h2 class="text-danger">CEP inexistente!</h2>
    </div>
    @endif

</div>
@endsection