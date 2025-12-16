@extends('layouts.app')

@section('content')
<div class="container"> 
    
    <header class="header">
        <h1>Vidraçaria</h1>
    </header>

    <div class="info-box" style="text-align: left;"> 
        
        <h2>Detalhes do Produto</h2>

        <div class="product-details">
            <p><strong>Nome:</strong> {{ $produto->nome }}</p>
            <p><strong>Tipo:</strong> {{ $produto->tipo }}</p>
            <p><strong>Espessura:</strong> {{ $produto->espessura }} mm</p>
            <p><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
        </div>
        
        <hr style="border-top: 1px solid #ccc; margin: 20px 0;">

        <div style="text-align: center;">
            <a href="{{ route('produtos.edit', $produto) }}" class="action-btn btn-laranja-form" style="margin-right: 10px;">Editar</a>
            
            <a href="{{ route('produtos.index') }}" class="action-btn view-btn">Voltar para Tabela</a>
        </div>
    </div>

</div>
@endsection