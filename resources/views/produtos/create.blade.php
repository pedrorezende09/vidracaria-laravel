@extends('layouts.app')

@section('content')
    <h2>Novo Produto</h2>

    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf

        <div>
            <label>Nome</label><br>
            <input type="text" name="nome">
        </div>

        <div>
            <label>Tipo</label><br>
            <input type="text" name="tipo">
        </div>

        <div>
            <label>Espessura</label><br>
            <input type="number" step="0.01" name="espessura">
        </div>

        <div>
            <label>Preço</label><br>
            <input type="number" step="0.01" name="preco">
        </div>

        <button type="submit">Salvar</button>
    </form>
@endsection
