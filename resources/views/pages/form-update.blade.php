@extends('defalte')
@section('body')
    <form action="{{Route('updateProduct', ['id' => $id])}}" method="POST">
        @csrf
        <label for="product">Produto</label>
        <input id="product" type="text" name="product" value="{{$product['product']}}">
        <label for="characteristic">Caracteristicas</label>
        <textarea id="characteristic" name="characteristic" cols="30" rows="10">{{$product['characteristic']}}</textarea>
        <label for="color">Cor</label>
        <input id="color" type="text" name="color" value="{{$product['color']}}">
        <label for="value">Valor</label>
        <input id="value" type="text" name="value" value="{{$product['value']}}">
        <label for="product_quantity">Quantidade</label>
        <input id="product_quantity" type="number" name="product_quantity" value="{{$product['product_quantity']}}">
        <input type="submit" value="Atualizar">
</form>    
@endsection
