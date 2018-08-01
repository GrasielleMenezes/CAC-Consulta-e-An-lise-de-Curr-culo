
<?php
    $matricula = $_POST['matricula'];
    $inserir = $_POST['inserir'];
    
    $nome = $_POST['nome'];
    $senha = sha1($_POST['senha']);

    $connect = mysql_connect('localhost','root','030411');
    $db = mysql_select_db('analise');

        if (isset($inserir)) 
	{
			
           	
		$query = "INSERT INTO alunos (nome_aluno, matricula_aluno, senha) VALUES ('$nome', '$matricula','$senha')";
		$altera = mysql_query($query) or die (mysql_error());
		  
	}
	else  
	{

		 echo"<script language='javascript' type='text/javascript'>alert('NAO HA HORAS CADASTRADAS');window.location.href='admin.html';</script>";
	}

		
	mysql_close($connect);
?>

