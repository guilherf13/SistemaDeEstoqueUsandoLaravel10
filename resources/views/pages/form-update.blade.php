@extends('defalte')
@section('body')
    <form action="{{Route('updateProduct', ['id' => $id])}}" method="POST">
        @csrf
        <label for="product">Produto</label>
        <input id="product" type="text" name="product" value="{{$product['product']}}">
        <label for="model">Modelo</label>
        <input id="model" type="text" name="model" value="{{$product['model']}}">
        <label for="color">Cor</label>
        <input id="color" type="text" name="color" value="{{$product['color']}}">
        <label for="value">Valor</label>
        <input id="value" type="text" name="value" value="{{$product['value']}}">
        <input type="submit" value="Atualizar">
</form>    
@endsection
