@extends('template.modelo') <!-- extendendo a view de template-->
@section('titulo', 'Escolha sua receita')
@section('conteudo')

<h2>Sabores:</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Receitas</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>

        @foreach($sabores as $sabor)

            <tr>
                <td>{{ $sabor->id }}</td>
                
                <!-- Sabor -->
                <td>
                    <a href="{{ url('/') }}/bolo/{{ $sabor->id }}">                                 
                        {{ ucfirst($sabor->titulo) }}   
                    </a>
                </td>

                <!-- Editar -->
                <td><a href="">Editar</a></td>
                
                <!-- Deletar -->
                <td><a href="{{ url('/bolo/deletar/'.$sabor->id) }}">Deletar</a></td>

            </tr>      
        @endforeach

    </tbody>
</table>

@endsection
