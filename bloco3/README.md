<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# LARAVEL COM MVC

Aqui você encontrará um passo a passo para a criação de um sistema de receitas. 

Para esse projeto iremos utilizar o framework Laravel para organizar nossa aplicação dentro dos padrões MVC.

### Ferramentas necessárias: 

* [PHP](https://www.php.net/)

* [SQLite3](https://www.sqlite.org/)

* [Composer](https://getcomposer.org/)

* [Visual Studio Code](https://code.visualstudio.com/)

Esses são os procedimentos para concluir o bloco 03.

------

## O que vamos ver aqui

Nesse bloco foi construido algumas view com páginas dinâmicas através do blade.

Agora o projeto possui um template padrão chamado modelo.blade.php que está dentro do diretório template e algumas views: 

* listar_sabores.blade.php

* laranja.blade.php

* morango.blade.php

* not_found.blade.php

O template está utilizando https://getbootstrap.com/

E temos um css próprio chamado estilo.css dentro do diretório public/css



### 1º passo - Clone esse repositório

`git clone https://github.com/endroni/laravelMVC.git` 

### 2º passo - criando um novo arquivo .env

Navegue até o bloco 03

Faça uma cópia do arquivo `.env.example` e renomeie como apenas `.env`

### 3º passo - Instale o composer

Ao dar um pull para o github, o diretório vendor é ignorado. Portanto, vamos reinstalar o composer com o comando

`composer install`

### 4º passo - inicie o serviço com o comando: 

`php artisan serve`

### Tudo certo!

Se tudo deu certo, agora você deve conseguir acessar a página através das url:

http://127.0.0.1:8000/

http://127.0.0.1:8000/bolo/

http://127.0.0.1:8000/minha-view



------



#### Obs.

Se você instalou o PHP "puro", talvés você precise descomentar algumas linhas no arquivo php.ini

Caso precise mover seu projeto de uma máquina para outra, você poderá precisar executar o comando abaixo para recriar o diretório vendor e reajustar algumas dependencias. Como exemplo, o próprio fato de você clonar esse repositório. 



------

## Principais tópicos do Laravel

### @yield

`<title>@yield('titulo')</title>`

Permite "puxar" o valor da variável, passando para o título dinamicamente.

`@yield('conteudo')`

Irá permitir "puxar" o conteúdo de uma view e inserir no local dinamicamente.



### @extends('diretorio.viewPadrao')

O arquivo com o conteúdo deverá extender o template padrão com essa linha exemplo: 

`@extends('template.modelo')`

### @section('titulo', 'Nome do título')

É aqui que fica o valor do título que mensionamos a cima, exemplo: 

`@section('titulo', 'Aula 03 de Laravel')`

### @section('conteudo')

Nessa view irá ficar o conteúdo que será passado pelo @yield('conteudo'). Nesse caso iremos precisar encerrar a section com o 

### @endsection 



### Toda view que estende um template padrão irá precisar de um início parecido com: 

`@extends('template.modelo')`

`@section('titulo', 'Bolo de Laranja')`

`@section('conteudo')`

Conteúdo da página

`@endsection`



### Exemplo de rota dinâmica

`Route::get('/bolo/{sabor}', function ($sabor) {`

​    `switch($sabor){`

​	`case 'laranja': return view('laranja'); break;`

​    `case 'morango': return view('morango'); break;`

​    `}`

`});`

Essa rota precisa ficar dentro do arquivo `web.php` que fica dentro do diretório `routes`

