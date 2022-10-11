@extends('template.modelo') <!-- extendendo a view de template-->
@section('titulo', '$sabor->titulo')
@section('conteudo')

<h2>{{ $sabor->titulo }}</h2>

<h3>INGREDIENTES</h3>
<pre>
    {{ $sabor->ingredientes }}
</pre>

<h3>PREPARO</h3>

<pre>
    {{ $sabor->modo_preparo }}
</pre>

@endsection