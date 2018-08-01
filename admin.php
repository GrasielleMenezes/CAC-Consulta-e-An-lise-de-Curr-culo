<?php
    $matricula = $_POST['matricula'];
    $ok = $_POST['ok'];
    $connect = mysql_connect('localhost','root','030411');
    $db = mysql_select_db('analise');
        if (isset($ok)) {
                     
            
		$verifica = mysql_query("SELECT nome_aluno AS 'NOME DO ALUNO', matricula_aluno AS 'MATRICULA' FROM alunos WHERE matricula_aluno = '$matricula'"); 
		




                if (mysql_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('NAO HA DISCIPLINAS PENDENTES');window.location.href='admin.html';</script>";
                    die();
                }else{
			       //Pegando os nomes dos campos
			$num_fields = mysql_num_fields($verifica);//Obtém o número de campos do resultado
			 
			for($i = 0;$i<$num_fields; $i++){//Pega o nome dos campos
					$fields[] = mysql_field_name($verifica,$i);
			
			 }
			//Montando o cabeçalho da tabela
			$table = '<table border="1"><tr>';
			 
			for($i = 0;$i < $num_fields; $i++){
				$table .= '<th>'.$fields[$i].'</th>';
			}
			 
			//Montando o corpo da tabela
			$table .= '<tbody>';
			while($r = mysql_fetch_array($verifica)){
			$table .= '<tr>';
			for($i = 0;$i < $num_fields; $i++){
			$table .= '<td>'.$r[$fields[$i]].'</td>';
			}
			$table .= '</tr>';
			}
			 
			//Finalizando a tabela
			$table .= '</tbody></table>';
			 
			//Imprimindo a tabela
			echo $table;

		    }
		    
			echo "DISCIPLINAS JÁ CURSADAS OU CURSANDO";
			$verifica2 = mysql_query("SELECT dis.periodo AS 'PERIODO', dis.id_disciplina AS 'CODIGO DA DISCIPLINA', dis.codigo AS 'CODIGO', dis.nome_disciplina AS 'NOME DAS DISCIPLINAS', dis.carga AS 'CARGA HORARIA', dis.credito AS 'CREDITO', dis.pre_requisito AS 'PRE-REQUISITO', pen.matricula_aluno AS 'MATRICULA', pen.situacao AS 'SITUACAO' FROM  pendencias pen JOIN disciplinas dis ON (pen.codigo_disciplinas = dis.codigo) WHERE (pen.matricula_aluno = '$matricula') ORDER BY periodo");
			
                   
						if (mysql_num_rows($verifica2)<=0){
							    			echo"<script language='javascript' type='text/javascript'>alert('NAO HA DISCIPLINAS PENDENTES');window.location.href='admin.html';</script>";
							    			die();
					}else{
						       //Pegando os nomes dos campos
												
						$num_fields2 = mysql_num_fields($verifica2);//Obtém o número de campos do resultado
						 
						for($i = 0;$i<$num_fields2; $i++){//Pega o nome dos campos
								$fields2[] = mysql_field_name($verifica2,$i);
			
						 }
						//Montando o cabeçalho da tabela
						$table2 = '<table border="1"><tr>';
						 
						for($i = 0;$i < $num_fields2; $i++){
							$table2 .= '<th>'.$fields2[$i].'</th>';
						}
						 
						//Montando o corpo da tabela
						$table2 .= '<tbody>';
							while($r2 = mysql_fetch_array($verifica2)){
									$table2 .= '<tr>';
									for($i = 0;$i < $num_fields2; $i++){
										$table2 .= '<td>'.$r2[$fields2[$i]].'</td>';
									}
							$table2 .= '</tr>';
						}
						 
						//Finalizando a tabela
						$table2 .= '</tbody></table>';
						 
						//Imprimindo a tabela
						echo $table2;
						
		                        }

					echo "DEMOSTRATIVO COM TODAS AS DISCIPLINAS";
					$verifica3 = mysql_query("SELECT periodo AS 'PERIODO', id_disciplina AS 'CODIGO DA DISCIPLINA', codigo AS 'CODIGO', nome_disciplina AS 'NOME DAS DISCIPLINAS', carga AS 'CARGA HORARIA', credito AS 'CREDITO', pre_requisito AS 'PRE-REQUISITO' FROM  disciplinas ORDER BY periodo");
			
                   
						if (mysql_num_rows($verifica3)<=0){
							    			echo"<script language='javascript' type='text/javascript'>alert('NAO HA DISCIPLINAS PENDENTES');window.location.href='admin.html';</script>";
							    			die();
					}else{
						       //Pegando os nomes dos campos
												
						$num_fields3 = mysql_num_fields($verifica3);//Obtém o número de campos do resultado
						 
						for($i = 0;$i<$num_fields3; $i++){//Pega o nome dos campos
								$fields3[] = mysql_field_name($verifica3,$i);
			
						 }
						//Montando o cabeçalho da tabela
						$table3 = '<table border="1"><tr>';
						 
						for($i = 0;$i < $num_fields3; $i++){
							$table3 .= '<th>'.$fields3[$i].'</th>';
						}
						 
						//Montando o corpo da tabela
						$table3 .= '<tbody>';
							while($r3 = mysql_fetch_array($verifica3)){
									$table3 .= '<tr>';
									for($i = 0;$i < $num_fields3; $i++){
										$table3 .= '<td>'.$r3[$fields3[$i]].'</td>';
									}
							$table3 .= '</tr>';
						}
						 
						//Finalizando a tabela
						$table3 .= '</tbody></table>';
						 
						//Imprimindo a tabela
						echo $table3;
						
		                        }
		         


		
        }
?>
