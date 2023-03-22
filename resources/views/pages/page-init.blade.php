@extends('defalte')
@section('body')
    <h1>Pagina Inicial</h1>

    <p>Bem Vindo</p>

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/">Sobre Nos</a></li>
        <li><a href="/">Contatos</a></li>
    </ul>

    <a href="{{Route('register')}}">Clique aqui para cadastrar um podruto</a>
@endsection