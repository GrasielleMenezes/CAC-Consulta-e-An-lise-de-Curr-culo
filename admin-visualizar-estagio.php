<?php
    
    
    $matricula = $_POST['matricula'];
    
    
    
    
    
    $connect = mysql_connect('localhost','root','030411');
    $db = mysql_select_db('analise');
        
                     
            $verifica = mysql_query("SELECT horas.id_matricula AS 'MATRICULA', horas.descricao_estagio AS 'DESCRICAO', horas.horas_estagio AS 'QUANTIDADE DE HORAS', al.nome_aluno AS 'NOME DO ALUNO' FROM horas_estagio horas, alunos al WHERE (al.matricula_aluno = '$matricula' AND horas.id_matricula = '$matricula')") or die("erro ao selecionar");
                if (mysql_num_rows($verifica)==0) 
		{
                    echo"<script language='javascript' type='text/javascript'>alert('NAO HA HORAS CADASTRADAS');window.location.href='base-principal.html';</script>";
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
		$verifica2 = mysql_query("SELECT SUM(horas.horas_estagio) AS 'QUANTIDADE TOTAL DE HORAS DE ESTAGIO' FROM horas_estagio horas, alunos al WHERE (al.matricula_aluno = '$matricula' AND horas.id_matricula = '$matricula')") or die("erro ao selecionar");
                if (mysql_num_rows($verifica2)==0) 
		{
                    echo"<script language='javascript' type='text/javascript'>alert('NAO HA HORAS CADASTRADAS');window.location.href='base-principal.html';</script>";
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
        






?>


