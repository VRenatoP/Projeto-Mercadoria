<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Cadastro de Mercadoria  </title>
    
    
	  <!-- IMPORT JQUERY -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        type="text/javascript"></script>

    <!-- Imports Bootsstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
	<!-- Imports Fa-Fa -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css"/>
    
    
	<script type="text/javascript">
	
	$(document).ready(function () {
        $("#idPrecoMercadoria").on("keyup", null, function () {
            var input = $("#idPrecoMercadoria").val();
            var num = parseFloat(input).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,') + " $";
            $("#idPrecoMercadoria").html(num);
        });
    });
	function showValue(quantidadeMerc)
	{
		document.getElementById("range").innerHTML=quantidadeMerc;
	}
	


	
	</script>
    
  </head>

  <body>

    <form action="Cadastro.php" method="post">
  <h1 class="btn-primary">Mercadorias <i class="fa fa-shopping-cart" aria-hidden="true"></i></h1>

  <div class="column">
    <label for="idTipoMercadoria">Tipo Mercadoria</label>
    <input type="text" id="idTipoMercadoria" name="tipoMercadoria" required />

    <label for="idNomeMercadoria">Nome Mercadoria</label>
    <input type="text" id="idNomeMercadoria" name="nomeMercadoria"  required/>


    

<br/>
<label>Preço</label>
<input id="idPrecoMercadoria" type="text"  name="currency-field"
 value="" data-type="currency" placeholder="R$ 1,000,000.00" required
/>
   
  </div>

  <div class="column">
    <label for="idTipoNegocio">Tipo Negocio</label>

      <select id="idTipoNegocio" name="tipoNegocio" required>
		<option value="Compra">Compra</option>
		<option value="Venda">Venda</option>
		 
	 </select>

  <label for="idQuantidade">Quantidade</label>
  <input id="idQuantidade" type="range" min="1" max="50" name="quantidade" step="1" onchange="showValue(this.value)" />
  <span id="range">0</span>
  
  <br>
  <br>
  <input class="btn-success"type="submit" value="Cadastrar Mercadoria!" />
  

  </div>

</form>

	
    <table border="1" class="table table-striped table-hover">
	<tr class="table-header">
		<th>Codigo Mercadoria</th>
		<th>Tipo Mercadoria</th>
		<th>Nome Mercadoria</th>
		<th>Quantidade</th>
		<th>Preco</th>
		<th>Tipo Negocio</th>
		
	</tr>
	<?php




	 
	
	
	$connection = mysql_connect('localhost', 'gwdes956_herbert', '12345'); 
	mysql_select_db('gwdes956_herbert');

	$query = "SELECT * FROM `t_mercadoria` ";
	$result = mysql_query($query);

	
	
	while($row = mysql_fetch_array($result)){   
	echo "<tr><td>" . $row['Codigo_Mercadoria'] . "</td>" . "<td>" . $row['Tipo_Mercadoria'] ."</td>"."<td>". $row['Nome_Mercadoria'] ."</td><td>". $row['Quantidade'] ."<td>". $row['Preco'] ."</td><td>". $row['Tipo_Negocio'] ."</td></tr>";  //$row['index'] the index here is a field name
	}

	echo "</table>"; 

	mysql_close(); 


	
		
	
	?>
	
    
  </body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <script src="js/validaFormatoMoeda.js"></script>
</html>
