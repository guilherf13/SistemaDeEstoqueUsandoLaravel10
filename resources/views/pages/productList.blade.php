@extends('defalte')
@section('body')
    <a href="{{Route('formProductRegistrer')}}">Cadastrar um produto</a>
    @foreach ($productAll as $item)
        <hr>
            - {{$item['product']}}
            - {{$item['model']}} 
            - {{$item['color']}} 
            - {{$item['value']}} 
            <a href="{{route('deleteProduct', ['id' => $item['id']])}}">Delete</a> /
            <a href="{{route('formProductUpdate', ['id' => $item['id']])}}">Atualizar Dados</a>
        <hr>
    @endforeach
@endsection

