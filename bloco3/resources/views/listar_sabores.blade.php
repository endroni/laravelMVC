@extends('template.modelo') <!-- extendendo a view de template-->
@section('titulo', 'Escolha sua receita')
@section('conteudo')

<h2>Sabores:</h2>

<?php $sabores = ['morango', 'laranja']; ?>

@foreach($sabores as $sabor)

    @if($sabor == 'morango')
        <?php $cor = 'red'; ?>
    @elseif($sabor == 'laranja')
        <?php $cor = 'orange'; ?>        
    @endif

    <li>
        <a href="{{ url('/') }}/bolo/{{ $sabor }}" 
            style="color:{{ $cor }}">
            
            {{ $loop->iteration }}  <!-- item iteração -->
            {{ ucfirst($sabor) }}   <!-- ucfirst deixa a primeira letra maiúscula -->         
        </a>
    </li>      
@endforeach

<!-- Forma estática

<a href="{{ url('/bolo/morango') }}">Morango</a>
<a href="{{ url('/bolo/laranja') }}">Laranja</a>

Fim do exemplo forma estática -->

@endsection