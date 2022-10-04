@extends('template.modelo') <!-- extendendo a view de template-->
@section('titulo', 'Escolha sua receita')
@section('conteudo')

<h2>Sabores:</h2>

@foreach($sabores as $sabor)

    <li>
        <a 
            href="{{ url('/') }}/bolo/{{ $sabor->id }}"> 
                        
            {{ ucfirst($sabor->titulo) }}   <!-- ucfirst deixa a primeira letra maiúscula -->         
        </a>
    </li>      
@endforeach

@endsection