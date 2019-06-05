<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(Request $request) {
        $unseen_movies = [
            'Pokémon: Detetive Pikachu',
            'John Wick - Capítulo 3',
            'MIB: Internacional',
            'Godzilla 2',
            'O Coringa',
            'X-Men: Fênix Negra',
            'Dumbo',
            'Homem Aranha: Longe De Casa',
            'Toy Story 4',
            'O Rei Leão'
        ];

        return view('movies.index', compact('unseen_movies'));
    }

    public function create()
    {
        return view('movies.create');
    }
}