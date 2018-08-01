<?php
  $host = "localhost";
  $usuario = "usuario";
  $senha = "030411";

  $conexao = mysql_connect($host , $usuario , $senha )
  or die ("Erro ao conectar ao mysql ");

  $banco = "login";
  mysql_select_db( $banco );
?>
