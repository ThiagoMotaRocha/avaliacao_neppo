<?php
	include_once("cabecalho.php");
?>
<?php
	       include "connect_Mysql.php";
           
            $id 	                = $_POST["id"];
            $nome 	                = $_POST["nome"];
            $data_nascimento 		= $_POST["data_nascimento"];
            $documentoID 		    = $_POST["documentoID"];
            $sexo 			    = $_POST["sexo"];
            $endereco 		    = $_POST["endereco"];
            $numero 			= $_POST["numero"];
            $cidade 		    = $_POST["cidade"];
			
               
            $consulta =  "UPDATE pessoa SET nome='$nome',
            data_nascimento='$data_nascimento', documentoID='$documentoID', sexo='$sexo', endereco='$endereco', numero='$numero', cidade='$cidade'
            WHERE id='$id'";


            $verificacao = mysql_query($consulta) or die ("ERRO: " . mysql_error());
            if($verificacao==true) {
            }

       ?>
       <script type="text/javascript">
			alert("Dados alterados com Sucesso!")
		</script>