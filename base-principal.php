
<!DOCTYPE HTML>
<html>
		

	<head>
		<title> Login de Usuário </title>
	
		<meta charset="utf-8">
        	<meta name="viewport" content="width=device-width">
    		<link href="centralizar.css" rel="stylesheet" type="text/css"/>
		<style type="text/css">
			
			body{

				margin:0;
				padding:150px;
				height:100%;
				background: url(faeterj.jpg)no-repeat 0 0 #fff;
    				background-size: contain;
			    }
			 .tudo{
				 min-height:100%;
				 position:relative;
			      }
			 .conteudo{
					
				  padding:200px;
				  padding-bottom:60px;
				  
			      }
			 .topo{
				  
				  padding:40px;

				  
		 	      }

			 .rodape{
				
				  position:absolute;
				  bottom:0;
				  width:100%;
				  height:90px;
				  
			     }

			
		

		</style>
    	
	</head>
	
	<body>
		
		
		   <div class="tudo">
			
				<div class="topo">
				   <div align = "center">	
					<?php
		

						
							    $login_cookie = $_COOKIE['login'];
								if(isset($login_cookie)){
								    echo"Bem-Vindo, $login_cookie <br>";
								    unset($_cookie['login']);
                    						    
								    
								}else{
								    echo"Bem-Vindo, convidado <br>";
								    
								}
?>
		         		
				     </div>	
					    <p> 
						     <div align = "right"> 
		
								
									
									
									
								 	

									<input type="button" value="Disciplinas" id="disciplinas" name="disciplinas" onClick="window.open('base.php')"style="width: 200px; height: 50px; color:ff9900; background-color:#5efda8"><br>
									<input type="button" value="Horas Complementares" id="horas_compl" name="horas_compl" onClick="window.open('horas_complementares.php')"style="width: 200px; height: 50px; color:ff9900; background-color:#5eb3fd"><br>
									<input type="button" value="Estagio" id="estagio" name="estagio" onClick="window.open('horas_estagio.php')"style="width: 200px; height: 50px; color:ff9900; background-color:#fd6687"><br>
									
									<input type="button" value="TCC" id="tcc" name="tcc" onClick="window.open('tcc.php')"style="width: 200px; height: 50px; color:ff9900; background-color:#fdcd66"><br>
								
									<input type="button" value="Grade de Disciplinas" id="grade" name="grade" onClick="window.open('grade.php')"style="width: 200px; height: 50px; color:ff9900; background-color:#FFD700"><br>
									
									<input type="button" value="Trocar Senha" id="trocarSenha" name="trocarSenha" onClick="window.open('atualiza-senha-aluno.html')"style="width: 200px; height: 50px; color:ff9900; background-color:#FFBBFF"><br>
		
							
							 
				
								
				
							 
						      </div>
					     </p>
				</div>
		   </div>
		   
		  <body background= "faeterj.jpg"></body>
	 
	
	


</html>




