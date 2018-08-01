
<?php
    $matricula = $_POST['matricula'];
    $inserir = $_POST['inserir'];
    
    $descricao = $_POST['descricao'];
    $horas_comp = $_POST['horas_comp'];

    $connect = mysql_connect('localhost','root','030411');
    $db = mysql_select_db('analise');

        if (isset($inserir)) 
	{
			
           	
		$query = "INSERT INTO horas_complementares (descricao, quant_horas, id_matricula) VALUES ('$descricao', '$horas_comp','$matricula')";
		$altera = mysql_query($query) or die (mysql_error());
		  
	}
	else 
	{

		 echo"<script language='javascript' type='text/javascript'>alert('NAO HA HORAS CADASTRADAS');window.location.href='admin.html';</script>";
	}

		
	mysql_close($connect);
?>

