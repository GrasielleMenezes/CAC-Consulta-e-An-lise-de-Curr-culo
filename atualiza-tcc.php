<?php
    $matricula = $_POST['matricula'];
    $inserir = $_POST['inserir'];
    
    $situacao = $_POST['situacao'];
    $titulo = $_POST['titulo'];
    $prazo_conclusao = $_POST['prazo_conclusao'];
    $data_inicio = $_POST['data_inicio'];
    $data=implode('-', array_reverse(explode('/', $data_inicio)));

    $connect = mysql_connect('localhost','root','030411');
    $db = mysql_select_db('analise');

        if (isset($inserir)) 
	{
			
           	$query = "UPDATE tcc  SET situacao='".$situacao."', prazo_conclusao='".$prazo_conclusao."', data_inicio='".$data."' WHERE (id_matricula='".$matricula."') AND (titulo='".$titulo."')";
		
		$altera = mysql_query($query) or die (mysql_error());
		
	}
	else 
	{

		 echo"<script language='javascript' type='text/javascript'>alert('NAO HA HORAS CADASTRADAS');window.location.href='admin.html';</script>";
	}

		
	mysql_close($connect);
?>
