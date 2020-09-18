@extends('template')

@section('titre')
    Articles
@endsection

@section('contenu')
    <h1> Articles </h1>
    <p>article choisi : {{ $numero }}</p>
@endsection