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

Esses são os procedimentos para concluir o bloco 02.

------

## Rotas no Laravel 

### 1º passo - clone o repositório

### 2º passo - copie o conteúdo do bloco1 em um local para testes

### 3º passo - dentro do diretório bloco1 execute o comando: 

`composer install`

### 4º passo - inicie o serviço com o comando: 

`php artisan serve`



## Definição

"Rotas no Laravel nada mais é do que a forma que o framework utiliza para reconhecer as URL's chamadas e definir o que será exibido para o usuário." 
De maneira prática é o que você digita depois da barra / no endereço da URL.

### Exemplo:

Acesse o arquivo `routes/web.php`

Adicione ao código o seguinte código: 

`Route::get('/bao', function(){`

  `return "<p>Tudo <strong>bão!</strong></p>";`

`});`

Agora acrescente `/bao` ao seu endereço URL. Exemplo: http://127.0.0.1:8000/bao



Observe que: 

:: para acessar métodos da classe
get é o verbo de acesso via URL.
sintaxe: 
    Route::método('endereço url iniciada com /', função retornando o que você deseja passar);
o método get recebe dois parâmetros, endereço da URL e  a função que eu quero retornar



