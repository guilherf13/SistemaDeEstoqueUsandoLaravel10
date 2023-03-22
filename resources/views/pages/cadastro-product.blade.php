@extends('defalte')
@section('body')
<menu>
    <li><a href="/">Home</a></li>
    <li><a href="/">Sobre Nos</a></li>
    <li><a href="/">Contatos</a></li>
</menu>
    <form action="{{Route('store')}}" method="POST">
        @csrf
        <label for="product">Produto</label>
        <input id="product" type="text" name="product">
        <label for="model">Modelo</label>
        <input id="model" type="text" name="model">
        <label for="color">Cor</label>
        <input id="color" type="text" name="color">
        <label for="value">Valor</label>
        <input id="value" type="text" name="value">
        <input type="submit" value="Cadastrar">
    </form>
@endsection