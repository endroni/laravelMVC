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

Esses são os procedimentos para concluir o bloco 05.

------

## O que vamos ver aqui

Nesse bloco continuamos nosso tratamento aos models buscando dados diretamente do banco de dados para serem exibidos na view receitas.blade.php.

views existentes: 

* listar_sabores.blade.php
* receitas.blade.php
* not_found.blade.php





### 1º passo - Clone esse repositório

`git clone https://github.com/endroni/laravelMVC.git` 

### 2º passo - criando um novo arquivo .env

Navegue até o bloco 05

Faça uma cópia do arquivo `.env.example` e renomeie como apenas `.env`

### 3º passo - Instale o composer

Ao dar um pull para o github, o diretório vendor é ignorado. Portanto, vamos reinstalar o composer com o comando

`composer install`

### 4º passo - crie um arquivo chamado `database.sqlite` dentro do diretório database

`database.sqlite`

### ou então digite o comando abaixo para criar a migrate automaticamente:
`php artisan migrate`

#### Obs. 
* Não se esqueça de descomentar a linha que trata do SQLite no arquivo php.ini
`extension=sqlite3`

* Esse arquivo será nossa base de dados. 


### 5º passo - altere as seguintes linhas no arquivo .env

`DB_CONNECTION=mysql` para `DB_CONNECTION=sqlite`

`DB_DATABASE=laravel` para `DB_DATABASE=./database/database.sqlite`

### 6º passo - crie uma migration 

`php artisan make:model Receitas --migration`

Obs. A flag `--migration` serve para criar a migration ao mesmo tempo que criamos uma model.

Ao executar esse comando, dois arquivos serão criados:

`app/Models/Receitas.php`

`database/migrations/2022_10_04_174330_create_receitas_table.php`



#### Obs. 

Em sua máquina o arquivo terá a data atual do seu servidor será criado no diretório `database/migrations` com o final `...table.php`

### 7º passo - em sua nova migration, crie as colunas correspondentes

Na função: 

`public function up()`

`{`

​	`Schema::create('receitas', function (Blueprint $table) {`

​		`$table->id();`

​		`$table->string('titulo', 255);`

​		`$table->text('ingredientes');`

​		`$table->text('modo_preparo');`

​		`$table->timestamps();`

​	`});`

`}`



#### 8º passo - inicie o serviço de banco de dados

Digite o comando 

`php artisan migrate` 



#### Obs. 

Você pode verificar as tabelas criadas acessando o diretório database `cd database`

e digitando:

`sqlite3 database.sqlite .tables`



#### Obs.

Sempre que realizar alguma alteração no arquivo de migrate, lembre-se de executar novamente o comando : 

`php artisan migrate:fresh`

### 9º passo - inicie o serviço com o comando: 

`php artisan serve`

### Tudo certo!

Se tudo deu certo, agora você deve conseguir acessar a página através das url:

http://127.0.0.1:8000/bolo/

 

------

#### Obs.

Você pode acessar o SQLite digitando o comando abaixo dentro do diretório /database

`cd database`

`sqlite3 database.sqlite`

para sair 

`ctrl + d`

------


