
<?php
    $matricula = $_POST['matricula'];
    $inserir = $_POST['inserir'];
    $disciplinas = $_POST['disciplinas'];
    $situacao = $_POST['situacao'];

    $connect = mysql_connect('localhost','root','030411');
    $db = mysql_select_db('analise');

        if (isset($inserir)) 
	{
		//echo "$matricula, $disciplinas, $situacao";
           
		$query = "INSERT INTO pendencias (matricula_aluno, codigo_disciplinas, situacao) VALUES ('$matricula', '$disciplinas','$situacao')";
		$altera = mysql_query($query) or die (mysql_error());

		
	}
	else
	{

		 echo"<script language='javascript' type='text/javascript'>alert('NÃO FOI MATRICULADO');window.location.href='admin.html';</script>";
	}

		
	mysql_close($connect);
?>

