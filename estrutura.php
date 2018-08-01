<?php
 
$login = $_POST['login'];
$senha = MD5($_POST['senha']);

$nome = $_POST['nome'];


$disciplina = $_POST['disciplina'];
$horas_comp = $_POST['horas_comp'];
$horas_est = $_POST['horas_est'];



$connect = mysql_connect('localhost','usuario','030411');
$db = mysql_select_db('tcc');
$query_select = "SELECT nome, disciplina, horas_comp, horas_est  FROM alunos WHERE login = '$login' and senha '$senha'";
$select = mysql_query($query_select,$connect);
$reg = mysql_fetch_array($select);

if($reg[status]==ativado)

{

	echo <input name ='checkbox' type='checkbox' value='Ativado' checked> Ativado | Desativado <input name='checkbox' type='checkbox' value='desativado'>;


}
else
{ 

	echo<input name ='checkbox' type='checkbox' value='Ativado' > Ativado | Desativado <input name = 'checkbox' type='checkbox' value='desativado' checked>;
}


?>



