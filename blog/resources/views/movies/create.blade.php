@extends('layout')

@section('cabecalho')
Adicionar Filme
@endsection

@section('conteudo')
    <form method="post">
        <div class="form-group">
            <label for="nome" class="">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection