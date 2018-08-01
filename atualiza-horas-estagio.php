
<?php
    $matricula = $_POST['matricula'];
    $inserir = $_POST['inserir'];
    
    $descricao = $_POST['descricao'];
    $horas_estagio = $_POST['horas_estagio'];

    $connect = mysql_connect('localhost','root','030411');
    $db = mysql_select_db('analise');

        if (isset($inserir)) 
	{
			
           	$query = "UPDATE horas_estagio  SET horas_estagio='".$horas_estagio."' WHERE (id_matricula='".$matricula."') AND (descricao_estagio= '".$descricao."')";
		
		$altera = mysql_query($query) or die (mysql_error());
		
	}
	else 
	{

		 echo"<script language='javascript' type='text/javascript'>alert('NAO HA HORAS CADASTRADAS');window.location.href='admin.html';</script>";
	}

		
	mysql_close($connect);
?>

