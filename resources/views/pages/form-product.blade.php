@extends('defalte')
@section('body')
    <form action="{{Route('store')}}" method="POST">
        @csrf
        <label for="product">Produto</label>
        <input id="product" type="text" name="product">
        <label for="characteristic">Caracteristicas</label>
        <textarea id="characteristic" name="characteristic" cols="30" rows="10"></textarea>
        <label for="color">Cor</label>
        <input id="color" type="text" name="color">
        <label for="value">Valor</label>
        <input id="value" type="text" name="value">
        <label for="product_quantity">Quantidade</label>
        <input id="product_quantity" type="number" name="product_quantity">
        <input type="submit" value="Cadastrar">
    </form>
@endsection