@extends('master.master')

@section('content')
    <div class="container mt-5">
        <h1 class="display-4">Editar Imóvel</h1>
        <form action="{{ route('update.imovel.form', $imovel->slug) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $imovel->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ $imovel->description }}" required>
            </div>
            <div class="form-group">
                <label for="rental_price">Preço de aluguel</label>
                <input type="text" class="form-control" id="rental_price" name="rental_price"
                    value="{{ $imovel->rental_price }}" required>
            </div>
            <div class="form-group">
                <label for="sale_price">Preço de venda</label>
                <input type="text" class="form-control" id="sale_price" name="sale_price"
                    value="{{ $imovel->sale_price }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
@endsection
