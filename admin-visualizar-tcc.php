<?php
    
    
    $matricula = $_POST['matricula'];
    
    
    
    
    $connect = mysql_connect('localhost','root','030411');
    $db = mysql_select_db('analise');
        
                     
            $verifica = mysql_query("SELECT t.id_matricula AS 'MATRICULA', t.titulo AS 'TITULO', t.data_inicio AS 'DATA DE INICIO', t.prazo_conclusao AS 'PRAZO DE CONCLUSAO', t.situacao AS 'SITUACAO', al.nome_aluno AS 'NOME DO ALUNO' FROM tcc t, alunos al WHERE (al.matricula_aluno = '$matricula' AND t.id_matricula = '$matricula')") or die("erro ao selecionar");
                if (mysql_num_rows($verifica)==0) 
		{
                    echo"<script language='javascript' type='text/javascript'>alert('NAO HA TCC CADASTRADO');window.location.href='base-principal.html';</script>";
                    die();
                }else{
                    
			  //Pegando os nomes dos campos situacao titulo prazo_conclusao data_inicio id_matricula
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
		
	
                
        






?>


