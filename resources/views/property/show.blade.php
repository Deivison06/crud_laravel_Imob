@extends('master.master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-lg">
                    <div class="card-header bg-light text-white">
                        <h1 class="display-4" style="color: #000000;">Detalhes do Imóvel</h1>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-12">
                                <h2 class="card-title" style="color: #BE2929;">{{ $imovel->title }}</h2>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <h5>Descrição</h5>
                                <p class="card-text">{{ $imovel->description }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h5>Preço de Aluguel</h5>
                                <p class="card-text">R$ {{ number_format($imovel->rental_price, 2, ',', '.') }}</p>
                            </div>
                            <div class="col-md-6">
                                <h5>Preço de Venda</h5>
                                <p class="card-text">R$ {{ number_format($imovel->sale_price, 2, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ route('imoveis.index') }}" class="btn btn-secondary mr-2">Voltar</a>
                        <a href="{{ route('edit.imovel.form', $imovel->slug) }}" class="btn btn-primary mr-2">Editar</a>
                        <form action="{{ route('remove.imovel', $imovel->slug) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remover</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
