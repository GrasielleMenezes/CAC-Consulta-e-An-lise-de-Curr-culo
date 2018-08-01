<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="menu.css" type="text/css" media="all">
	<title>Disciplinas</title>
   </head>
   <body background="firewall.jpg"></body>
		
   
<?php
    
    $situacao_cookie = $_COOKIE['situacao'];
        if(isset($situacao_cookie)){
            echo"<p align = 'center'> Bem-Vindo, $situacao_cookie </p<br>";
            echo"<p align = 'center'> Essas sao as disciplinas <font color='red'>Pendentes</font> para você </p<br>";
		 include ("mostra_disciplinas.php");
	    	 
		
        }else{
            echo"Bem-Vindo, convidado <br>";
            echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
            echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
        }
?>


