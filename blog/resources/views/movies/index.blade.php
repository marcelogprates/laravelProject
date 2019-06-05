@extends('layout')

@section('cabecalho')
Filmes
@endsection

@section('conteudo')
<a href="/movies/criar" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach($unseen_movies as $us_movie)
    <li class="list-group-item"><?= $us_movie; ?></li>
    @endforeach
</ul>
@endsection
