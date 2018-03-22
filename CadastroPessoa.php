<?php
	include_once("cabecalho.php");
?>

<form action="InserirPessoa.php" class="formCad" id="formulario" method="post">
        <ul id="progress">
            <li class="ativo">Dados Pessoais</li>
            <li>Detalhe</li>
            <li>Endereço</li>
        </ul>  
        <fieldset>
            
           <h2>Cadastro de Pessoal</h2>
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="data_nascimento" placeholder="Data Nascimento">
            <input type="text" name="documentoID" placeholder="RG"> 
            
            <h2>Sexo</h2>  
            Masculino
            <input type="radio" name="sexo" value="Masculino">
            Feminino
            <input type="radio" name="sexo" value="Feminino">   
            
            <h2>Endereço</h2>
            <input type="text" name="endereco" placeholder="Rua">
            <input type="text" name="numero" placeholder="Número">
            <input type="text" name="cidade" placeholder="Cidade">
            <input type="submit" name="cadastrar" value="Cadastrar">
            
               
        </fieldset>
        
            
        <!--<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>-->
        <script type="text/javascript" src="js/jquery.js"></script>
       <!-- <script type="text/javascript" src="js/functions.js"></script> -->
    </form>
    
</body>
</html>