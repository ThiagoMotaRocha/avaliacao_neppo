<?php
	include_once("cabecalho.php");
?>

<?php
     include "connect_Mysql.php";
     
     $nome 	                = $_POST['nome'];
     $data_nascimento 		= $_POST['data_nascimento'];
	 $documentoID 			= $_POST['documentoID'];
     $sexo 		            = $_POST['sexo'];
     $endereco 		        = $_POST['endereco'];
     $numero 		        = $_POST['numero'];
	 $cidade 		        = $_POST['cidade'];
	 
	 
     $query =mysql_query(" INSERT INTO pessoa (nome, data_nascimento, documentoID, sexo, endereco, numero, cidade)
     VALUES('$nome', '$data_nascimento', '$documentoID', '$sexo', '$endereco', '$numero', '$cidade')");

			if($_POST["nome"] == "") {
                   echo "<p><font color='red'>Campo Nome não inserido!</font>";
                   $nome == FALSE;
            
			}else if($_POST["data_nascimento"] == "") {
                echo "<p><font color='red'>Campo Data Nascimento não inserido!</font>";
					$data_nascimento == FALSE;
			
			}else if($_POST["documentoID"] == "") {
                echo "<p><font color='red'>Campo Documento Identificação não inserido!</font>";
					$documentoID == FALSE;
   
            }else if($_POST["sexo"] == "") {
                   echo "<p><font color='red'>Campo sexo não marcado!</font>";
                   $sexo == FALSE;
            
                }else if($_POST["endereco"] == "") {
                   echo "<p><font color='red'>Campo endereço não inserido!</font>";
                   $endereco == FALSE;
			
			}else if($_POST["numero"] == "") {
                   echo "<p><font color='red'>Campo número não inserido!</font>";
                   $numero == FALSE;
            
                }else if($_POST["cidade"] == "") {
                echo "<p><font color='red'>Campo cidade não inserido!</font>";
                $cidade == FALSE;
         }
			
			
            if($query == TRUE) {
			
			?>			
						<script type="text/javascript">
						alert("Cadastro Realizado com Sucesso")
						</script>
					
					<?php
                    echo "<br /><br /><a href=\"CadastroPessoa.php\">Inserir Mais [ + ]</a>";                
					?>
                    
			<?php		
            } else {
                    
            ?>
					<script type="text/javascript">
						alert("Erros encontrados!")
						</script>
				
				<?php
                    echo 'Todos os campos devem ser preenchidos!';
                    echo "<br /><br /><a href=\"CadastroPessoa.php\">VOLTAR</a>";
            }
                ?>	
