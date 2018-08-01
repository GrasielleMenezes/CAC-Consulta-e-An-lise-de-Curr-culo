
<?php
    $matricula = $_POST['matricula'];
    $inserir = $_POST['inserir'];
    
    
    $senha = sha1($_POST['senha']);

    $connect = mysql_connect('localhost','root','030411');
    $db = mysql_select_db('analise');

        if (isset($inserir)) 
	{
			
           	
		$query = "UPDATE alunos  SET senha='".$senha."' WHERE matricula_aluno='".$matricula."'";
		$altera = mysql_query($query) or die (mysql_error());
		  
	}
	else  
	{

		 echo"<script language='javascript' type='text/javascript'>alert('NAO EXISTE USUARIO');window.location.href='admin.html';</script>";
	}

		
	mysql_close($connect);
?>

