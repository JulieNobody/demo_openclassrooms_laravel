@extends('template')

@section('titre')
    Users
@endsection

@section('contenu')
    <h1> Users </h1>
    
    {!! Form::open(['url' => 'users']) !!}
        {!! Form::label('nom', 'Entrez votre nom : ') !!}
        {!! Form::text('nom') !!}
        {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}


@endsection