@extends('master.master')

@section('content')
    <div class="container mt-5">
        <h1 class="display-4">Cadastrar Imóvel</h1>
        <form action="{{ route('create.imovel') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>
            <div class="form-group">
                <label for="rental_price">Preço de aluguel</label>
                <input type="text" class="form-control" id="rental_price" name="rental_price" required>
            </div>
            <div class="form-group">
                <label for="sale_price">Preço de venda</label>
                <input type="text" class="form-control" id="sale_price" name="sale_price" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection
