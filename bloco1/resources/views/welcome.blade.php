<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloco 01</title>
</head>
<body>
    <h1>Olá, mundo!</h1>

    <?php echo 'Olá, mundo com PHP'; ?> </br> <!-- Esse é a forma padrão do PHP -->

    {{ "Olá, mundo com as chaves duplas"}}  <!-- Essa é uma forma moderna de trabalhar com PHP no Laravel -->

    </br>

    {{ url('/')}} <!-- Exibindo a rota raiz -->

    </br>

    <a href="{{url('/')}}">Para onde vamos</a> 
    <!--Primeiro contato com uma rota no Laravel -->

</body>
</html>