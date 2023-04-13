@extends('defalte')
@section('body')
    <form action="" method="post">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="Cadastrar">
    </form>
@endsection