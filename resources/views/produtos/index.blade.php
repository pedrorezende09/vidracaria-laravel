@extends('layouts.app')

@section('content')
    <a href="{{ route('produtos.create') }}">Novo Produto</a>

    <table border="1" cellpadding="5">
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
            @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->tipo }}</td>
                <td>{{ $produto->espessura }}</td>
                <td>{{ $produto->preco }}</td>
                <td>
                    <a href="{{ route('produtos.show', $produto->id) }}">Ver</a>
                    <a href="{{ route('produtos.edit', $produtoedit->id) }}">Editar</a>

                    <form action="{{ route('produtos.destroy', $produto->id) }}"method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
@endsection

                    

        

    