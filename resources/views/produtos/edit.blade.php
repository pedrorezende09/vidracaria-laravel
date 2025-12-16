@extends('layouts.app')

@section('content')
    <h2>Editar Produto</h2>

<form action="{{ route('produtos.update', $produto) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Nome</label><br>
        <input type="text" name="nome" value="{{old('nome', $produto->nome)}}">
    </div>

    <div>
        <label>Tipo</label><br>
        <input type="text" name="tipo" value="{{ old('tipo', $produto->tipo) }}">

    <div>
        <label>Espessura</label><br>
        <input type="number" step="0.01" name="espessura" value="{{ old('espessura', $produto->espessura) }}">
    </div>
<div>
        <label>Preço</label><br>
        <input type="number" step="0.01" name="preco" value="{{ old('preco', $produto->preco) }}">
    </div>

    <button type="submit">Atualizar</button>
</form>

    <a href="{{ route('produtos.index') }}">Voltar</a>
@endsection