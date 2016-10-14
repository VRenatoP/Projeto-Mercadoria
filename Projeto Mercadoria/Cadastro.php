<?php
   
        
    $tipoMercadoria = $_POST["tipoMercadoria"];
	$nomeMercadoria = $_POST["nomeMercadoria"];
	$preco =  $_POST["currency-field"];
	$tipoNegocio =  $_POST["tipoNegocio"];
	$quantidade =  $_POST["Quantidade"];
	
   
			$connection = mysql_connect('localhost', 'gwdes956_herbert', '12345'); 
	mysql_select_db('gwdes956_herbert');

	
		$db_host        = 'localhost'; 
		$db_user        = 'gwdes956_herbert'; 
		$db_pass        = '12345'; // root pass 
		$db_database    = 'gwdes956_herbert';  

		$link = @mysql_connect($db_host,$db_user,$db_pass); 
		mysql_select_db($db_database,$link); 

		$query = "INSERT INTO `t_mercadoria` ( `Tipo_Mercadoria` , `Nome_Mercadoria` , `Quantidade` , `Preco` , `Tipo_Negocio` )VALUES ('". $tipoMercadoria . "', '". $nomeMercadoria . "', '" . $quantidade ."', '" . $preco . "','" . $tipoNegocio . "')"; 

		mysql_query($query); 
		mysql_close(); 

		echo '<script type="text/javascript">
           window.location = "http://www.gwdesenvolvimento.com.br/testeMercadoria/"
      </script>';

    ?>