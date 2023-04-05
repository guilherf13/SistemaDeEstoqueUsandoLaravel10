@extends('defalte')
@section('body')
    <a href="{{Route('formProductRegistrer')}}">Cadastrar um produto</a>
    @foreach ($productAll as $item)
        <hr>
            - {{$item['product']}}
            - {{$item['characteristic']}} 
            - {{$item['color']}} 
            - {{$item['value']}}
            - Quantidade em Estoque = {{$item['product_quantity']}}
            <a href="{{route('deleteProduct', ['id' => $item['id']])}}">Delete</a> /
            <a href="{{route('formProductUpdate', ['id' => $item['id']])}}">Atualizar Dados</a>
        <hr>
    @endforeach
@endsection

