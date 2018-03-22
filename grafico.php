<?php
	include_once("cabecalho.php");
?>
<?php

include "connect_Mysql.php";

$porc = array();
$sexo = array();
$cor = array();

$cor[0] = '#ff3300';
$cor[1] = '#0000ff';
$i = 0;
$sql = "SELECT *  FROM `pessoa` WHERE `sexo` LIKE \'Masculino\' ORDER BY `id` ASC";
$result = mysql_query($sql);

$sql_conta = mysql_query("SELECT count(*) as count FROM pessoa");					
					$dados = mysql_fetch_array($sql_conta);
                    $quantreg = $dados['count'];
                    

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link type="text/javascript" src="css/style.css"/>
    <script type="text/javascript" src="https://www.google.com/jaapi"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
    <script type="text/javascript">
   
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Quantidade", { role: "style" } ],
        ["Masculino", 2.0, "#b87333"],
        ["Feminino", 3.0, "silver"],    
        
      ]); 

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Estatística de Gêneros Cadastrados",
        width: 600,
        height: 400,
        bar: {groupWidth: "70%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
        </div>
</head>
<body>
</body>
</html>