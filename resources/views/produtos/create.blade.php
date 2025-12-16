@extends('layouts.app')

@section('content')
<div class="container"> 
    
    {{-- 1. HEADER: Para exibir a faixa superior e o título da vidraçaria --}}
    <header class="header">
        <h1>Vidraçaria</h1>
        {{-- Se quiser o ARS VIDROS, use: <h1>ARS <span>VIDROS</span></h1> --}}
    </header>

    {{-- 2. INFO-BOX: Para criar o bloco branco centralizado que contém o formulário --}}
    <div class="info-box form-box-edicao"> 
        
        <h2>Novo Produto</h2>

        <form action="{{ route('produtos.store') }}" method="POST">
            @csrf
            
            {{-- Adicionando a classe 'form-group' para organizar o Label e o Input --}}
            <div class="form-group">
                <label>Nome</label>
                {{-- Adicionando old() para manter o valor em caso de erro de validação --}}
                <input type="text" name="nome" value="{{ old('nome') }}">
            </div>

            <div class="form-group">
                <label>Tipo</label>
                <input type="text" name="tipo" value="{{ old('tipo') }}">
            </div>

            <div class="form-group">
                <label>Espessura</label>
                <input type="number" step="0.01" name="espessura" value="{{ old('espessura') }}">
            </div>

            <div class="form-group">
                <label>Preço</label>
                <input type="number" step="0.01" name="preco" value="{{ old('preco') }}">
            </div>

            <button type="submit" class="btn-laranja-form">Salvar</button>
        </form>

        <p style="margin-top: 20px;"><a href="{{ route('produtos.index') }}">Voltar para a Tabela</a></p>
    </div>

</div>
@endsection