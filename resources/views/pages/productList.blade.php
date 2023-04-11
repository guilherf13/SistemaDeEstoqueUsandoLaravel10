@extends('defalte')
@section('body')
    <a href="{{Route('formProductRegistrer')}}">Cadastrar um produto</a>
    @foreach ($productAll as $item)
        <hr>
            - Produto = {{$item['product']}}
            - Caracteristicas {{$item['characteristic']}} 
            - Cor {{$item['color']}} 
            - Valor R$ {{$item['value']}}
            - Quantidade em Estoque = {{$item['product_quantity']}}
            <a href="{{route('deleteProduct', ['id' => $item['id']])}}">Delete</a> /
            <a href="{{route('formProductUpdate', ['id' => $item['id']])}}">Atualizar Dados</a>
        <hr>
    @endforeach
@endsection

