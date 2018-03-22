<?php
	include_once("cabecalho.php");
?>
<?php
            include "connect_Mysql.php";
            
            $documentoID = $_POST["documentoID"];
            $consulta = mysql_query ("SELECT * FROM pessoa WHERE documentoID = $documentoID;");

            if($consulta == false) {
                ?>
                <script type="text/javascript">
                alert('Pessoa não existe')
                </script>
<?php
               echo "RG não cadastrado!";
               include "PesquisarPessoa.php";

             } else {
               while($camp =@mysql_fetch_array($consulta)){
               
			   $id	= $camp["id"];
               $nome = $camp["nome"];
               $data_nascimento = $camp["data_nascimento"];
               $documentoID = $camp["documentoID"];
               $sexo = $camp["sexo"];
               $endereco = $camp["endereco"];
               $numero = $camp["numero"];
               $cidade = $camp["cidade"];
			   

               }
            }
            print(mysql_error());     //mysql_error ->  Retorna o texto da mensagem de erro da operação anterior do MySQL
			
         // Resultados na tela		
         
				
       ?>
<form method="POST" id="formulario" action="AtualizarPessoa.php">
        <ul id="progress">
            <li class="ativo">Dados Pessoais</li>
            <li>Detalhe</li>
            <li>Endereço</li>
        </ul>  
        <fieldset>
            
        <h2>Cadastro de Pessoal</h2>
           <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="text" name="nome" placeholder="Nome" value="<?php echo $nome;?>">
            <input type="text" name="data_nascimento" placeholder="Data Nascimento" value="<?php echo $data_nascimento;?>">
            <input type="text" name="documentoID" placeholder="RG" value="<?php echo $documentoID;?>"> 

        <h2>Detalhe</h2>
            <h3><Sexo</h3> 
                       
            Masculino
            <input type="radio" name="sexo" value="Masculino">
            Feminino
            <input type="radio" name="sexo" value="Feminino">    
            
            <h2>Endereço</h2>
            <input type="text" name="endereco" placeholder="Rua" value="<?php echo $endereco;?>">
            <input type="text" name="numero" placeholder="Número " value="<?php echo $numero;?>">
            <input type="text" name="cidade" placeholder="Cidade" value="<?php echo $cidade;?>">
            <input type="submit" value="Atualizar">
               
        </fieldset>
            
            
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <!-- <script type="text/javascript" src="js/functions.js"></script> -->
        
    </form>
</body>
</html>