<?php
	include_once("cabecalho.php");
?>

<?php
			include_once("connect_Mysql.php");
			
			$cont = 0;
			if (isset($_POST) && isset($_POST['id_exclude'])) {
				foreach($_POST['id_exclude'] as $element){
					$sql = sprintf("DELETE FROM pessoa where id='%d'", mysql_real_escape_string($element));
					if(mysql_query($sql)==true){
						$cont++;
					}
				}
			}else if (isset($_GET) && isset($_GET['id_exclude'])) {
					$element = $_GET['id_exclude'];
					$sql = sprintf("DELETE FROM pessoa where id='%d'", mysql_real_escape_string($element));
					if(mysql_query($sql)==true){
						$cont++;
					}
			}
			
			if($cont > 0){
			?>
				
					<span><?php echo $cont;?> registro(s) excluído(s) com sucesso.</span>
				
			<?php	
			}
			?>
	<div class="Gerenciar">		
        <form action="#" name="form_Pessoas" method="post">
        <table>
	        <caption>Listagem de Pessoas</caption>
            <thead>
            	<tr>
                	<th></th>
                    
                    <th>NOME </th>
                    <th>DATA NASCIMENTO </th>
                    <th>DOCUMENTO ID</th>
					<th>SEXO</th>
					<th>ENDERECO</th>
					<th>NUMERO</th>
					<th>CIDADE</th>
                    <th></th>
                </tr>
            </thead>
            <tfoot>
            	<tr></tr>
            </tfoot>
            <tbody>
                <?php
					$numreg = 10; // Quantos registros por página vai ser mostrado
					if (!isset($_GET['pg'])) {
						$pg = 0;
					}else{
						$pg = $_GET['pg'];
					}
					$inicial = $pg * $numreg;
			
					//selecionando dentro do intervalo
					$sql = sprintf("SELECT * FROM pessoa LIMIT $inicial, $numreg");
					//$sql = "SELECT * FROM `cliente LIMIT 0, 30 ";
					$result = mysql_query($sql);
					
					//Selecionando o total de registros existentes					
					$sql_conta = mysql_query("SELECT count(*) as count FROM pessoa");					
					$dados = mysql_fetch_array($sql_conta);
					$quantreg = $dados['count'];		

					if(mysql_num_rows($result) > 0 ){
						while($dados = mysql_fetch_array($result)){
							echo "<tr>";
							echo "<td><input type='checkbox' name='id_exclude[]' value='{$dados['id']}'/></td>";
							echo "<td>{$dados['nome']}</td>";
							echo "<td>{$dados['data_nascimento']}</td>";
							echo "<td>{$dados['documentoID']}</td>";
							echo "<td>{$dados['sexo']}</td>";
							echo "<td>{$dados['endereco']}</td>";
							echo "<td>{$dados['numero']}</td>";
							echo "<td>{$dados['cidade']}</td>";
							
							echo "<td class='del'><a href='?id_exclude={$dados['id']}'>Excluir</a></td>";
							echo "</tr>";
						}
				?>
                    
                <?php
						mysql_close($conmy);
					}else{
						echo "<tr><td colspan='5'>Nenhum registro encontrado.</td></tr>";
					}					
					?>
            </body>
        </table>
			
			
            <input type="submit" value="Excluir Selecionados" />
            <?php
            	echo "<td class='edit'><a href='PesquisarPessoa.php?id_edit={$dados['id']}'>Editar Pessoa</a></td>";
            	?>
	</div>			