@extends('template.modelo')
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
        <a href="{{ url('/') }}/bolo/{{ $sabor }}">
            {{ ucfirst($sabor) }}        <!-- sabor -->
            ({{ $loop->iteration }})     <!-- item iteração -->

        </a>
    </li>
@endforeach

  
@endsection
