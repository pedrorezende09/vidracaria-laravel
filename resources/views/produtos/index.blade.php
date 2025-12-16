@extends('layouts.app')

@section('content')
    <h2>Lista de Produtos></h2>

    <a href="{{ route('produtos.create') }}">Novo Produto</a>

    <table border="1" cellpadding="5" style="margin-top:10px;">
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
                <td>{{ $produto->espessura }}</td>
                <td>{{ $produto->preco }}</td>
                <td>
                    <a href="{{ route('produtos.show', $produto) }}">Ver</a>
                    <a href="{{ route('produtos.edit', $produto) }}">Editar</a>

                    <form action="{{ route('produtos.destroy', $produto->id) }}"method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                     <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
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
@endsection

                    

        

    