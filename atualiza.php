
<?php
    $matricula = $_POST['matricula'];
    $atualizar = $_POST['atualizar'];
    $disciplinas = $_POST['disciplinas'];
    $_valor = '';
    
    $situacao = $_POST['situacao'];
    $connect = mysql_connect('localhost','root','030411');
    $db = mysql_select_db('analise');
        if (isset($atualizar)) 
	{
           
		$query = "UPDATE pendencias SET situacao='".$situacao."' WHERE matricula_aluno='".$matricula."' AND codigo_disciplinas='".$disciplinas."'";
		$altera = mysql_query($query) or die (mysql_error());
		
	}
	else
	{

		 echo"<script language='javascript' type='text/javascript'>alert('NÃO ESTÁ ATUALIZADO');window.location.href='admin.html';</script>";
	}

		
	mysql_close($connect);
?>

