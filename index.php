<?php

    include "connect_Mysql.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>Document</title>
</head>
<body>

<div id="menu">
    <ul>
        <li><a href="Index.php">HOME</a></li>
        <li><a href="CadastroPessoa.php">CADASTRAR</a></li>
        <li><a href="GerenciarPessoas.php">GERENCIAR PESSOAS</a></li>
        <li><a href="grafico.php">GRÁFICO</a></li>

    </ul>
    <form id="pesquisar" method="POST" action="AlterarPessoa.php">
        <input type="text" name="documentoID" value="" placeholder="PESQUISAR RG">
        <input type="submit" name="pesquisar" class="acao" value="Pesquisar">
    </form>
</div>
<div id="index">
    BEM VINDO AO SERVIÇO DE CADASTRAMENTO GERENCIAMENTO DE PESSOAS
    <ul>
    <li>MENU CADASTRAR</li>
    Permite cadastramento de pessoas.
    
    <li>MENU GERENCIAR</li>
    Lista todas as pessoas cadastrada permitindo a ALTERAÇÃO e EXCLUSÃO.
    
    <li>MENU GRÁFICO</li>
    Estatísticas. 

    </ul>

</div>