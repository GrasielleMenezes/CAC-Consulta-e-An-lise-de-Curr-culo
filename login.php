<?php
    $login = $_POST['login'];
    $entrar = $_POST['entrar'];
    $senha = sha1($_POST['senha']);
    $connect = mysql_connect('localhost','root','030411');
    $db = mysql_select_db('analise');
        if (isset($entrar)) {

		
                     
            $verifica = mysql_query("SELECT * FROM alunos WHERE nome_aluno = '$login' AND senha = '$senha'") or die("erro ao selecionar");
                if (mysql_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
                    die();
                }{
                    
			    if(($login == 'admin') & ($senha == sha1('admin2015')))
			    {

				header("Location:admin.html");
			    }
			    else{
					setcookie("login",$login);
		    	    		setcookie("senha",$senha);
                            		header("Location:base-principal.php");
                		}
			}
        }
?>


