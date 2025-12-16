@extends('layouts.app')

@section('content')
    <h2>Detalhes do Produto</h2>

    <p><strong>Nome:</strong> {{$produto->nome}}</p>
    <p><strong>Tipo:</strong> {{$produto->tipo}}</p>
    <p><strong>Espessura:</strong> {{$produto->espessura}}</p>
    <p><strong>Preço:</strong> {{$produto->preco}}</p>

    <a href="{{ route('produtos.index') }}">Voltar</a>
@endsection