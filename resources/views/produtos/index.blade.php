@extends('layouts.app')

@section('content')
<div class="container">

    <header class="header">
        <h1>ARS <span>VIDROS</span></h1>
        <p>Excelência e Transparência</p>
    </header>

    <div class="info-box">
        <h2>Tabela de Orçamentos e Estoque</h2>
        <p>Consulte abaixo os orçamentos.</p>
    </div>

    <table class="produtos-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Espessura</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produtos as $produto)
            <tr>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->tipo }}</td>
                <td>{{ $produto->espessura }} mm</td>
                <td>{{ $produto->preco }}</td>
                <td>
                    <a href="{{ route('produtos.show', $produto) }}" class="action-btn view-btn">Ver</a>
                    <a href="{{ route('produtos.edit', $produto) }}" class="action-btn edit-btn">Editar</a>
                    <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="action-btn delete-btn" onclick="return confirm('Tem certeza que deseja excluir o produto {{ $produto->nome }}?')">Excluir</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Nenhum produto cadastrado.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

<div class="orcamento-btn-wrapper"> 
    <a href="{{ route('produtos.create') }}" 
    class="orcamento-btn-link">Solicitar Orçamento</a> </div>

</div>
@endsection