@extends('layouts.app')

@section('content')
<div class="container"> 
    

    <header class="header">
        <h1>Vidraçaria</h1>
    </header>

    <div class="info-box form-box-edicao"> 
        
        <h2>Editar Produto</h2>

        <form action="{{ route('produtos.update', $produto) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" value="{{ old('nome', $produto->nome) }}">
            </div>

            <div class="form-group">
                <label>Tipo</label>
                <input type="text" name="tipo" value="{{ old('tipo', $produto->tipo) }}">
            </div>
            
            <div class="form-group">
                <label>Espessura</label>
                <input type="number" step="0.01" name="espessura" value="{{ old('espessura', $produto->espessura) }}">
            </div>

            <div class="form-group">
                <label>Preço</label>
                <input type="number" step="0.01" name="preco" value="{{ old('preco', $produto->preco) }}">
            </div>

            <button type="submit" class="orcamento-btn">Atualizar</button>
        </form>

        <p style="margin-top: 20px;"><a href="{{ route('produtos.index') }}">Voltar</a></p>
    </div>

</div>
@endsection