
<?php
    $matricula = $_POST['matricula'];
    $inserir = $_POST['inserir'];
    $titulo = $_POST['titulo'];
    $situacao = $_POST['situacao'];
    $prazo = $_POST['prazo'];
    $data_inicio = $_POST['data'];
    $data=implode('-', array_reverse(explode('/', $data_inicio)));

    $connect = mysql_connect('localhost','root','030411');
    $db = mysql_select_db('analise');

        if (isset($inserir)) 
	{
			
           	
		$query = "INSERT INTO tcc (titulo, prazo_conclusao, data_inicio, id_matricula, situacao) VALUES ('$titulo', '$prazo', '$data','$matricula', '$situacao')";
		$altera = mysql_query($query) or die (mysql_error());
		  
	}
	else   
	{

		 echo"<script language='javascript' type='text/javascript'>alert('NAO HA HORAS CADASTRADAS');window.location.href='admin.html';</script>";
	}

		
	mysql_close($connect);
?>

