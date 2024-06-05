@extends('master.master')

@section('content')
    <div class="container mt-5">
        <h1 class="display-4">Listagem de Produtos</h1>

        <div class="table-responsive">
            <table class="table table-striped table-bordered mb-4">
                <thead class="thead-dark">
                    <tr>
                        <th>Title</th>
                        <th>Preço de aluguel</th>
                        <th>Preço de venda</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($imoveis as $item)
                        <tr>
                            <td><a href="{{ route('show.imovel.form', $item->slug) }}">{{ $item->title }}</a></td>
                            <td>R$ {{ number_format($item->rental_price, 2, ',', '.') }}</td>
                            <td>R$ {{ number_format($item->sale_price, 2, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('edit.imovel.form', $item->slug) }}" class="btn btn-primary mr-2">Editar</a>
                                <form action="{{ route('remove.imovel', $item->slug) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Remover</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <p><a href="{{ route('create.imovel.form') }}" class="btn btn-primary btn-lg">Cadastrar novo imóvel</a></p>
    </div>
@endsection
