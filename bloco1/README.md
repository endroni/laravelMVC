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

Esses são os procedimentos para concluir o bloco 01.

------

## Para começar

Se você instalou o PHP "puro", talvés você precise descomentar algumas linhas no arquivo php.ini

### 1º passo - digite o comando no prompt: 

`composer create-project --prefer-dist laravel/laravel [nome-do-projeto]`

[nome-do-projeto] - substitua pelo nome do seu projeto sem os colchetes.

#### Obs.

Caso precise mover seu projeto de uma máquina para outra, você poderá precisar executar o comando abaixo para recriar o diretório vendor e reajustar algumas dependencias. Como exemplo, o próprio fato de você clonar esse repositório. 

`composer install`

### 2º passo - acesse seu projeto:

`cd [nome-do-projeto]`

### 3º passo - Inicie o serviço: 

`php artisan serve`

### 4º passo - Crie uma uma view de teste, crie uma rota e acesse via endereço

------

## Principais diretórios do Laravel

* app/Http/Controllers - todos os controllers devem extender esse controlador principal. 
* app/Models - componentes responsávies pela interligação com o banco de dados. 
* database
* public - pasta raiz do projeto, ficam o css, imagens extras, ...
* resources/view - onde ficam as views
* routes/web.php - arquivo principal de rotas. 
* .env - arquivo de configuração do sistema como o APP_URL, DB_CONNECTION, ...



------

# Olá, mundo no Laravel. 

### 1º passo:

Acesse o arquivo `resources/views/welcome.blade.php` e exclua todo o conteúdo. Esse é o arquivo que o usuário visualiza quando acesso o sistema. 

Insira um código html qualquer e atualize sua página principal. 

### 2º passo: 

Acesse o arquivo `routes/web.php`e vamos criar uma outra rota acrescentando o código abaixo: 

`Route::get('/about', function () {`

  `return view('welcome');`

`});`

Agora acrescente `/about` ao seu endereço URL. Exemplo: http://127.0.0.1:8000/about

### Obs.

{{ códigos php }} No láravel, podemos inserir trechos php com as chaves duplas. 

